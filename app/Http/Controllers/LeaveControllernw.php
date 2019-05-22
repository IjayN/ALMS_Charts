<?php

namespace App\Http\Controllers;

use App\ForcedLeave;
use App\LeaveDays;
use Illuminate\Http\Request;
use App\User;
use App\LeaveApplication;
use App\Holidays;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Mail;
use Illuminate\Support\Carbon;
use App\Http\Controllers\FCM\PushNotificationsController;
use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\Config;


class LeaveController extends Controller
{
    private $leaveDays;

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


    public function applyLeave(Request $request)
    {
        $usersId = auth('api')->user('id');
        $type_id = auth('api')->user('type_id')->type_id;



        $id = $usersId['id'];
        $this->leaveDays = LeaveDays::where('user_id', Auth::id())->first();

        if ($this->leaveDays == null) {
            $this->leaveDays = Auth::user()->leaveDays()->create([
                'annualDays' => config('app_settings.annualLeaveDays'),
                'daysRemaining' => 0,
                'year' => date('Y', strtotime(Carbon::now())),
                'daysGone' => 0,
            ]);
        }

        if ($this->leaveDays->daysRemaining < 0) {
            return response()->json([
                "message" => "You have exhausted all your leave days",
                "error" => true
            ]);
        }

        /*
         * Check if user has active forced Leaves
         */

        $forcedLeaves = ForcedLeave::where('user_id', Auth::id())->where('active', true)->get();

        if ($forcedLeaves->count() > 0) {
            return response()->json([
                "error" => false,
                "message" => "You currently have a forced leave, if you think this is a mistake talk to your hr"
            ]);
        }

        // $nr_work_day = $this->calculate_days($id, $request->startDate, $request->endDate);

        $beginday = Carbon::parse($request->startDate);
        $lastday = Carbon::parse($request->endDate);

        // $nr_work_days = $this->getWorkingDays($beginday,$lastday);
        $begin = strtotime($beginday);
        $end = strtotime($lastday);
        // print_r($startDate);
        if ($begin > $end) {
            echo "startdate is in the future! <br />";
            return 0;
        } else {
            $no_days = 0;
            $weekends = 0;
            while ($begin <= $end) {
                $no_days++; // no of days in the given interval
                $what_day = date("N", $begin);
                if ($what_day > 5) { // 6 and 7 are weekend days
                    $weekends++;
                };
                $begin += 86400; // +1 day
            };

            $working_days = $no_days - $weekends;
        }
        // $nr_work_days = (int)$nr_work_day;
        if ($working_days > 0) {
            $annualLeaveDays = $this->leaveDays->annualDays;
            $daysGone = $this->leaveDays->daysGone;
            $newDaysGone = $this->leaveDays->daysGone + $working_days;

            $daysRemaining = $annualLeaveDays - $daysGone;
            $newDaysRemaining = $annualLeaveDays - $newDaysGone;

            if ($working_days > $daysRemaining) {
                return response()->json([
                    "message" => "Request not successful, you only have " . $daysRemaining . " leave days remaining",
                    "error" => true
                ]);
            }


            $leave = Auth::user()->leave()->create([
                'type' => $request->type,
                'startDate' => $request->startDate,
                'endDate' => $request->endDate,
                'no_of_relievers' => $request->no_of_relievers,
                'leave_days' => $working_days,
                'department_id' => Auth::user()->department->id,
                'usertype_id' => $type_id
            ]);



            return $this->prepareResult(1, $leave, [], "Success");
        } else {
            echo "Invalid application";
        }
        return "Invalid application";
    }

    public function leaveHistory(Request $request)
    {
      $validate     =   Validator::make($request->all(), [
          'userID'  =>  'required'
      ]);

      if ($validate->fails()){
          return response()->json([
              "error" => true,
              "errors" => $validate->getMessageBag(),
              "message" => "Validation errors"
          ]);
      }
        $history = LeaveApplication::where('user_id', $request->get('userID'))->orderBy('id', 'desc')->get();
        return response()->json([
            "error" => false,
            "message"   =>  "Leave applications",
            "leaveHistory"  =>  $history
        ]);
    }

