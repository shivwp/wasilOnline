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

        if(!empty($card)){
            if($request->quantity >  1){

                $i = 1;
    
                for($i=1;$i<=$request->quantity;$i++){
    
                    $code=Str::random(16);
                    $code=substr_replace($code, '-', 4, 0);
                    $code=substr_replace($code, '-', 9, 0); 
                    $code=substr_replace($code, '-', 14, 0);
                    $gift_expiry_date=Carbon::now()->addDays($card->valid_days);
    
                    $userGiftCard = GiftCardUser::create([
    
                        'user_id' => $userid,
                        'card_id' => $request->card_id,
                        'gift_card_code' => $code,
                        'gift_card_amount' => $request->card_amount,
                        'gift_expiry_date' => $gift_expiry_date
            
                    ]);
                    $this->sendGift($userGiftCard);
    
                }
              
            }
            else{
    
                $code=Str::random(16);
                $code=substr_replace($code, '-', 4, 0);
                $code=substr_replace($code, '-', 9, 0); 
                $code=substr_replace($code, '-', 14, 0);
                $gift_expiry_date=Carbon::now()->addDays($card->valid_days);
    
                $userGiftCard = GiftCardUser::create([
    
                    'user_id' => $userid,
                    'card_id' => $request->card_id,
                    'gift_card_code' => $code,
                    'gift_card_amount' => $request->card_amount,
                    'gift_expiry_date' => $gift_expiry_date
        
                ]);

                $this->sendGift($userGiftCard);
    
            }
             //add to cart Giftcard
             $quantity = $request->quantity;
             $price = $quantity *  $request->card_amount;
             $cart_added = Cart::create([
                 'user_id'             => $userid,
                 'product_id'          => $request->product_id,
                 'quantity'            => $request->quantity,
                 "price"                =>  $price 
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
                'cart_id' => $cart_added->id
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