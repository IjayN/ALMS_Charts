<?php

namespace App\Http\Controllers;

use App\LeaveApplication;
use Illuminate\Http\Request;

class RelieverController extends Controller
{
    public function relieverRequests(Request $request)
    {
        $requests = LeaveApplication::where('reliever', auth('api')->user()->id)->with('user')->where('releiver_approval','=','pending')->orderBy('id', 'desc')->get();

        return response()->json([
            'requests' => $requests,
            'message' => 'Reliever requests',
            'error' => false
        ]);
    }
    public function reliever2Requests(Request $request)
    {
        $requests = LeaveApplication::where('reliever2', auth('api')->user()->id)->with('user')->where('releiver_approval','=','approved')->where('reliever2_approval','=','pending')->orderBy('id', 'desc')->get();

        return response()->json([
            'requests' => $requests,
            'message' => 'Reliever 2 requests',
            'error' => false
        ]);
    }
    public function reliever3Requests(Request $request)
    {
        $requests = LeaveApplication::where('reliever3', auth('api')->user()->id)->with('user')->where('reliever2_approval','=','approved')->where('reliever3_approval','=','pending')->orderBy('id', 'desc')->get();

        return response()->json([
            'requests' => $requests,
            'message' => 'Reliever 3 requests',
            'error' => false
        ]);
    }






}
