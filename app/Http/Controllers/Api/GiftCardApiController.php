<?php







namespace App\Http\Controllers\Api;







use App\Http\Controllers\Controller;



use Illuminate\Http\Request;



use App\Models\GiftCard;



use App\Models\GiftCardUser;



use App\Models\User;



use App\Models\Setting;



use App\Models\Cart;



use App\Models\CustomAttributes;



use App\Models\Mails;



use Illuminate\Support\Str;



use Illuminate\Support\Carbon;



use App\Mail\GiftCardEmail;



use App\Models\UserWalletTransection;



use App\Models\GiftCardLog;



use App\Models\ApplyGiftcard;



use Validator;



use Mail;











use Auth;



class GiftCardApiController extends Controller



{



    /**



     * Display a listing of the resource.



     *



     * @return \Illuminate\Http\Response



     */



    public function index()



    {



        $giftcard = GiftCard::all();







        if(count($giftcard) > 0){







            return response()->json(['status' => true, 'message' => "gift cards", 'data' => $giftcard], 200);



        }



        else{







            return response()->json(['status' => false, 'message' => "gift cards not found", 'data' => []], 200);







        }



    }



    public function index2()



    {



        $userid = Auth::user()->token()->user_id;



        if(empty($userid)){



            return response()->json(['status' => true, 'message' => "user not found", 'data' => []], 200); 



        }



        $userwalletbalance = User::findorfail($userid);



        $giftcard = UserWalletTransection::where('user_id',$userid)->get();







        if(count($giftcard) > 0){







            return response()->json(['status' => true, 'message' => "success",'wallet'=>$userwalletbalance->user_wallet,'data' => $giftcard], 200);



        }



        else{







            return response()->json(['status' => false, 'message' => "unsuccess", 'data' => []], 200);







        }



    }



    public function applyGiftcard(Request $request){

        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

        } 



        $user_id = $user->id;



        $giftcard = GiftCardUser::where('gift_card_code',$request->giftcard_code)->where('gift_card_amount','!=',0)->first();
        $card = GiftCard::where('id',$giftcard->card_id)->first();



        if(!empty($giftcard)){



            // $currentDateTime = Carbon::now();

            // $newDateTime = Carbon::now()->addDays(5);

          //  $date = date("Y-M-D", strtotime($giftcard->created_at));

            //$date =  date('Y-m-d', strtotime($giftcard->created_at));

            $daysToAdd = $card->valid_days;

            $date = Carbon::parse($giftcard->created_at)->addDays($daysToAdd)->format('Y-m-d');

            $currentDateTime = Carbon::now()->format('Y-m-d');

            if($currentDateTime > $date){

                return response()->json(['status' => false, 'message' => "Gift Card expired"], 200);

            }

        

            $amount = $request->amount;



            $giftcard_amount = $giftcard->gift_card_amount;



            if($amount > $giftcard_amount){

                $resultAmount = $amount - $giftcard_amount;

                $gift_card_amount =$giftcard_amount;

            }

            else{

                $result = $giftcard_amount - $amount; 

                $resultAmount = 0; 

                $gift_card_amount =$amount;

            }



            ApplyGiftcard::create([

                'user_id'           => $user_id,

                'giftcard_code'     => $request->giftcard_code,

                'gift_card_amount'  => $gift_card_amount

            ]);



            //dd($resultAmount);



            // $giftcard->update([

            //     'gift_card_amount' => 0

            // ]);



            // GiftCardLog::create([



            //     'user_id'           => $user_id,



            //     'gift_card_code'    => $request->giftcard_code,



            //     'gift_card_amount'  =>   $giftcard_amount,



            //     'note'              =>  "gift card code used in order",



            // ]);

            return response()->json(['status' => true, 'message' => "gift card applied", 'amount' => $resultAmount], 200);



        }

