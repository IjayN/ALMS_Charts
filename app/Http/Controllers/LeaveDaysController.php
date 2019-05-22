<?php

namespace App\Http\Controllers;

use App\LeaveDays;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveDaysController extends Controller
{
    public function __construct()
    {

    }

    public function employeeLeaveDays(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'userID' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ], 422);
        }

        $leaveDays = LeaveDays::where('user_id', $request->userID)->with('user')->first();
        return response()->json([
            'error' => false,
            'message' => "Employee leave days",
            'leaveDays' => $leaveDays
        ]);
    }

    public function employeesLeaveDays()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $leaveDays = LeaveDays::with('user')->orderBy('id', 'desc')->get();
        return response()->json([
            'error' => false,
            "message" => "All employees Leave Days",
            "users" => $leaveDays
        ]);
    }

    public function resetEmployeesLeaveDays()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        /*
         * Get all active users
         */
        $users = User::where('active', true)->with('leaveDays')->get();
        foreach ($users as $user) {
            $user->leaveDays()->update([
                'annualDays' => config('app_settings.annualLeaveDays'),
                'daysGone' => 0,
                'year' => date('Y', strtotime(Carbon::now())),
                'daysRemaining' => config('app_settings.annualLeaveDays')
            ]);
        }
        return response()->json([
            'error' => false,
            "message" => "Leave Days reset successfully",
            "users" => $users
        ]);
    }



   

    public function resetEmployeeLeaveDays(Request $request)
    {
        $user = auth('api')->user();
        $validate = Validator::make($request->all(), [
            'userID' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ], 422);
        }


        $employee = User::where('id', $request->get('userID'))->with('leaveDays')->first();
        if ($employee == null) {
            return response()->json([
                "error" => true,
                "message" => "employee not found"
            ], 404);
        }
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $employee->leaveDays()->update([
                'annualDays' => config('app_settings.annualLeaveDays'),
                'daysGone' => 0,
                'year' => date('Y', strtotime(Carbon::now())),
                'daysRemaining' => config('app_settings.annualLeaveDays'),
            ]);

        return response()->json([
            "error" => false,
            "message" => "Employee leave days reset successfully",
            "employee" => $employee
        ]);
    }
}
