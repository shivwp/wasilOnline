<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportTickets;
use App\Models\SupportCategory;
use App\Models\SupportComment;
use App\Models\Order;
use App\Models\User;
use Auth;

class SupportTicketApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SupportCategory = SupportCategory::all();

        if(count($SupportCategory) > 0){
            
            return response()->json(['status' => true,'message' => "success","category" =>$SupportCategory], 200);
        }
        else{

            return response()->json(['status' => false,'message' => "unsuccess","category" => []], 200); 

        }
    }

    public function create(Request $request){
        $user = Auth::guard('api')->user();
        $SupportTickets = SupportTickets::create([
            'order_id' => $request->orderid,
            'product_id' => $request->productid,
            'cat_id' => $request->category,
            'user_id' => $user->id,
            'description' => $request->message,
            'source' => 'website',

        ]);

        if($request->hasfile('image')){

            $file = $request->file('image');

            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $file->move('support-image/', $filename);

            SupportTickets::where('id',$SupportTickets->id)->update([
                'image' => $filename
            ]);

        }
        return response()->json(['status' => true,'message' => "success"], 200);

    }

    public function allTickets(){

        $user = Auth::guard('api')->user();

        $SupportTickets = SupportTickets::where('user_id',$user->id)->get();

        if(count($SupportTickets) > 0){

            foreach($SupportTickets as $key => $val){

                $comment = SupportComment::where('ticket_id',$val->id)->get();

                foreach($comment as $comm => $c_val){

                    if($c_val->support_id != null){

                        $user = User::where('users.id',$c_val->support_id)->first();
                        $role = $user->roles->first()->title;
                      
                    }
                    elseif($c_val->user_id != null){
        
                        $user = User::where('users.id',$c_val->user_id)->first();
                        $role = $user->roles->first()->title;
                    }
                    $comment[$comm]['user_name'] =  $user->name;
                    $comment[$comm]['user_title'] =  $role;

                }
                $SupportTickets[$key]['comment'] = $comment;
            }
            
            return response()->json(['status' => true,'message' => "success","tickets" =>$SupportTickets ], 200); 

        }else{

            return response()->json(['status' => false,'message' => "unsuccess","tickets" =>[] ], 200); 

        }

    }

    public function ticketComment(Request $request){

        // dd($request);
        $user = Auth::guard('api')->user();
        $SupportComment = SupportComment::create([
            'ticket_id' => $request->ticketid,
           // 'support_id' => $request->support_id,
            'user_id' => $user->id,
            'comment' => $request->comment,
        ]);

        if($request->hasfile('image')){

            $file = $request->file('image');

            $extention = $file->getClientOriginalExtension();

            $filename = time().'.'.$extention;

            $file->move('support-image/', $filename);

            SupportComment::where('id',$SupportComment->id)->update([
                'image' => $filename
            ]);

        }



        return response()->json(['status' => true,'message' => "success"], 200);

    }

    public function userOrder(){
        $user = Auth::guard('api')->user();

        $order = Order::with('orderItem')->where('id',$user->id)->get();
        if(count($order)>0){

            return response()->json(['status' => true,'message' => "success",'order'=>$order], 200);

        }
        else{
            return response()->json(['status' => false,'message' => "unsuccess",'order'=>[]], 200); 
        }
    }

   
   
}
