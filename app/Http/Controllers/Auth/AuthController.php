<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Storage;
use Avatar;
use App\Notifications\SignupActivate;
use App\Notifications\SignupActivated;
use App\User;
use Mail;
use DB;
use Illuminate\Support\Facades\Config;
use AfricasTalking\SDK\AfricasTalking;


class AuthController extends Controller
{
    /**
     * Create user deactivate and send notification to activate account user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $initialPass = str_random(8);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($initialPass),
            'user_type' => $request->user_type,
            'department' => $request->department,
            'nat_id' => $request->nat_id,
            'NSSF' => $request->NSSF,
            'NHIF' => $request->NHIF,
            'KRA_Pin' => $request->KRA_Pin,
//            'pushToken' => Hash::make(uniqid())
            // 'activation_token' => str_random(60)
        ]);

        $user->save();

        /*
         * Bootstrap leave Days
         */
        $user->leaveDays()->create([
            'annualDays' => config('app_settings.annualLeaveDays'),
            'daysGone' => 0,
            'year' => date('Y', strtotime(Carbon::now())),
            'daysRemaining' => config('app_settings.annualLeaveDays'),
        ]);


        $data['name'] = $initialPass;
        $data['to'] = $request->email;
        // $data['message']=$initialPass;
        $data['subject'] = "Password";
        $data['template'] = "email.password";
        $data['sender'] = "test@us.com";
        $data['sendername'] = "Test Name";
        // $this->sendEmail($data);


        $avatar = Avatar::create($user->name)->getImageObject()->encode('png');
        Storage::put('avatars/' . $user->id . '/avatar.png', (string)$avatar);


        return response()->json([
            'message' => __('auth.signup_success')
        ], 201);
    }

    public function sendEmail($data)
    {

        Mail::send($data['template'], $data, function ($message) use ($data) {
            $message->to($data['to'], $data['name'])->subject($data['subject']);
            $message->from($data['sender'], $data['sendername']);
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    /**
     * Confirm your account user (Activate)
     *
     * @param  [type] $token
     * @return [string] message
     * @return [obj] user
     */
    // public function signupActivate($token)
    // {
    //     $user = User::where('activation_token', $token)->first();
    //
    //     if (!$user) {
    //         return response()->json([
    //             'message' => __('auth.token_invalid')
    //         ], 404);
    //     }
    //
    //     $user->active = true;
    //     $user->activation_token = '';
    //     $user->save();
    //
    //     $user->notify(new SignupActivated($user));
    //
    //     return $user;
    // }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'employee_no' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        /*
         * Authenticate User
         */
        $pushtoken = $request->pushToken;
        $credentials = ['employee_no' => $request->get('employee_no'), 'password' => $request->get('password')];

        if (Auth::attempt($credentials)) {
            /*
             * If Employee number and password is correct
             */
            if (Auth::user()->active ) {
                /*
                 * Active User
                 */
                if ( Auth::user()->status == 'active'){

                $tokenResult = Auth::user()->createToken('Personal Access Token');
                Auth::user()->update([
                    'pushToken' => $pushtoken,
                ]);

                if ($request->remember_me) {
                    /*
                     * Save Token
                     */
                    $tokenResult->token->expires_at = Carbon::now()->addWeeks(1)->save();
                }

                return response()->json([
                    'access_token' => $tokenResult->accessToken,
                    'active' => true,
                    'token_type' => 'Bearer',
                    'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
                    'user_data' => Auth::user(),
                    'error' => false
                ], 200);
                } else {
                    return response()->json([
                        'active' => 1,
                        'payload' => [
                            'user' => Auth::user()->user_type
                        ],
                        "message" => "Your account is Suspended or Terminated Please Contact administrator",
                        "error" => false
                    ], 200);
                }

            } else {
                /*
                 * Inactive User
                 */
                return response()->json([
                    'active' => 0,
                    'payload' => [
                        'user' => Auth::user()->user_type
                    ],
                    "message" => "Create new password",
                    "error" => false
                ], 200);
            }
        } else {
            /*
             * In-correct email or password
             */
            return response()->json(["message" => "Employee Number or password is incorrect",
                "error" => true]);
        }

    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => __('auth.logout_success')
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function new_password(Request $request)
    {
      $validate = Validator::make($request->all(), [
          'employee_no' => 'required',
          'phone_no' => 'required',
          'password' => 'required',
      ]);

        $employee_no = $request->employee_no;
        $phone_no = $request->phone_no;
        $password = $request->password;

        $u = DB::table('users')
            ->where('employee_no', $employee_no)
            ->update([
                'active' => 1,
                'phone_no'=> $phone_no,
                'password' => bcrypt($password)
            ]);
        // return $u;
        return $this->prepareResult(1, $u, [], "Password Changed Successfully", "False");
    }

    public function password_recovery_api(Request $request)
    {
      $validate = Validator::make($request->all(), [
          'employee_no' => 'required',
      ]);
        $employee_no = $request->employee_no;

        $username = Config::get('africastalking.username');
        $apiKey = Config::get('africastalking.apiKey');

        $check = User::select('phone_no')->where('employee_no', $employee_no)->first();
        $phone_no = $check->phone_no;


         $message = str_random(5);

         $AT = new AfricasTalking($username , $apiKey);

       // Get one of the services
          $sms      = $AT->sms();
          $result   = $sms->send([
           'to'      => $phone_no,
           'message'  => $message
          ]);


          $u = DB::table('users')
              ->where('employee_no', $employee_no)
              ->update([
                  'reset_code'=> $message
              ]);


        // return $u;
        return $this->prepareResult(1, $u, [], "Password Reset Code sent to your mobile", "False");
    }

    public function verify_code_api(Request $request)
    {
      $validate = Validator::make($request->all(), [
          'employee_no' => 'required',
          'reset_code' => 'required',
          'password' => 'required'
      ]);

        $employee_no = $request->employee_no;
        $password = $request->password;
        $reset_code = $request->reset_code;



        $u = DB::table('users')->where('employee_no','=', $request->employee_no)->where('reset_code','=', $request->reset_code)->first();

      if ($u === null) {

        return response()->json(["message" => "No Matches found",
            "error" => true]);

      }else{
        $usr = DB::table('users')
            ->where('employee_no', $employee_no)
            ->update([
                'password' => bcrypt($password)
            ]);
      }

        return $this->prepareResult(1, $u, [], "Password Changed Successfully", "False");
    }





    public function updateToken(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'userID' => 'required',
            'pushToken' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'error' => true,
                'message' => "Validation error",
                "errors" => $validate->getMessageBag()
            ]);
        }

        $user = User::find($request->get('userID'));

        if ($user == null) {
            return response()->json([
                "error" => true,
                "message" => "User not found"
            ], 404);
        }

        $user->update([
            'pushToken' => $request->get('pushToken')
        ]);

        return response()->json([
            "error" => false,
            "message" => "Update success",
            "user" => $user
        ]);
    }

    private
    function prepareResult($status, $data, $errors, $msg, $err)
    {
        if ($errors == null) {
            return ['active' => $status, 'payload' => $data, 'message' => $msg, 'error' => $err];
        } else {
            return ['active' => $status, 'message' => $msg, 'errors' => $errors, 'error' => 'True'];
        }
    }

}
