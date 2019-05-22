<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Storage;
use Avatar;
use App\User;
use Mail;
use DB;
use Illuminate\Support\Facades\Session;
use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\Config;
use App\Http\Middleware\PasswordrecoveryMiddleware;
use Edujugon\PushNotification\PushNotification;


class PortalLoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'employee_no' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = $request->only('employee_no', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication pas
          if(Auth::user()->active){

            return redirect()->intended('home');
          }else {
              return redirect()->intended('new_password');
          }
        }else
            Session::flash('danger','Invalid Credentials');

        return redirect()->back();
    }



    public function new_password(){

      return view('auth/new_password');
    }
    public function recover_password(){

      return view('auth/recover_password');
    }
    public function recovery_code(Request $request ,$id){


      $id =  $request->route('id');
      $employee = User::where('id', $id)->first();


      return view('auth/recovery_code', compact('employee'));
    }


    public function password_recovery(Request $request){

      $request->validate([
          'employee_no' => 'required|string',
      ]);

      $username = Config::get('africastalking.username');
      $apiKey = Config::get('africastalking.apiKey');

      $employee_no = $request->employee_no;

      $check = User::select('phone_no')->where('employee_no', $employee_no)->first();
      
    if ($check == null) {
      Session::flash('danger','This employee number does not exist');
      return redirect()->back();
        }
      $phone_no = $check->phone_no;

      $message = str_random(5);

      $AT = new AfricasTalking($username , $apiKey);

    // Get one of the services
       $sms      = $AT->sms();
       $result   = $sms->send([
        'to'      => $phone_no,
        'message'  => 'Welcome Adrian Employee your reset code is: '.$message.' . Thankyou.' 
       ]);

      $u = DB::table('users')
          ->where('employee_no', $employee_no)
          ->update([
              'reset_code'=> $message
          ]);

      $id = User::select('id')->where('employee_no', $employee_no)->first();


      return redirect()->intended('recovery_code/'.$id->id);
    }


    public function verify_code(Request $request, $id)
    {
     $request->validate([
          'reset_code' => 'required|string',
          'password' => 'required|confirmed'
      ]);

      $reset_code = $request->reset_code;
      $password = $request->password;

      $check = User::select('reset_code')->where('id',$id)->first();
      $resetcheck = $check->reset_code;

      if ($resetcheck !== $reset_code) {
        Session::flash('danger','The code you entered does not match our records');
        return redirect()->back();
      }

      $u = DB::table('users')
          ->where('reset_code', $reset_code)->where('id', $id)
          ->update([
              'password' => bcrypt($password)
          ]);

     return redirect()->intended('/');

    }


    public function create_password(Request $request)
    {
      $request->validate([
          'employee_no' => 'required|string',
          'phone_no'=> 'required|string',
          'password' => 'required|confirmed',
      ]);

        $employee_no = $request->employee_no;
        $password = $request->password;
        $phone_no = $request->phone_no;
        
        $check = User::select('employee_no')->where('employee_no',$employee_no)->first();
        
     if ($check == null) {
         Session::flash('danger','This employee number does not exist');
      return redirect()->back();
        }

        $u = DB::table('users')
            ->where('employee_no', $employee_no)
            ->update([
                'active' => 1,
                'phone_no' => $phone_no,
                'password' => bcrypt($password)
            ]);
        // return $u;
          return redirect()->intended('/');
    }




}