        else{

            return response()->json(['status' => false, 'message' => "invalid gift card"], 200);

        }





    }



    public function getGiftcard(Request $request){

        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

        } 



        $user_id = $user->id;



        $giftcard = ApplyGiftcard::where('user_id',$user_id)->get();

        $sum = ApplyGiftcard::where('user_id',$user_id)->sum('gift_card_amount');



        if(count($giftcard) > 0){

            return response()->json(['status' => true, 'message' => "success", 'giftcard' => $giftcard,'total_amount' => $sum], 200);



        }else{

            return response()->json(['status' => false, 'message' => "unsuccess", 'giftcard' => []], 200);

        }

        



    }



    public function removeGiftcard(Request $request){

       $ApplyGiftcard = ApplyGiftcard::whereIn('id',$request->id)->get();
       if(!empty($ApplyGiftcard)){

        foreach($ApplyGiftcard as $val){
            ApplyGiftcard::where('id',$val->id)->delete();
        }

         return response()->json(['status' => true, 'message' => "success"], 200);

       }

       else{

            return response()->json(['status' => false, 'message' => "unsuccess"], 200);

       }

    }







    /**



     * Show the form for creating a new resource.



     *



     * @return \Illuminate\Http\Response



     */



    public function create()



    {



        //



    }







    /**



     * Store a newly created resource in storage.



     *



     * @param  \Illuminate\Http\Request  $request



     * @return \Illuminate\Http\Response



     */



    public function store(Request $request)
    {
        $userid = Auth::user()->token()->user_id;

        $validator = Validator::make($request->all(), [
            'card_id' => 'required',

            'card_amount' => 'required',

            'recipient_email' => 'required',

            'user_name' => 'required',

            'message' => 'required',
            'quanatity' => 'required',
            'product_id' => 'required'
        ]);

        $card = GiftCard::find($request->card_id);
         $ALREDY = Cart::where('user_id',$userid)->where('product_id',$request->product_id)->first(); 
        if(!empty($ALREDY)){

            return response()->json(['status' => false, 'message' => "already exist"], 200);
        }

        if(!empty($card)){

             //add to cart Giftcard

             $quantity = $request->quantity;

             $price = $quantity *  $request->card_amount;

             $cart_added = Cart::create([

                 'user_id'             => $userid,

                 'product_id'          => $request->product_id,

                 'quantity'            => $request->quantity,

                 "price"                =>  $price,
                 "card_id"                => $request->card_id,
                 "card_amount" => $request->card_amount

             ]);



             // gift card custom attributes

             $custom_attr = [

                'to' =>  $request->recipient_email,
                'from' =>  $request->user_name,
                'message' =>  $request->message,
                'devlivery date' =>  $request->delivery_date,
             ];



             CustomAttributes::create([

                'product_id'        =>$request->product_id,

                'custom_attributes' => json_encode($custom_attr),

                'user_id' =>$userid,
                'cart_id' => $cart_added->id,
                'price' =>  $price,

             ]);

             return response()->json(['status' => true, 'message' => "success"], 200);

        }else{
            return response()->json(['status' => false, 'message' => "gift cards not found", 'data' => []], 200);
         }

    }







    public function sendGift($userGiftCard)



    {



        $userEmail = User::where('id',$userGiftCard->user_id)->first();



        $setting=Setting::first(); 



        $basicinfo=['{code}'=>$userGiftCard->gift_card_code,



       //'{recipient_name}'=>$giftuser->recipient_name,



        ];



        $msgData=Mails::where('msg_category','giftcard')->first();



        $replMsg=Mails::where('msg_category','giftcard')->pluck('message')->first();



        foreach($basicinfo as $key=> $info){



        $replMsg=str_replace($key,$info,$replMsg);



        }



        $config=['fromemail'=>$msgData->from_email,"replyemail"=>$msgData->reply_email,'message'=>$replMsg,'subject'=>$msgData->subject,'name'=>$msgData->name];



        Mail::to($userEmail->email)->send(new GiftCardEmail($config)); 







    }



    public function userGiftcard(Request $request){

        $user_id = ''; 
        if (Auth::guard('api')->check()) {

            $user = Auth::guard('api')->user();

        } 

        $user_id = $user->id;

        $GiftCardUser = GiftCardUser::select('gift_card_code','gift_card_amount','gift_expiry_date','assigned_user')->where('assigned_user',$user_id)->get();

        if(count($GiftCardUser) > 0){
            return response()->json(['status' => true, 'message' => "gift cards code", 'data' => $GiftCardUser], 200);
        }
        else{
            return response()->json(['status' => true, 'message' => "gift cards code", 'data' => []], 200);
        }

    }



    /**



     * Display the specified resource.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function show($id)



    {



        //



    }







    /**



     * Show the form for editing the specified resource.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function edit($id)



    {



        //



    }







    /**



     * Update the specified resource in storage.



     *



     * @param  \Illuminate\Http\Request  $request



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function update(Request $request, $id)



    {



        //



    }







    /**



     * Remove the specified resource from storage.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function destroy($id)



    {



        //



    }







    



    



}