    public function employees_departments(Request $request)
    {
        $user = auth('api')->user();
        $user_type = $user->type_id;



         if ($user_type == 1) {
             $relievers = User::where('department_id', $user->department_id)->where('id', '!=', $user->id)
               ->select(['name', 'id'])->get();

               return response()->json([
                   'relievers' => $relievers,
                   "messages" => "Relievers",
                   'error' => false
               ]);
         }elseif($user_type == 9){

                $relievers = User::where('department_id', $user->department_id)->where('id', '!=', $user->id)
               ->select(['name', 'id'])->get();

               return response()->json([
                   'relievers' => $relievers,
                   "messages" => "Relievers",
                   'error' => false
               ]);

         }else{
        $relievers = User::where('id', '!=', $user->id)->where('type_id','!=',1)->where('type_id','!=',5)->where('type_id','!=',6)->where('type_id','!=',7)->where('type_id','!=',8)
                  ->select(['name', 'id','type_id','employee_no'])->get();

               return response()->json([
                   'relievers' => $relievers,
                   "messages" => "Department Relievers",
                   'error' => false
               ]);
         }

    }

    public function employees()
    {
        $employees = User::where('active', 1)->get();

        return $this->prepareResult(1, $employees, [], "Success");
    }

    private function prepareResult($status, $data, $errors, $msg)
    {
        if ($errors == null) {
            return ['status' => $status, 'payload' => $data, 'message' => $msg, 'error'=> false];
        } else {
            return ['status' => $status, 'message' => $msg, 'errors' => $errors, 'error'=> true];
        }
    }

    // calculate days
    public function calculate_days($id, $start, $end)
    {

        $beginday = date($start);
        $lastday = date($end);

        $nr_work_days = $this->getWorkingDays($beginday, $lastday);

        return $nr_work_days;
    }

    public function getWorkingDays($startDate, $endDate)
    {
        $begin = strtotime($startDate);
        $end = strtotime($endDate);
        // print_r($startDate);
        if ($begin > $end) {
            echo "startdate is in the future! <br />";
            return 0;
        } else {
            $no_days = 0;
            $weekends = 0;
            while ($begin <= $end) {
                $no_days++; // no of days in the given interval
                $what_day = date("N", $begin);
                if ($what_day > 5) { // 6 and 7 are weekend days
                    $weekends++;
                };
                $begin += 86400; // +1 day
            };

            $working_days = $no_days - $weekends;

            // echo $working_days;

            // $holiday_dates = DB::table('holidays')
            //                 ->select('holiday_date')
            //                 ->get();
            // foreach ($holiday_dates as $value) {
            //   $holidays = array();
            //   $y = date("Y");
            //   $values = "2019/".$value->holiday_date;
            //   // $values = $y."/".$value->holiday_date;
            //   $r = array_push($holidays, $values);
            //   // print_r($value);
            //   //Subtract the holidays
            //   foreach($holidays as $holiday){
            //     // print_r($holiday);
            //     $time_stamp=strtotime($holiday);
            //     // print_r($time_stamp);
            //     //If the holiday doesn't fall in weekend
            //     if ($startDate <= $time_stamp && $time_stamp <= $endDate && date("N",$time_stamp) != 6 && date("N",$time_stamp) != 7)
            //         $working_days--;
            //         // print_r ($working_days);
            //                 return $working_days;
            //   }
            // }

        }
    }

    public function mail()
    {
        $data['name'] = "Test";
        $data['to'] = "mageto.denis@gmail.com";
        $data['message'] = "abcdefg";
        $data['subject'] = "Password";
        $data['template'] = "email.password";
        $data['sender'] = "test@us.com";
        $data['sendername'] = "Test Name";
        $this->sendEmail($data);
    }

