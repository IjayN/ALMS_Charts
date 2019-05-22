<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ForcedLeaveC extends Controller
{
    public function createForcedLeave(Request $request,$id)
    {
        $employee = User::find($id);
        $user = auth()->user();
        if ($user->type->name != 'HR' && $user->type->name !='Admin') {
            Session::flash('danger','You are not authorised to make this transaction');
            dd('here');
            return redirect()->back();
        }

        $request->validate([
            'reason' => 'required'
        ]);

        if ($employee == null) {
            Session::flash('danger','user with that id is not found');
        }
        $forcedLeave = $employee->forcedLeave()->create([
            'reason' => $request->get('reason'),
            'active' => true
        ]);
        Session::flash('message','Forced leave created successfully');

        return redirect()->route('all-active');
    }
    public function allForcedLeaves()
    {
        $user = auth()->user();
        if ($user->type->name != 'HR'&& $user->type->name !='Admin') {
            Session::flash('danger','You are not authorised to make this transaction');
            return redirect()->back();
        }
        $forcedLeaves = \App\ForcedLeave::orderBy('id', 'desc')->with('user')->get();
        return view('all_forced',compact('forcedLeaves'));

    }

    public function activeForcedLeaves()
    {
        $user = auth()->user();
        if ($user->type->name != 'HR' && $user->type->name !='Admin') {
            Session::flash('danger','You are not authorised to make this transaction');
            return redirect()->back();
        }

        $forcedLeaves = \App\ForcedLeave::where('active', true)->orderBy('id', 'desc')->with('user')->get();
        return view('all_compulsory',compact('forcedLeaves'));
    }

    public function deactivateForcedLeave($id)
    {
        $user = auth()->user();
        if ($user->type->name != 'HR' && $user->type->name !='Admin') {
            Session::flash('danger','You are not authorised to make this transaction');
            return redirect()->back();
        }
        $forcedLeave    =    \App\ForcedLeave::where('id', $id)->with('user')->first();
        if ($forcedLeave == null){
            Session::flash('danger','Leave not found');
            return redirect()->back();
        }
        $forcedLeave->update([
            'active'    =>  false
        ]);

        return redirect()->back();
    }
}
