<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Image;
use Intervention\Image\Exception\NotReadableException;
use Illuminate\Http\Request;
use App\Models\SupportTickets;
use App\Models\SupportCategory;
use App\Models\Product;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use App\Models\SupportComment;
class SupportTicketsController extends Controller
{

    public function index (Request $request)
    {
        $d['title'] = "Tickets";
        $d['buton_name'] = "ADD NEW";
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $tickets = SupportTickets::with('order','product','user','category')->orderBy('id');
        $support_ticket = $tickets->paginate($pagination)->withQueryString();
        $d['tickets'] = $support_ticket;
        return view('admin/ticket/index',$d);

    }

    public function create()
    {
        $d['title'] = "Support Ticket";
        $d['buton_name'] = "ADD NEW";
        $d['cat'] = SupportCategory::all();
        $d['orders'] = Order::where('parent_id',0)->get();
        $d['products'] = Product::all();
        $d['users']  = User::whereHas(
            'roles', function($q){
                $q->where('title', 'Vendor');
            }
        )->get();
        return view('admin/ticket/add',$d);

    }

    public function store(Request $request)
    {
        $Support = SupportTickets::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'order_id'         => $request->input('order_id'),
                'product_id'         => $request->input('product_id'),
                'user_id'         => $request->input('user_id'),
                'cat_id'         => $request->input('cat_id'),
                'discription'         => $request->input('discription'),
                'source'         => $request->input('source'),
        ]);

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('support-image/', $filename);
                $Support->update([
                    'image' => $filename
                ]);
                  
        }
        $Support->update();

        return redirect('/dashboard/support-tickets')->with('status', 'your ticket is updated');
    }

    public function show($id)
    {
     
        $d['title'] = "Tickets";
        $d['buton_name'] = "ADD NEW";
        $d['tickets'] = SupportTickets::with('order','product','user','category')->findorfail($id);
        $comments = SupportComment::where('ticket_id',$d['tickets']->id)->get();
        foreach($comments as $key => $val){
            
            if($val->support_id != null){

                $user = User::where('users.id',$val->support_id)->first();
                $role = $user->roles->first()->title;
              
            }
            elseif($val->user_id != null){

                $user = User::where('users.id',$val->user_id)->first();
                $role = $user->roles->first()->title;
            }
            $comments[$key]['user_name'] =  $user->first_name;
            $comments[$key]['user_title'] =  $role;

        }
        $d['comments'] = $comments;
        return view('admin/ticket/show',$d);

    }

    public function sendComment(Request $request){

        $SupportComment = SupportComment::create([
            'ticket_id' => $request->ticket_id,
            'support_id' => $request->support_id,
            'user_id' => $request->user_id,
            'comment' => $request->comment,
        ]);

        if($request->hasfile('img'))
        {
            $file = $request->file('img');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('support-image/', $filename);
                SupportComment::where('id',$SupportComment->id)->update([
                    'image' => $filename
                ]);
                  
        }

        return redirect('/dashboard/support-tickets/'.$request->ticket_id);  
    }


    public function edit($id)
    {
        $d['title'] = "Ticket";
        $d['ticket']=SupportTickets::findorfail($id);
        $d['cat'] = SupportCategory::all();
        $d['orders'] = Order::where('parent_id',0)->get();
        $d['products'] = Product::all();
        $d['users']  = User::whereHas(
            'roles', function($q){
                $q->where('title', 'Vendor');
            }
        )->get();

        return view('admin/ticket/add',$d);

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $ticket=SupportTickets::findorfail($id);
        $ticket->delete();
        return redirect('/dashboard/support-tickets')->with('status', 'your ticket is deleted');
      

    }

    public function closeTicket(Request $request){

        $currentDate  = Carbon\Carbon::now()->format('Y-m-d H:i:s');
        
        SupportTickets::where('id',$request->id)->update([

            'remark' => $request->comment,
            'status' => 1,
            'closed_date' => $currentDate

        ]);

        return redirect('/dashboard/support-tickets')->with('status', 'Ticket closed');

    }


}