    public function sendEmail($data)
    {


        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'email.password'], $data, function ($message) {
            $message->to('mageto.denis@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";

    }

    public function relieverApprove(Request $request)
    {
        $validate = Validator::make($request->only('reliever_reason', 'leaveID'), [
            'reliever_reason' => 'required',
            'leaveID' => 'required'
        ]);

        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

        $reliever2dt = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever2_approval', 'pending')->pluck('reliever2');
        $reliever2noti = User::where('id', $reliever2dt)->first();



        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Please give a reason"
            ]);
        }
        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever', $user->id)->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID, Permission denied",
                "error" => true

            ], 404);
        }

        /*
         * Accept Request
         */
        $application->update([
            'releiver_approval' => 'approved'
        ]);

        $application->reason()->updateOrCreate([
            'reliever' => $request->get('reliever_reason')
        ]);

        $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);

        $this->pushNotificationsController->relvr2Notification($reliever2noti, $applicant, $reliever2noti->pushToken);


        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }
      public function reliever2Approve(Request $request)
    {
        $validate = Validator::make($request->only('reliever_reason', 'leaveID'), [
            'reliever_reason' => 'required',
            'leaveID' => 'required'
        ]);

       //applicant details
        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();

        $reliever = auth('api')->user('id')->name;

    //next releiver details
        $reliever3dt = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever3_approval', 'pending')->pluck('reliever3');
        $reliever2noti = User::where('id', $reliever3dt)->first();


        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Please give a reason"
            ]);
        }
        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever2', $user->id)->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID, Permission denied",
                "error" => true

            ], 404);
        }

        /*
         * Accept Request
         */
        $application->update([
            'reliever2_approval' => 'approved'
        ]);

        $application->reason()->updateOrCreate([
            'reliever2' => $request->get('reliever_reason')
        ]);

         $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);

        $this->pushNotificationsController->relvr3Notification($reliever2noti, $applicant, $reliever2noti->pushToken);


        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function reliever3Approve(Request $request)
        {
            $validate = Validator::make($request->only('reliever_reason', 'leaveID'), [
                'reliever_reason' => 'required',
                'leaveID' => 'required'
            ]);

                //applicant data
            $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
            $applicant = User::where('id', $applicantid)->first();
            $reliever = auth('api')->user('id')->name;

             //management data
            $deptdata = LeaveApplication::where('id', $request->get('leaveID'))->pluck('department_id');
            $mangmntdata = User::where('department_id', $deptdata)->where('type_id',9)->first();
            $mngmnt = $mangmntdata->name;


            if ($validate->fails()) {
                return response()->json([
                    "error" => true,
                    "errors" => $validate->getMessageBag(),
                    "message" => "Please give a reason"
                ]);
            }
            $user = auth('api')->user();
            $application = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever3', $user->id)->first();

            if ($application == null) {
                return response()->json([
                    "message" => "No leave with that ID, Permission denied",
                    "error" => true

                ], 404);
            }

            /*
             * Accept Request
             */
            $application->update([
                'reliever3_approval' => 'approved'
            ]);

            $application->reason()->updateOrCreate([
                'reliever3' => $request->get('reliever_reason')
            ]);

            $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);

            $this->pushNotificationsController->mngmntNotification($mngmnt, $applicant, $mangmntdata->pushToken);

            return response()->json([
                'message' => "Leave request approved",
                "leave" => $application,
                "error" => false
            ]);

        }

    public function relieverReject(Request $request)
    {

      $user = auth('api')->user();
      $reliever_dt = $user->name;
      $relieverid = $user->id;


        $validate = Validator::make($request->only('reliever_reason', 'leaveID'), [
            'reliever_reason' => 'required',
            'leaveID' => 'required'
        ]);

        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

        $leaveID = $request->leaveID;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Please give a reason"
            ]);
        }
        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever', $user->id)->first();


        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }

        /*
         * Accept Request
         */
        $application->update([
            'releiver_approval' => 'rejected'
        ]);
        $application->reason()->updateOrCreate([
            'reliever' => $request->get('reliever_reason')
        ]);

        $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

        $message = "REJECTED";

        $AT = new AfricasTalking($username , $apiKey);

      // Get one of the services
         $sms      = $AT->sms();
         $result   = $sms->send([
          'to'      => $phone_no,
          'message'  => 'Hello '. $name .'  your leave request has been '.$message.' by '.$reliever_dt. ' kindly consult with them before reappling'
         ]);

        return response()->json([
            'message' => "Reliever one rejected your request",
            "leave" => $application,
            "error" => false
        ]);
    }


    public function reliever2Reject(Request $request)
    {
      $user = auth('api')->user();
      $reliever_dt = $user->name;
      $relieverid = $user->id;

        $validate = Validator::make($request->only('reliever_reason', 'leaveID'), [
            'reliever_reason' => 'required',
            'leaveID' => 'required'
        ]);

        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

       $leaveID = $request->leaveID;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Please give a reason"
            ]);
        }
        $user = auth('api')->user();

        $application = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever2', $user->id)->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }

        /*
         * Accept Request
         */
        $application->update([
            'reliever2_approval' => 'rejected'
        ]);
        $application->reason()->updateOrCreate([
            'reliever2' => $request->get('reliever_reason')
        ]);

        $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

        $message = "REJECTED";

        $AT = new AfricasTalking($username , $apiKey);

      // Get one of the services
         $sms      = $AT->sms();
         $result   = $sms->send([
          'to'      => $phone_no,
          'message'  => 'Hello '. $name .'  your leave request has been '.$message.' by '.$reliever_dt. ' kindly consult with them before reappling'
         ]);

        return response()->json([
            'message' => "Reliever one rejected your request",
            "leave" => $application,
            "error" => false
        ]);
    }
    public function reliever3Reject(Request $request)
    {

      $user = auth('api')->user();
      $reliever_dt = $user->name;
      $relieverid = $user->id;

        $validate = Validator::make($request->only('reliever_reason', 'leaveID'), [
            'reliever_reason' => 'required',
            'leaveID' => 'required'
        ]);

        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

        $leaveID = $request->leaveID;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');


        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "errors" => $validate->getMessageBag(),
                "message" => "Please give a reason"
            ]);
        }
        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->where('reliever3', $user->id)->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }

        /*
         * Reject Request
         */
        $application->update([
            'reliever3_approval' => 'rejected'
        ]);
        $application->reason()->updateOrCreate([
            'reliever3' => $request->get('reliever_reason')
        ]);

      $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

      $message = "REJECTED";

      $AT = new AfricasTalking($username , $apiKey);

    // Get one of the services
       $sms      = $AT->sms();
       $result   = $sms->send([
        'to'      => $phone_no,
        'message'  => 'Hello '. $name .'  your leave request has been '.$message.' by '.$reliever_dt. ' kindly consult with them before reappling'
       ]);

        return response()->json([
            'message' => "Leave request rejected",
            "leave" => $application,
            "error" => false
        ]);
    }





    public function pmApprove(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'leaveID' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }
          //applicant data
        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

         //management data
        $deptdata = LeaveApplication::where('id', $request->get('leaveID'))->pluck('department_id');
        $mangmntdata = User::where('department_id', $deptdata)->where('type_id',2)->first();
        $mngmnt = $mangmntdata->name;

        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();


        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }


        /*
    * Accept Request
    */


        $application->update([
            'PM' => 'approved'
        ]);

        $application->reason()->updateOrCreate([
            'reliever' => '..',
            'pm' => $request->get('..', 'reliever_reason')
        ]);

        $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);

        $this->pushNotificationsController->mngmntNotification($mngmnt, $applicant, $mangmntdata->pushToken);


        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function pmReject(Request $request)
    {
      $user = auth('api')->user();
      $reliever_dt = $user->name;
      $relieverid = $user->id;

        $validate = Validator::make($request->all(), [
            'leaveID' => 'required'
        ]);

        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }

        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

        $leaveID = $request->leaveID;

        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }

        /*
         * Reject Request
         */
        $application->update([
            'PM' => 'rejected'
        ]);

        $application->reason()->updateOrCreate([
            'reliever' => $application->reason->reliever || '..',
            'pm' => $request->get('', 'reliever_reason')
        ]);

      $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

      $message = "REJECTED";

      $AT = new AfricasTalking($username , $apiKey);

    // Get one of the services
       $sms      = $AT->sms();
       $result   = $sms->send([
        'to'      => $phone_no,
        'message'  => 'Hello '. $name .'  your leave request has been '.$message.' by '.$reliever_dt. ' kindly consult with them before reappling'
       ]);


        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function hodApprove(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'leaveID' => 'required'
        ]);

                  //applicant data
        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

         //management data
        $deptdata = LeaveApplication::where('id', $request->get('leaveID'))->pluck('department_id');
        $mangmntdata = User::where('employee_no','=', 'ADE0272')->first();

        $mngmnt = $mangmntdata->name;
        // $token = $mangmntdata->pushToken;




        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }
        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();


        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }


        /*
    * Accept Request
    */


        $application->update([
            'HOD' => 'approved'
        ]);

        $application->reason()->updateOrCreate([
            'reliever' => '..',
            'hod' => $request->get('..', 'reliever_reason')
        ]);

         $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);

        $this->pushNotificationsController->mngmntNotification($mngmnt, $applicant, $mangmntdata->pushToken);

        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function hodReject(Request $request)
    {

      $user = auth('api')->user();
      $reliever_dt = $user->name;
      $relieverid = $user->id;

        $validate = Validator::make($request->all(), [
            'leaveID' => 'required'
        ]);

        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $reliever = auth('api')->user('id')->name;

        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

        $leaveID = $request->leaveID;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }
        $user = auth('api')->user();
        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }

        /*
         * Reject Request
         */
        $application->update([
            'HOD' => 'rejected'
        ]);

        $application->reason()->updateOrCreate([
            'reliever' => $application->reason->reliever || '..',
            'hod' => $request->get('', 'reliever_reason')
        ]);

        $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

        $message = "REJECTED";

        $AT = new AfricasTalking($username , $apiKey);

      // Get one of the services
         $sms      = $AT->sms();
         $result   = $sms->send([
          'to'      => $phone_no,
          'message'  => 'Hello '. $name .'  your leave request has been '.$message.' by '.$reliever_dt. ' kindly consult with them before reappling'
         ]);

        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    /*
     * HR APPROVE & REJECT
     */

    public function hrApprove(Request $request)
    {

      $user = auth('api')->user();
      $approver = $user->name;
      // $relieverid = $user->id;


        $validate = Validator::make($request->all(), [
            'leaveID' => 'required'
        ]);

        //applicant data
            $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
            $applicant = User::where('id', $applicantid)->first();
            $phone_no = $applicant->phone_no;
            $name =  $applicant->name;

            $username = Config::get('africastalking.username');
            $apiKey = Config::get('africastalking.apiKey');

            $reliever = auth('api')->user('id')->name;

        //       //management data
        // $deptdata = LeaveApplication::where('id', $request->get('leaveID'))->pluck('department_id');
        // $mangmntdata = User::where('employee_no','=', 'ADE0027')->first();

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }

        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }

            $applicanttypecheck = $application->usertype_id;
            $leavestatus = $application->HR;
            $applicationowner = $application->user_id;
            $days_requested = $application->leave_days;

            $update_days = LeaveDays::where('user_id', $applicationowner)->first();
            $annualLeaveDays = $update_days->annualDays;
            $daysGone = $update_days->daysGone;

            $new_daysGone = $daysGone + $days_requested;
            $daysRemaining = $annualLeaveDays - $new_daysGone;

          if ($applicanttypecheck == 1) {
            if($leavestatus == 'pending')
            {
             $gone = DB::table('leave_days')
                       ->where('user_id',$applicationowner)
                       ->update([
                     'daysGone' => $new_daysGone,
                    'daysRemaining' => $daysRemaining
                   ]);
            }
            $message = "APPROVED";

            $AT = new AfricasTalking($username , $apiKey);

          // Get one of the services
             $sms      = $AT->sms();
             $result   = $sms->send([
              'to'      => $phone_no,
              'message'  => 'Hello '. $name .'  your leave request for '.$days_requested.' days has been '.$message.' by '.$approver. ' from HR.You may now GO FOR LEAVE'
             ]);
          }


        $application->update([
            'HR' => 'approved'
        ]);

        $application->reason()->updateOrCreate([
            'reliever' => $application->reason->reliever || '..',
            'hr' => $request->get('', 'hr')
        ]);

        $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);
        // $this->pushNotificationsController->mngmntNotification($mngmnt, $applicant, $mangmntdata->pushToken);


        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function hrReject(Request $request)
    {

      $user = auth('api')->user();
      $rejector = $user->name;

        $validate = Validator::make($request->all(), [
            'leaveID' => 'required',
            'reason' => 'required'
        ]);

       $reason = $request->reason;
       // printf($reason);
       // exit();


        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();

        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        $reliever = auth('api')->user('id')->name;


        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }

        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();


        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }


        $application->update([
            'HR' => 'rejected'
        ]);

        $application->reason()->updateOrCreate([
          'hr' => $request->get('reason', '')
        ]);

      $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

      $message = "REJECTED";

      $AT = new AfricasTalking($username , $apiKey);

    // Get one of the services
       $sms      = $AT->sms();
       $result   = $sms->send([
        'to'      => $phone_no,
        'message'  => 'Hello '. $name .',  your leave request has been '.$message.' by '.$rejector. ' from HR. Reason: '.$reason. '.'
       ]);

        return response()->json([
            'message' => "Leave request rejected",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function mdApprove(Request $request)
    {

      $user = auth('api')->user();
      $approver = $user->name;

        $validate = Validator::make($request->all(), [
            'leaveID' => 'required',
            'reason' => 'required'
        ]);

             $reason = $request->reason;
          //applicant data
            $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
            $applicant = User::where('id', $applicantid)->first();
            $phone_no = $applicant->phone_no;
            $name =  $applicant->name;

            $username = Config::get('africastalking.username');
            $apiKey = Config::get('africastalking.apiKey');

            $reliever = auth('api')->user('id')->name;


        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }
        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }


            $applicanttypecheck = $application->usertype_id;
            $leavestatus = $application->MD;
            $applicationowner = $application->user_id;
            $days_requested = $application->leave_days;

            $update_days = LeaveDays::where('user_id', $applicationowner)->first();
            $annualLeaveDays = $update_days->annualDays;
            $daysGone = $update_days->daysGone;

            $new_daysGone = $daysGone + $days_requested;
            $daysRemaining = $annualLeaveDays - $new_daysGone;

          if ($applicanttypecheck !== 1) {
            if($leavestatus == 'pending')
            {
             $gone = DB::table('leave_days')
                       ->where('user_id',$applicationowner)
                       ->update([
                     'daysGone' => $new_daysGone,
                    'daysRemaining' => $daysRemaining
                   ]);
            }
            $message = "APPROVED";


            $AT = new AfricasTalking($username , $apiKey);

          // Get one of the services
             $sms      = $AT->sms();
             $result   = $sms->send([
              'to'      => $phone_no,
              'message'  => 'Hello '. $name .'  your leave request for '.$days_requested.' days has been '.$message.' by the MD: '.$approver. ' You may now GO FOR LEAVE'
             ]);
          }


        $application->update([
            'MD' => 'approved'
        ]);

        $application->reason()->updateOrCreate([
            'md' => $request->get('reason')
        ]);


        // $application->reason()->updateOrCreate([
        //     'reliever' => $application->reason->reliever || '..',
        //     'md' => $request->get('', 'md')
        // ]);

        $this->pushNotificationsController->getNotification($applicant, $reliever,$applicant->pushToken);


        return response()->json([
            'message' => "Leave request approved",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function mdReject(Request $request)
    {

      $user = auth('api')->user();
      $rejector = $user->name;

        $validate = Validator::make($request->all(), [
            'leaveID' => 'required',
            'reason' => 'required'
        ]);

        $reason = $request->reason;



        $applicantid = LeaveApplication::where('id', $request->get('leaveID'))->pluck('user_id');
        $applicant = User::where('id', $applicantid)->first();
        $phone_no = $applicant->phone_no;
        $name =  $applicant->name;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        $reliever = auth('api')->user('id')->name;

        if ($validate->fails()) {
            return response()->json([
                "error" => true,
                "message" => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }
        $application = LeaveApplication::where('id', $request->get('leaveID'))->first();

        if ($application == null) {
            return response()->json([
                "message" => "No leave with that ID",
                "error" => true

            ], 404);
        }


        $application->update([
            'MD' => 'rejected'
        ]);

        $application->reason()->updateOrCreate([
            'md' => $request->get('reason')
        ]);

              $this->pushNotificationsController->rejectedNotification($applicant, $reliever,$applicant->pushToken);

              $message = "REJECTED";

              $AT = new AfricasTalking($username , $apiKey);

            // Get one of the services
               $sms      = $AT->sms();
               $result   = $sms->send([
                'to'      => $phone_no,
                'message'  => 'Hello '. $name .',  your leave request has been '.$message.' by '.$rejector. ' the MD. Reason: '.$reason. '.'
               ]);



        return response()->json([
            'message' => "Leave request rejected",
            "leave" => $application,
            "error" => false
        ]);

    }

    public function leaveApproval()
    {
        $user = auth('api')->user('id');
        $userId = $usersId['id'];
        $user_type = $usersId['user_type'];
        $department = $usersId['department'];
        // echo $department;
        // die();
        if ($user_type == 'EMPLOYEE') {
            $leave = DB::table('leave_application')
                ->join('users', 'users.id', '=', 'leave_application.userId')
                ->where('reliever', '=', $userId)
                ->select('leave_application.*', 'users.name as name')
                ->orderBy('leave_application.created_at')
                ->get();
            return $this->prepareResult(1, $leave, [], "Success");
        } elseif ($user_type == 'HOD') {
            $leave = DB::table('leave_application')
                ->join('users', 'users.id', '=', 'leave_application.userId')
                ->where('users.department', '=', $department)
                ->select('leave_application.*', 'users.name as name')
                ->orderBy('leave_application.created_at')
                ->get();
            return $this->prepareResult(1, $leave, [], "Success");
        } elseif ($user_type == 'HR') {
            $leave = DB::table('leave_application')
                ->join('users', 'users.id', '=', 'leave_application.userId')
                ->select('leave_application.*', 'users.name as name')
                ->orderBy('leave_application.created_at')
                ->get();
            return $this->prepareResult(1, $leave, [], "Success");
        } elseif ($user_type == 'MD') {
            $leave = DB::table('leave_application')
                ->join('users', 'users.id', '=', 'leave_application.userId')
                ->select('leave_application.*', 'users.name as name')
                ->orderBy('leave_application.created_at')
                ->get();
            return $this->prepareResult(1, $leave, [], "Success");
        }


        die();
        $leave = DB::table('leave_application')
            ->join('users', 'users.id', '=', 'leave_application.userId')
            ->where('reliever', '=', Auth::user()->id)
            ->select('leave_application.*', 'users.name as name')
            ->orderBy('leave_application.created_at')
            ->get();
        return $this->prepareResult(1, $leave, [], "Success");
    }

    public function leave_approval(Request $request)
    {
        $usersId = auth('api')->user('id');
        $userId = $usersId['id'];
        $employeeId = $request->employeeId;
        $dateRequested = $request->dateRequested;
        $option = $request->option;

        // user type for logged in user
        $title = User::where('id', $userId)->value('user_type');

        if ($title == 'EMPLOYEE') {
            if ($option == 1) {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    // ->get();
                    ->update(['reliever_approval' => 'accepted']);
                return $u;
            } else {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['reliever_approval' => 'denied']);
                return $u;
            }
        } else if ($title == 'HOD') {
            if ($option == 1) {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['HOD' => 'accepted']);
                return $u;
            } else {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['HOD' => 'denied']);
                return $u;
            }
        } else if ($title == 'HR') {
            if ($option == 1) {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['HR' => 'accepted']);
                return $u;
            } else {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['HR' => 'denied']);
                return $u;
            }
        } else if ($title == 'MD') {
            if ($option == 1) {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['MD' => 'accepted']);
                return $u;
            } else {
                $u = DB::table('leave_application')
                    ->where('userId', $employeeId)
                    ->where('created_at', $dateRequested)
                    ->where('reliever', $userId)
                    ->update(['MD' => 'denied']);
                return $u;
            }
        } else {
            echo "choice not available";
        }


        //  $getRelieverId = DB::table('oauth_access_tokens')
        //               ->where('id', $token)
        //               ->value('id');

        //  $check = DB::table('leave_application')
        //      ->where('reliever', $getRelieverId)
        //      ->where('userId', $employeeId)
        //      ->where('created_at', $dateRequested)
        //      ->value("reliever_approval");

        //  if ($check == 'pending') {
        //     echo "Reliever"
        //  } else {
        //    # code...
        //  }


        // return $u;
        //  return $this->prepareResult(1, $u, [],"Approved Successfully", "False");
    }


    /*
     * MD Retrieve all leave Requests
     */
    public function mdLeaveRequests(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'MD') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $leaveRequests = LeaveApplication::orderBy('id', 'desc')->with('user')->get();


        return response()->json([
            "error" => false,
            "message" => "MD Leave Requests",
            "leaveRequests" => $leaveRequests
        ]);
    }

    public function mdPendingLeaveRequests(Request $request)
    {
        $user = auth('api')->user();
        if ($user->type->name != 'MD') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests =LeaveApplication::where('md', 'pending')->with('user', 'user.department')->where('HR', '!=' ,'pending')->where('usertype_id','=',2)->where('usertype_id','=',3)->orderBy('id', 'desc')->get();


        return response()->json([
            "error" => false,
            "message" => "MD Pending Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }

    /*
     * HR Pending
     */
    public function hrPendingRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }

        $pendingLeaveRequests = LeaveApplication::where('hr', 'pending')->with('user', 'user.department')->where('HOD', '!=' ,'pending')->orderBy('id', 'desc')->get(); //change

        return response()->json([
            "error" => false,
            "message" => "HR
             Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }

    /*
     * HR All leave Requests
     */
    public function hrLeaveRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HR') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests = LeaveApplication::orderBy('id', 'desc')->with('user', 'user.department')->get(); //change


        return response()->json([
            "error" => false,
            "message" => "HR Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }

    public function hodPendingRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HOD') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests = LeaveApplication::where('hod', 'pending')->where('pm', '=' ,'approved')->where('department_id', $user->department->id)->with('user', 'user.department', 'reliever')->where('reliever', '!=' ,'pending')->orderBy('id', 'desc')->get();

        if ($pendingLeaveRequests) {
        	# code...
        }


        return response()->json([
            "error" => false,
            "message" => "HOD Pending Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }


    public function hodLeaveRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HOD') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests = LeaveApplication::where('department_id', $user->department->id)->with('user', 'user.department')->orderBy('id', 'desc')->get();


        return response()->json([
            "error" => false,
            "message" => "HOD Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }

    public function pmPendingRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'PM') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests = LeaveApplication::where('pm', 'pending')
                                                   ->where('department_id', $user->department->id)->with('user', 'user.department', 'reliever')
                                                   ->where('releiver_approval','approved')
                                                   ->where('reliever2_approval','!=','pending')
                                                   ->where('reliever3_approval','!=','pending')
                                                   ->orderBy('id', 'desc')->get();



        return response()->json([
            "error" => false,
            "message" => "PM Pending Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }

    public function hodRejectedRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'HOD') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests = LeaveApplication::where('hod', 'pending')->where('pm', 'rejected')->where('department_id', $user->department->id)->with('user', 'user.department', 'reliever')->orderBy('id', 'desc')->get();


        return response()->json([
            "error" => false,
            "message" => "HOD Rejected Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }
    public function pmRejectedRequests()
    {
        $user = auth('api')->user();
        if ($user->type->name != 'PM') {
            return response()->json([
                "error" => true,
                "message" => "You are not authorised to make this transaction"
            ], 401);
        }
        $pendingLeaveRequests = LeaveApplication::where('pm', 'pending')->where('releiver_approval','rejected')->where('department_id', $user->department->id)->with('user', 'user.department', 'reliever')->orderBy('id', 'desc')->get();


        return response()->json([
            "error" => false,
            "message" => "PM Rejected Leave Requests",
            "leaveRequests" => $pendingLeaveRequests
        ]);
    }

     public function multiple_relievers(Request $request)
     {
       $usersId = auth('api')->user('id');
       $id = $usersId['id'];


     $validate  =   Validator::make($request->all(), [
          'leaveID' => 'required',
          'no_of_relievers' => 'required',
           'reliever' => 'required',
           'reliever2' => 'required_if:no_of_relievers,2',
           'reliever3' => 'required_if:no_of_relievers,3',
       ]);

       if ($validate->fails()){
           return response()->json([
               "error" => true,
               "errors" => $validate->getMessageBag(),
               "message" => "Validation errors"
           ]);
       }
       $leaveID = $request->leaveID;
       $no_of_relievers = $request->no_of_relievers;
       $reliever = $request->reliever;
       $reliever2 = $request->reliever2;
       $reliever3 = $request->reliever3;

       $leaveid_days = LeaveDays::where('user_id', $usersId->id)->first();



    if ($no_of_relievers == 2) {

    $reliever1notif = User::where('id', $reliever)->first();
      $reliever2notif = User::where('id', $reliever2)->first();


      $leave = LeaveApplication::where('id', $leaveID)
                                 ->update([
                                   'reliever' => $request->reliever,
                                   'reliever2' => $request->reliever2,
                                   'reliever2_approval' => "pending"
                                 ]);

      $leaveid_days->update([
                     'leaveId' => $request->leaveID
                    ]);

    $this->pushNotificationsController->reliever1Notification($usersId , $reliever1notif, $reliever1notif->pushToken);
    // $this->pushNotificationsController->relieiver2Notification($usersId , $reliever2notif, $reliever2notif->pushToken);


      return response()->json([
          "error" => false,
          "message" => "Two reliever chosen",
          "Number of relievers" => $no_of_relievers
      ]);

    }elseif ($no_of_relievers == 3) {

      $reliever1notif = User::where('id', $reliever)->first();
      $reliever2notif = User::where('id', $reliever2)->first();
      $reliever3notif = User::where('id', $reliever3)->first();

      $leave = LeaveApplication::where('id', $leaveID)
                                  ->update([
                                    'reliever' => $request->reliever,
                                    'reliever2' => $request->reliever2,
                                    'reliever3' => $request->reliever3,
                                    'reliever2_approval' => "pending",
                                    'reliever3_approval' => "pending"
                                    ]);



      $leaveid_days->update([
          'leaveId' => $request->leaveID
                         ]);

    $this->pushNotificationsController->reliever1Notification($usersId , $reliever1notif, $reliever1notif->pushToken);
    // $this->pushNotificationsController->relieiver2Notification($usersId , $reliever2notif, $reliever2notif->pushToken);
    // $this->pushNotificationsController->relieiver3Notification($usersId , $reliever3notif, $reliever3notif->pushToken);

      return response()->json([
          "error" => false,
          "message" => "Three relievers chosen",
          "Number of relievers" => $no_of_relievers
      ]);
    }else{

      $reliever1notif = User::where('id', $reliever)->first();

      $leave = LeaveApplication::where('id', $leaveID)
                                  ->update([
                                    'reliever' => $request->reliever
                                ]);

        $leaveid_days->update([
                        'leaveId' => $request->leaveID
                  ]);

    $this->pushNotificationsController->reliever1Notification($usersId , $reliever1notif, $reliever1notif->pushToken);

      return response()->json([
          "error" => false,
          "message" => "One reliever chosen",
          "Number_of_relievers" => $no_of_relievers
      ]);
    }




     }



}
