<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ForcedLeave extends Controller
{
    public function createForcedLeave(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }

        $validate = Validator::make($request->all(), [
            'userID' => 'required',
            'reason' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'error' => true,
                "errors" => $validate->getMessageBag(),
                "message" => "provide a valid user id"
            ]);
        }

        $user = User::find($request->get('userID'));

        if ($user == null) {
            return response()->json([
                "error" => true,
                "message" => "User not found"
            ], 404);
        }

        $forcedLeave = $user->forcedLeave()->create([
            'reason' => $request->get('reason'),
            'active' => true
        ]);

        return response()->json([
            "error" => false,
            "message" => "Forced leave created successfully",
            "forcedLeave" => $forcedLeave
        ]);
    }

    public function forcedLeaves()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }

        $forcedLeaves = \App\ForcedLeave::orderBy('id', 'desc')->with('user')->get();
        return response()->json([
            "error" => false,
            "message" => "Forced leave created successfully",
            "forcedLeave" => $forcedLeaves
        ]);
    }

    public function activeForcedLeaves()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }

        $forcedLeaves = \App\ForcedLeave::where('active', true)->orderBy('id', 'desc')->with('user')->get();
        return response()->json([
            "error" => false,
            "message" => "Forced leave created successfully",
            "forcedLeave" => $forcedLeaves
        ]);
    }

    public function deactivateForcedLeave(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }

        $validate   =   Validator::make($request->all(),[
            'forcedLeaveID' =>  'required'
        ] );

        if ($validate->fails()) {
            return response()->json([
                'error' =>  false,
                "message" => "Validation error",
                "errors"    =>  $validate->getMessageBag()
            ]);
        }

        $forcedLeave    =    \App\ForcedLeave::where('id', $request->get('forcedLeaveID'))->with('user')->first();
        if ($forcedLeave == null){
            return response()->json([
                "error" =>  true,
                "message" => "Leave not found",
            ], 404);
        }
        $forcedLeave->update([
            'active'    =>  false
        ]);

        return response()->json([
            'error' =>  false,
            'message'   =>  "Forced leave deactivated successfully",
            "forcedLeave"   =>  $forcedLeave
        ]);
    }
}
