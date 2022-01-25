<?php



namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;

use App\Models\PasswordReset;

use App\Notifications\PasswordResetRequest;

use App\Notifications\PasswordResetSuccess;

use App\Notifications\UserRegister;

use App\PasswordReset as AppPasswordReset;

use App\Role;

use App\Models\User;

use Carbon\Carbon;

use Validator;

use Str;

use App\Setting;

use App\UserVerifyToken;

use App\MailTemplate;

use App\Mail\Signup;

use App\Newsletter as Chimp;

use DrewM\MailChimp\MailChimp;

use Newsletter;

use Config;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

use App\PhoneTemp;

use App\UserCompany;

use Twilio\Rest\Client;

use DB;

use Image as Img;

use App\Notifications;



class UserApiController extends Controller

{

    // public function __construct(Request $request)

    // {



    //     //dd($request->api_key);



    //     $apitoken = $request->header('api_key');



    //     if (empty($apitoken)) {

    //         $response = json_encode(array(

    //             'status' => false,

    //             'message' => 'Please Provide Api Token',

    //         ));

    //         header("Content-Type: application/json");

    //         echo $response;

    //         exit;

    //     }

    //     if ($apitoken != env("api_key")) {

    //         $response = json_encode(array(

    //             'status' => false,

    //             'message' => 'Api Token Not valid',

    //         ));

    //         header("Content-Type: application/json");

    //         echo $response;

    //         exit;

    //     }

    // }







   

   

