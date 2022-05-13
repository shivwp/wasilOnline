<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBids;
use App\Models\User;
use App\Models\Product;
use Validator;
use Auth;

class BidApiController extends Controller
{
    public function index(Request $request){


        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
        } 
        $user_id = $user->id;

        $bid = UserBids::orderBy('id','DESC')->where('user_id',$user_id)->get();

        if(!empty($bid) || count($bid) > 0){

        return response()->json(['status' => true, 'message' => "Success",'bids' => $bid], 200);

        }else{

             return response()->json(['status' => false, 'message' => "bids not found",'bids' => []], 200);

        }



    }

    public function productbid(Request $request){

          $validator = Validator::make($request->all(), [
            'product_id' => 'required'
        ]);
        if ($validator->fails()) {

            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);

        }

        $bid = UserBids::orderBy('id','DESC')->where('product_id',$request->product_id)->get();

        if(!empty($bid) || count($bid) > 0){

        return response()->json(['status' => true, 'message' => "Success",'bids' => $bid], 200);

        }else{

             return response()->json(['status' => false, 'message' => "bids not found",'bids' => []], 200);

        }

    }

     public function create(Request $request){
           
            if (Auth::guard('api')->check()) {
                $user = Auth::guard('api')->user();
            } 
            $user_id = $user->id;
            $userdata = User::where('id',$user_id)->first();

              $validator = Validator::make($request->all(), [
                    'bid_price' => 'required',
                    'product_id' => 'required',
             ]);
            if ($validator->fails()) {

                return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);

            }

            //stripe payment card

            $customer_id = $userdata->customer_id;

             $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));

              $cards = [];

              if(isset($customer_id)) {

                   $cards = $stripeAccount->customers->allSources(

                        $customer_id,

                        ['object' => 'card', 'limit' => 10]

                   );

              }

              if(empty($cards) || count($cards) < 0){

                     return response()->json(['status' => false, 'message' => "add payment method"], 200);  
              }

            $UserBid = UserBids::where('bid_price',$request->bid_price)->first();

            $updateprivious = UserBids::where([['bid_price','<',$request->bid_price],['status','pending']])->first();

            $updateprivious->update([

                'status' => 'out bid'
            ]);
            $updateprivious->save();

            if(!empty($UserBid)){

              return response()->json(['status' => false, 'message' => "bid already created"], 200);  

            }

        $createbid = UserBids::create([

            'user_id'       => $user_id,
            'product_id'    => $request->product_id,
            'bid_price'     => $request->bid_price,
            'status'        => "pending"
        ]);

        return response()->json(['status' => true, 'message' => "success"], 200);  

     }

    public function allbids(Request $request){

            $bids = UserBids::orderBy('id','DESC');

            $bid = $bids->get();
     
             if(!empty($bid) || count($bid) > 0){

                    return response()->json(['status' => true, 'message' => "Success",'bids' => $bid], 200);

             }
             else{

                 return response()->json(['status' => false, 'message' => "bids not found",'bids' => []], 200);

            }



     }

     public function store(Request $request){

     }


}
