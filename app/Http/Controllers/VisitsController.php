<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FCM\PushNotificationsController;
use App\User;
use App\Visit;
use App\Visitors;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VisitsController extends Controller
{
    /**
     * @var PushNotificationsController
     */
    private $pushNotificationsController;

    /**
     * VisitsController constructor.
     * @param PushNotificationsController $pushNotificationsController
     */
    public function __construct(PushNotificationsController $pushNotificationsController)
    {
        $this->pushNotificationsController = $pushNotificationsController;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function newVisit(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'Watchman' && $user->type->name != 'Receptionist') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $validate = Validator::make($request->all(), [
            'visitor_id' => 'required',
            'employee_id' => 'required',
            'reason' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Kindly upload a valid image"
            ]);
        }

        $visitor = Visitors::find($request->get('visitor_id'));
        $employee = User::find($request->get('employee_id'));
        if ($visitor == null) {
            return response()->json([
                "error" => true,
                "message" => "Visitor not found"
            ], 404);
        }
        if ($employee == null) {
            return response()->json([
                "error" => true,
                "message" => "Employee  not found"
            ], 404);
        }

        $visit = $visitor->visit()->create([
            'reason' => $request->get('reason'),
            'user_id' => $employee->id,
            'time_in' => Carbon::now(),
            'time_out' => Carbon::now()
        ]);
        /*
         * Send FCM message here
         */
        $this->pushNotificationsController->sendNotification($employee, $visitor, $employee->pushToken);
        return response()->json([
            "error" => false,
            "message" => "Make sure to sign out when you leave",
            'visit' => $visit
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function visits()
    {
        $visits = Visit::orderBy('id', 'desc')->with('visitor', 'employee')->get();

        return response()->json([
            'error' => false,
            "message" => "List of all visits",
            'visits' => $visits
        ]);
    }
     
     
     public function my_visitors()
    {
        $my_visitors = Visit::where('user_id', auth('api')->user()->id)->orderBy('id', 'desc')->with('visitor')->get();


                return response()->json([
                    'error' => false,
                    "message" => "My Visitors",
                    'my_visitors' => $my_visitors
                ]);
    }
    
    
}