    public function login(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false,'code'=>$succcessCode, 'message' => implode("", $validator->errors()->all())], 200);
        }
        $user = User::where('email', '=', $req->email)->first();

       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){

             $user = Auth::user();

             $token = auth()->user()->createToken('API Token')->accessToken;
        return response()->json(['status' => true,'message' => "Your account logged in successfully",'token'=>$token, 'user' => $user], 200);
       }

       else{
          return response()->json(['status' => false,'message' => 'User not registered', 'user' => Null], 200);
       }

    }

    /**

     * Register api

     *

     * @return \Illuminate\Http\Response

     */

    public function register(Request $request)

    {



        $validator = Validator::make($request->all(), [

                'name' => 'required',

                'email' => 'required',

                'password' => 'required|min:8',

                'phone' => 'required',

        ]);





        if ($validator->fails()) {

            $er = [];

            $i = 0;

            foreach ($validator->errors() as $err) {

                $er[$i++] = $err[0];

                return $err;

            }

         

             return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all()), 'user' => Null], 200);

        }



        $us = User::where("email", $request->email)->first();





        if(!empty($us)){



        return response()->json(['status' => false, 'message' => "Your account with this email registerd.", 'user' => []], 200);



        }

        else{



            $user = new User;

            $user->name = $request->name;
            $user->first_name = $request->name;

            if($request->password){

                 $pass = Hash::make($request->password);

                $user->password = $pass;

            }

            $user->email = $request->email;

            $user->phone = $request->phone;

            $user->dob = $request->dob;

            $user->save();

            $success['token'] =  $user->createToken('API Token')->accessToken;

            $user->roles()->sync(4);

        }



          return response()->json(['status' => true, 'message' => "Your account registerd successfully.",'token'=>$success, 'user' => $user], 200);

    }



    public function socialLogin(Request $request){



         $errorCode =  Config::get('constants.code.error');

        $succcessCode =  Config::get('constants.code.success');



        $validator = Validator::make($request->all(), [

            'social_id' => 'required',

            'social_type' => 'required'

        ]);



        if ($validator->fails()) {

            $er = [];

            $i = 0;

            foreach ($validator->errors() as $err) {

                $er[$i++] = $err[0];

                return $err;

            }

         

             return response()->json(['status' => false,'code'=>$succcessCode, 'message' => implode("", $validator->errors()->all()), 'user' => Null], 200);

        }



        $user = User::where('social_id', '=', $request->social_id)

                        ->where('social_type','=',$request->social_type)

                        ->where('social_type','!=','manual')

                        ->first();



        if(!empty($user)){



         if($user->active_status == "inactive"){



            return response()->json(['status' => false, 'message' => "The email has already been registred. currently in inactive mode.to active your account mail on  customerservices@office-share.io", 'user' => Null], 200);



        }

        else{



             if($user->remember_token != null){



                        if(isset($request->firebase_token)){



                           $location = DB::table('user_device_token')->insert([

                            'device_token'           => $request->firebase_token,

                            'user_id'               => $user->id,

                             'platform_type'         =>  $request->platform_type,

                             'device_id'                 =>  $request->device_id,

                            ]);



                        }



                foreach($user->roles as $key => $item){

                    $user['user_role_type'] = $item->title;

                }

                unset($user->roles);



                        return response()->json(['status' => true, 'code'=>$succcessCode, 'message' => " Your account login with ".$request->social_type." sucessfully", 'user' => $user], 200);



                 }

               else{



                        return response()->json(["status" => false,'code'=>$errorCode,'message' => "Email not verified",'user' => null], 200);  

                }

        }



               



        }

        else{



        return response()->json(["status" => false,'code'=>$succcessCode,'message' => "user not found",'user' => null], 200);



        }



    }





    public function changepassword(Request $request){



        $validator = Validator::make($request->all(), [

        'user_id'           => 'required',

        'current_password'  => 'required',

        'change_password'   => 'required|min:6'

        ]);



        if ($validator->fails()) {

            $er = [];

            $i = 0;

            foreach ($validator->errors() as $err) {

                $er[$i++] = $err[0];

                return $err;

            }



            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all()), 'user' => Null], 200);

        }



        $pass =   Hash::make($request->change_password);



        $user = User::where('id', '=', $request->user_id)

        ->first();



        $check_pass = Hash::check($pass, $user->password);



        if($user->active_status == 'active'){



            if (!empty($user->password)) {



                    if(Auth::attempt(['id' => request('user_id'), 'password' => request('current_password')])){



                        User::where('id', '=', $request->user_id)

                        ->update(['password'=> $pass]);



                        return response()->json(['status' => true, 'message' => "Your password changed successfully"], 200);



                    }

                    else{

                        return response()->json(['status' => false, 'message' => "Your given Current password is wrong"], 200); 

                    }





            }else{



                return response()->json(["status" => false,'message' => "Social Login"], 200);



            }





        }

        else{

            return response()->json(['status' => false, 'message' => "This account is currently in inactive mode.to active your account mail on  customerservices@office-share.io", 'user' => Null], 200);



        }



    }



    public function sendforgetotp(Request $request){



            $validator = Validator::make($request->all(), [

                'mobile_email'           => 'required'

            ]);



            if ($validator->fails()) {

                $er = [];

                $i = 0;

                foreach ($validator->errors() as $err) {

                    $er[$i++] = $err[0];

                    return $err;

                }



                return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all()), 'user' => Null], 200);

            }



            $user = User::where('email', '=', $request->mobile_email)

            ->orWhere('phone', '=', $request->mobile_email)

            ->first();



            if($user->active_status == "active"){



                if(!empty($user->email) && $user->remember_token !=null){



                    $otp = mt_rand(100000, 999999);



                    $userotp = ForgetOtp::create([



                    'user_id' => $user->id,

                    'otp' => $otp,



                    ]);



                    //send sms



                    $sid = env("TWILIO_SID");

                    $token = env("TWILIO_TOKEN");

                    $from = env("TWILIO_FROM");



                    $twilio = new Client($sid, $token);



                    $message = $twilio->messages

                    ->create($user->phone, // to

                    ["body" => $otp." is your code to reset your OfficeShare password. Don't reply to this message with your code.", "from" => $from]

                    );





                    // send mail



                    $m=$this->forgetPasswordEmail($user,$otp);



                    if($m['status']==true){

                        Mail::to($user->email)->send(new Signup($m));   

                    }



                    return response()->json(['status' => true, 'message' => "otp send succcessfully", 'otp' => $userotp], 200);



                }

                else{



                    return response()->json(['status' => false, 'message' => "user not registered or email not verified", 'otp' =>null], 200);



                }



            }

            else{



                return response()->json(['status' => false, 'message' => "The email has already been registred. currently in inactive mode.to active your account mail on  customerservices@office-share.io", 'user' => Null], 200);

            }

           

    }



    public function verifyforgetotp(Request $request){



          $validator = Validator::make($request->all(), [

            'otp'                   => 'required',

            'user_id'                 => 'required'

            ]);



        if ($validator->fails()) {

            $er = [];

            $i = 0;

            foreach ($validator->errors() as $err) {

                $er[$i++] = $err[0];

                return $err;

            }

         

             return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all()), 'user' => Null], 200);

        }



       $userotp = ForgetOtp::where('otp','=',$request->otp)

                            ->where('user_id','=',$request->user_id)

                                ->first();



        if(!empty($userotp)){



         return response()->json(['status' => true, 'message' => "OTP verified"], 200);





        }

        else{



          return response()->json(['status' => false, 'message' => "Invalid otp"], 200);





        }







    }



    public function forgetpassword(Request $request){





         $validator = Validator::make($request->all(), [

            'mobile_email'                 => 'required',

            'password'            => 'required'

            ]);



        if ($validator->fails()) {

            $er = [];

            $i = 0;

            foreach ($validator->errors() as $err) {

                $er[$i++] = $err[0];

                return $err;

            }

         

             return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all()), 'user' => Null], 200);

        }



         $user = User::where('email', '=', $request->mobile_email)

                    ->orWhere('phone', '=', $request->mobile_email)

                        ->first();





        $hash =Hash::make($request->password);



            if(!empty($user)){



                if($user->active_status ==  'active'){

                    User::where('id', '=', $user->id)

                        ->update([



                            'password' => $hash

                        ]);

                return response()->json(['status' => true, 'message' => "Your Password Updated Successfully", 'user' =>$user], 200);



                }

                else{



                return response()->json(['status' => false, 'message' => "The email has already been registred. currently in inactive mode.to active your account mail on  customerservices@office-share.io", 'user' => Null], 200);   



                }



            }else{



                return response()->json(['status' => true, 'message' => "user not found", 'user' => Null], 200);



            }



    }







    public function myaccount(Request $request){



         $validator = Validator::make($request->all(), [

            'user_id' => 'required'

        ]);



        $user = User::where('id', '=', $request->user_id)->first();



        if(!empty($user)){



            return response()->json(['status' => true, 'message' => "success", 'user' => $user], 200);



        }else{



              return response()->json(['status' => false, 'message' => "success", 'user' => Null], 200);



        }



    }



   



    public function logout(Request $request)

    {

        $user = User::where('id', '=', $request->user_id)->first();







        if(!empty($user))

        {



               $location = DB::table('user_device_token')

               ->where('user_id','=',$request->user_id)

               ->where('device_token','=',$request->firebase_token)

               ->where('device_id','=',$request->device_id)

               ->delete();



            return response()->json([

                'status'  => true,

                'message' => 'Your account logout successfully

'

                

            ]);



        }

        else{



                return response()->json([

                'status'  => false,

                'message' => 'user not found'

                

                ]);



        }

    }


}

