<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class StripeCardsController extends Controller
{

    public function allCardsList(Request $request)
    {
        $user = Auth::guard('api')->user();
        $userid = $user->id;
        $usercustomerid = User::where('id',$userid)->first();
        $customer_id = $usercustomerid->customer_id;

         $parameters = $request->all();
         extract($parameters);
         try {     
              $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));

              $cards = [];
              if(isset($customer_id)) {
                   $cards = $stripeAccount->customers->allSources(
                        $customer_id,
                        ['object' => 'card', 'limit' => 10]
                   );
              }

              if(!empty($cards)){
                   return response()->json(['status' => true, 'message' => "success", 'data' => $cards], 200);
              } else {
                   return response()->json(['status' => false, 'message' => "fail", 'data' => null], 200);
              }
         } catch(\Stripe\Exception\InvalidRequestException $e) {
              return response()->json(['status' => false, 'message' => "Error: ".$e->getError()->message, 'data' => null], 200);
         }
    }

    public function addCard(Request $request)
     {
          // code...
          $userID = Auth::guard('api')->user();
          $user_id = $userID->id;
          $usercustomerid = User::where('id',$user_id)->first();
          $customer_id = $usercustomerid->customer_id;
          try {
               $parameters = $request->all();
               extract($parameters);

               $user = User::where('id', $user_id)->first();
               // echo env('STRIPE_SECRET');
               // exit;
               $stripeAccount = new \Stripe\StripeClient(env('STRIPE_SECRET'));

               \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

               if($user->customer_id == "") {
                    // 
                    $customer = $stripeAccount->customers->create([
                      'email' => $user->email,
                      'name' => $user->first_name,
                      'phone' => ($user->phone != '') ? $user->phone : '',
                      'description' => 'customer_'.$user->id,
                      //"source" => $src_token, 
                    ]);  // -- done

                    $customer_id = $customer->id;

                    User::where('id', $user_id)->update([
                      'customer_id' => $customer_id,
                    ]);

               } else {
                    $customer_id = $customer_id;
               }

               $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
               $ac =  $stripe->paymentMethods->attach(
                    $src_token,
                    ['customer' => $customer_id]
                );
                //return $ac;

               
               $cardinfo = $stripeAccount->customers->createSource(
                 $customer_id,
                 ['source' => $src_token]
               ); 


               if(!empty($cardinfo)){
                    return response()->json(['status' => true, 'message' => "Card added successfully!", 'data' => $cardinfo], 200);
               } else {
                    return response()->json(['status' => false, 'message' => "Failed to add card!"], 200);
               }
          } catch(\Stripe\Exception\InvalidRequestException $e) {
               return response()->json(['status' => false, 'message' => "Error: ".$e, 'response' => $e], 200);
          }
          

     }

   
}
