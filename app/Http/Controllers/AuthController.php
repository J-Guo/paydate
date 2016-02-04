<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Authy\AuthyApi;
use App\Client;

class AuthController extends Controller
{

    public function submitOTP(Request $request){

        //get mobile number from user input
        $mobileNum = $request->input('mobile');
        //get user type from user input
        $userType = $request->input('userType');
        //set user email
        $userEmail = 'new_user@email.com';
        //set country code
        $countryCode = 61;

        //initial authentication API
        // $authy_api = new AuthyApi(config('services.authy.key'));
        $authy_api = new AuthyApi(config('services.authy.key'), 'http://sandbox-api.authy.com'); //sandbox

        //register a user through email, cellphone, country_code
        $user = $authy_api->registerUser($userEmail, $mobileNum, $countryCode);
        //generate authentication token and send it to usser
        $sms = $authy_api->requestSms($user->id(),array("force" => "true"));

        if($sms->ok()){
            //check user exist or not
            $results = Client::where('mobile',$mobileNum)->first();

            //if user does not exist, register of him
            if(empty($results )){
                $newUser = new Client();
                $newUser->mobile = $mobileNum;
                $newUser->save();

            }

            return view('auth.otp')
                ->with('userid',$user->id())
                ->with('mobileNum',$mobileNum)
                ->with('userType',$userType);
        }
        else{
            //session()->put('message','incorrect mobile number');
            return redirect('login')->with('message','Please input correct mobile number');
        }
    }

    public function verifyOTP(Request $request){

        //get one time password from user input
        $otp = $request->input('otp');
        //get user id password from user input
        $authyid = $request->input('userid');
        //get user type from user input
        $userType = $request->input('userType');

        //initial authentication API
        //$authy_api = new AuthyApi(config('services.authy.key'));
        $authy_api = new AuthyApi(config('services.authy.key'), 'http://sandbox-api.authy.com'); //sandbox for test
        //verify user token
        $verification = $authy_api->verifyToken($authyid, $otp);

        //for token test, change it when project goes alive
        if($verification->ok()){
            //redirect page depends on user type
            if($userType =="client")
            return redirect('personal-detail');
            if($userType="affiliate")
                return redirect('faq');;
        }
        else
            return redirect()->back()->withInput()
                    ->with('message',$verification->message());
    }
}
