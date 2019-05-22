<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\Config;

class SMSTest extends Controller
{

 public function sendSms()
{
  $username = Config::get('africastalking.username');
  $apiKey = Config::get('africastalking.apiKey');

  $AT = new AfricasTalking($username , $apiKey);

// Get one of the services
$sms      = $AT->sms();
$result   = $sms->send([
    'to'      => '+254717040975',
    'message'  => 'Hi Ijay'
]);

  return "sent";
}


}
