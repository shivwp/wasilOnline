<?php







namespace App\Http\Controllers\Api;







use App\Http\Controllers\Controller;



use App\Models\PasswordReset;



use Laravel\Socialite\Facades\Socialite;



use App\Notifications\PasswordResetRequest;



use App\Notifications\PasswordResetSuccess;



use App\Notifications\UserRegister;



use App\PasswordReset as AppPasswordReset;



use App\Role;



use App\Models\User;
use App\Models\UserWalletTransection;

use App\Models\VendorSetting;



use Carbon\Carbon;



use Validator;



use Str;



use App\Setting;



use App\UserVerifyToken;



use App\MailTemplate;

use App\Models\Mails;

use App\Models\GiftCardUser;

use App\Models\GiftCardLog;

use App\Models\SocialAccount;

use App\Models\Address;

use App\Models\Reviews;

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



use App\Mail\Mailtemp;



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







    public function review(Request $request)

    {

        $userid = Auth::user()->token()->user_id;

        $User = User::where('id','=', $userid)->first();

       

         $validator = Validator::make($request->all(), [

            'rating_number' => 'required',

            'comment' => 'required',

           

            'product_id' => 'required'



        ]);



        if ($validator->fails()) {

            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);

        }



       $feedback = Reviews::create([

            'rating_number'      => $request->rating_number,

            'comment'     => $request->comment,

            'name'     => $User->first_name,

            'email'     => $User->email,

            'product_id'     => $request->product_id,

          

        ]);



        return response()->json(['status' => true,'message' => "success" ,"data"=>$feedback], 200);

    }

    public function reviewlist(Request $request)

    {   

          $reviews=Reviews::orderBY('id','DESC')->where('product_id','=',$request->product_id)->get(); 

         $validator = Validator::make($request->all(), [

            'product_id' => 'required'

        ]);



        if ($validator->fails()) {

            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);

        }

         if(count($reviews)>0){



       $reviews=Reviews::orderBY('id','DESC')->where('product_id','=',$request->product_id)->get(); 



        return response()->json(['status' => true,'message' => "success" ,"data"=>$reviews], 200);

    }else{

         return response()->json(['status' => false,'message' => "no reviews" ], 200);

    }



    }

    public function userdetails()

    {

        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

        } 

        $user_id = $user->id;

        

    

        $data= User::where('id','=',$user_id)->get(); 

        if(!empty($data)){

            return response()->json([ 'status'=> true , 'message' => "success", 'user' => $data], 200);

        }else{

            return response()->json([ 'status'=> false ,'message' => "unsuccess", 'user' => []], 200);

        }

    }

    

    public function edituserdetails(Request $request){

        $userid = Auth::user()->token()->user_id;

        if(empty($userid)){

            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 

        }

        $validator = Validator::make($request->all(), [

            'first_name' => 'required',

            'last_name' => 'required',

            'display_name' => 'required',

            'email' => 'required',

            'phone' => 'required'

        ]);



        if ($validator->fails()) {

            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);

        }



        if($request->password){



            $pass = Hash::make($request->password);



       }

       $update = [



        'first_name' =>$request->first_name,

        'last_name' =>$request->last_name,

        'email' =>$request->email,

        'phone' =>$request->phone,

        //'password' =>$pass,

       ];

       if(isset($request->password)){
        $update['password'] = $pass;

       }

       if($request->hasFile('profile')){

        $file               = $request->file('profile');
        $name               = time().'.'.$file->getClientOriginalExtension();
        $destinationPath    = 'img';
        $file->move($destinationPath, $name);

        $update['profile_image'] = $name;

       }
       User::where('id',$userid)->update($update);

       return response()->json([ 'status'=> true , 'message' => "success"], 200);

    }



    public function myaddress()

    {

        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

        } 



        if(!isset($user)){

         

            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 

        }



        $user_id = $user->id;

      

        // $shipping= Address::where('address_type','=','billing')->where('user_id','=',$user_id)->get(); 



        // $billing= Address::where('address_type','=','shipping')->where('user_id','=',$user_id)->get();



        $UserAddresses= Address::where('user_id','=',$user_id)->get();



        if(count($UserAddresses) > 0){

             return response()->json([ 'status'=> true , 'message' => "success", 'address' => $UserAddresses], 200);

        }else{

             return response()->json([ 'status'=> false ,'message' => "unsuccess", 'address' => []], 200);

        }

    }



    public function editaddresses(Request $request){



        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

        } 



        if(!isset($user)){

         

            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 

        }



        $validator = Validator::make($request->all(), [

            'first_name'                            => 'required',

            'last_name'                             => 'required',

            'phone'                                 => 'required',

            'alternate_phone'                       => 'required',

            'address_type'                          => 'required',

            'address'                               => 'required',

            'address2'                              => 'required',

            'city'                                  => 'required',

            'country'                               => 'required',

            'state'                                 => 'required',

            'zip_code'                              => 'required',

            'landmark'                              => 'required'

        ]);

        if ($validator->fails()) {

            return response()->json(['status' => false,'message' => implode("", $validator->errors()->all())], 200);

        }



        $Address =     Address::updateOrCreate(['id'    => $request->id],[

            'user_id'        => $user->id,

            'first_name'        => $request->first_name,

            'last_name'         => $request->last_name,

            'phone'             => $request->phone,

            'alternate_phone'   => $request->alternate_phone,

            'address_type'      => $request->address_type,

            'address'           => $request->address,

            'address2'          => $request->address2,

            'city'              => $request->city,

            'country'           => $request->country,

            'state'             => $request->state,

            'zip_code'          => $request->zip_code,

            'landmark'          => $request->landmark

        ]);



        return response()->json(['status' => true,'message' => 'success'], 200);





    }

    public function deleteaddresses(Request $request){



        $address =Address::where('id',$request->id)->first();



        if ($address != null) {



           $address->delete();



            return response()->json(['status' => true,'message' => 'success'], 200);



        }

    }



   



   



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

          return response()->json(['status' => false,'message' => 'User not registered or Invalid credentials', 'user' => Null], 200);

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



              // create stripe customer 



              $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

              $customer = $stripe->customers->create([

                  'description' => 'My First Test Customer (created for API docs)',

                  'email' => $request->email,

                  'name' => $request->first_name.' '.$request->last_name

              ]);

  

              $customer_id = $customer->id;





            $user = new User;



            $user->first_name = $request->name;

            $user->name = $request->name;



            if($request->password){



                 $pass = Hash::make($request->password);



                $user->password = $pass;



            }



            $user->email = $request->email;



            $user->phone = $request->phone;



            $user->dob = $request->dob;



            $user->customer_id = $customer_id;



            $user->save();



            $success['token'] =  $user->createToken('API Token')->accessToken;



            $user->roles()->sync(4);



        }

        $mail_data = Mails::where('msg_category', 'signup')->first();

        $config = ['from_email' => $mail_data->from_email,

            "reply_email" => $mail_data->reply_email,

            'subject' => $mail_data->subject, 

            'name' => $mail_data->name,

            'message'=>$mail_data->message,

        ];

      



        // Mail::to($request->email)->send(new Mailtemp($config));



        return response()->json(['status' => true, 'message' => "Your account registerd successfully.",'token'=>$success, 'user' => $user], 200);



    }



    public function vendorlogin(Request $req)

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

            

             if($user->is_approved ){

                return response()->json(['status' => true,'message' => "Your account logged in successfully",'token'=>$token, 'user' => $user], 200);

             }

             else{

                 return response()->json(['status' => true,'message' => "Your account not approved"], 200);

             }

        

       }



       else{

          return response()->json(['status' => false,'message' => 'User not registered', 'user' => Null], 200);

       }



    }







     public function vendorregister(Request $request )



    {







        $validator = Validator::make($request->all(), [



                'first_name' => 'required',



                'last_name' => 'required',



                'email' => 'required',



                'password' => 'required|min:8',



                'phone' => 'required',



                'store_name' =>'required',



                'store_url' => 'required',



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



          

            $user->first_name = $request->first_name;

            $user->last_name = $request->last_name;



            if($request->password){



                 $pass = Hash::make($request->password);



                $user->password = $pass;



            }



            $user->email = $request->email;



            $user->phone = $request->phone;





           

           



            $user->save();



            $success['token'] =  $user->createToken('API Token')->accessToken;



            $user->roles()->sync(3);



            $vendor_id=$user->id;

             

            $vendordetail = array('store_url'=> $request->store_url,'store_name'=> $request->store_name);



               foreach ($vendordetail as $key => $value) {

                   // code...

                 $this->savevalue($vendor_id,$key,$value);

               }

            



        }

       



        return response()->json(['status' => true, 'message' => "Your account registerd successfully.",'token'=>$success, 'user' => $user], 200);



    }

    public function savevalue($vendor_id,$key,$value="") {



        $name=$key;

            $setting= VendorSetting::updateOrCreate([

                'vendor_id'=> $vendor_id,

                'name'=>$key,

            ], [

                'value'=>$value

            ]);



    }

    public function addWalletAmounty(Request $request){



        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

            $user_id = $user->id;

        } 

        if(!isset($user_id)){

            return response()->json(['status' => false, 'message' => 'user not found'], 200);      

        }



        $validator = Validator::make($request->all(), [

            'type' => 'required',
            'giftcardcode' => 'required'

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

        $giftcaradamount = GiftCardUser::where('gift_card_code',$request->giftcardcode)->first();



        $alreadyused = GiftCardLog::where('gift_card_code',$request->giftcardcode)->first();



        if(!empty($alreadyused)){

            return response()->json(['status' => false, 'message' => "card Already used"], 200); 

        }



        if(!empty($giftcaradamount)){

            $userwallet = User::where('id',$user_id)->first();

            if(empty($userwallet)){

                return response()->json(['status' => false, 'message' => "user not found"], 200); 

            }

            $updatewalletamount = $userwallet->user_wallet + $giftcaradamount->gift_card_amount;

            User::where('id',$user_id)->update([

                'user_wallet' => $updatewalletamount

            ]);



            GiftCardUser::where('id',$giftcaradamount->id)->update([



                'gift_card_amount' => 0



            ]);



            GiftCardLog::create([



                'user_id' => $user_id,

                'card_id' => $giftcaradamount->card_id,

                'gift_card_code' => $request->giftcardcode,

                'gift_card_amount' => $giftcaradamount->gift_card_amount,

                'note' => 'gift card redeem to user wallet',

            ]);

            UserWalletTransection::create([

                'user_id' => $user_id,
                'amount' => $giftcaradamount->gift_card_amount,
                'amount_type' => 'gift card transection',
                'description' => 'transection from cart to wallet',


            ]);



            return response()->json(['status' => false, 'message' => "gift card amount added to cart successfully"], 200); 



        }

        else{



            return response()->json(['status' => false, 'message' => "gift card not found"], 200); 



        }

      





    }





     public function social(Request $request) {

        try{

            $validator = Validator::make($request->all(), [  

                'provider' => 'in:google,facebook',          

                'access_token' => 'required',

            ]);

            if ($validator->fails())

                throw new Error(implode(",",$validator->messages()->all()));

            

            $social_user = Socialite::driver($request->provider)->stateless()->userFromToken($request->input('access_token'));

            

            if(!$social_user){

                throw new Error( Str::replaceArray('?', [$request->provider], __('messages.invalid_social')) );

            }

            $token = Str::random(80);



            $account = SocialAccount::where("provider_user_id",$social_user->getId())

                    ->where("provider",$request->provider)

                    ->with('user')->first();



            if($account){

       



                $user = User::where(["id"=>$account->user->id])->first();

                $user->api_token = hash('sha256', $token);

                $user->device_id = $request->input('device_id') ? $request->input('device_id') : "";

                $user->device_token = $request->input('device_token') ? $request->input('device_token') : "";

                $user->save();



                $data = new \stdClass();

                $data->token = $user->createToken(env('APP_NAME'))->accessToken;

                return response()->json(['data'=>$data,'status'=>true,'message'=>'verify_success']);

            } else { 

                $fname = $social_user->getName() ? $social_user->getName(): "";

                $lname = $social_user->getNickname() ? $social_user->getNickname(): "";



                $loginEmail = $social_user->getEmail() ? $social_user->getEmail() : $social_user->getId().'@'.$request->provider.'.com';

                

                $loginName =  $fname. $lname;



                // create new user and social login if user with social id not found.

                $user = User::where("email", $loginEmail)->first();

                if(!$user){  

                    $user = new User;

                    $user->email = $loginEmail;

                    $user->first_name = $loginName;

                    $user->social_id = $social_user->getId();

                    $user->password = Hash::make('social');

                    $user->api_token = hash('sha256', $token);

                    $user->device_id = $request->input('device_id') ? $request->input('device_id') : "";

                    $user->device_token = $request->input('device_token') ? $request->input('device_token') : "";

                    $user->save();

                }

                $social_account = new SocialAccount;

                $social_account->provider = $request->provider;

                $social_account->provider_user_id = $social_user->getId();

                $social_account->user_id = $user->id;

                $social_account->save();



                $data = new \stdClass();



                $data->token = $user->createToken(env('APP_NAME'))->accessToken;

                return response()->json(['data'=>$data,'status'=>true,'message'=>'verify_success']);

                

            }

        } catch(\Thuserowable $th){

            return response()->json([

                "message" => $th->getMessage(),

            ], 400);

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

    public function userforgot(Request $request){

        $validator = Validator::make($request->all(), [

            'email' => 'required',

        ]);



        if ($validator->fails()) { 

            return response()->json(['data'=>'','status'=>false, 'message'=>$validator->errors()->all(),'token'=>'']);            

        }else{

           

        $email = $request->email;

        $userData  = User::where('email',$email)->get()->first();

        if(!empty($userData)){

            $token = Str::random(100);

            $name = $userData->first_name;

            $userData->remember_token =  $token; 

            $userData->save();

            $mail_data = Mails::where('msg_category', 'Password reset')->first();



           $url = url('/userresetpassword').'/'. $token;

                if(!empty($email)){

                    $details = ['email' => $email,'url' =>$url,'first_name' =>$name];





            $message = str_replace('{{reset_password}}', $url, $mail_data->message) ;



            $config = ['from_email' => $mail_data->from_email,

            "reply_email" => $mail_data->reply_email,

            'subject' => $mail_data->subject, 

            'name' => $mail_data->name,

            'message'=>$message,



        ];

         // Mail::to('emailTemplate.forgot', $details, function($message) use ($details){

         //                $message->to($details['email'])->subject('Reset Password')->from(env('MAIL_FROM_ADDRESS'));

         //            });

        Mail::to($request->email)->send(new Mailtemp($config,$details, function($message) use ($details){

            $message->to($details['email'])->subject('Reset Password')->from(env('MAIL_FROM_ADDRESS'));

        }));



       

                }

                return response()->json(['token'=>$token,'status'=>true,'message'=>'Reset Password Link Send Your Email','url'=>$url]); 

        }else{

        return response()->json(['data'=>'','status'=>false, 'message'=>'Invalid Email']); 

        }

       }

    }

    public function userresetpassword(Request $request){

        $validator = Validator::make($request->all(), [

            'password' => 'required|min:6|max:20',

            'confirm_password'=>'required|same:password',

        ]);

        if ($validator->fails()) { 

            return response()->json(['data'=>'','status'=>false, 'message'=>$validator->errors()] );            

        }else{

            $data = User::where('remember_token',$request->remember_token)->first();

            if(!empty($data)){

                $data->remember_token = '';

                $data->password = Hash::make($request->password);

                $data->save();   

                return response()->json(['status'=>true,'message'=>'Your Password has been changed successfully'] );

            }else{

                return response()->json(['status'=>false,'message'=>'Invalid Token']);

            }      

        }

    }





}



