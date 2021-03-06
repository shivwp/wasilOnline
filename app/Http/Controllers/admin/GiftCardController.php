<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\GiftCard;

use App\Models\GiftCardLog;

use App\Models\Product;

use App\Models\GiftCardUser;

use App\Models\User;

use DB;



class GiftCardController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $d['title'] = "Gift Card";

        $d['buton_name'] = "ADD NEW";

        $giftcard=GiftCard::all();



        $d['giftcard'] = $giftcard;

         $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }

         $q=GiftCard::select('*');

            if($request->search){

                $q->where('title', 'like', "%$request->search%");  

            }

             $d['giftcard']=$q->paginate($pagination)->withQueryString();

       



        return view('admin/gift-card/index',$d);

    }





     public function index2(Request $request)

    {

        $d['buton_name'] = "ADD NEW";

        $d['title'] = "Gift Card";

        $d['giftcards']=GiftCard::join('user_giftcard_log', 'user_giftcard_log.card_id', '=', 'gift_card.id' )->join('users','users.id','=','user_giftcard_log.user_id')->select('user_giftcard_log.*','users.*','gift_card.*')->get();

         

        $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }

        $q=GiftCard::select('*');

        if($request->search){

           $q->where('title', 'like', "%$request->search%");  

        }

        $d['giftcard']=$q->paginate($pagination)->withQueryString();



         return view('admin/gift-card/index2',$d);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $d['title'] = " Gift Card";

        $d['products'] = Product::where('parent_id',0)->where('product_type','giftcard')->get();

        return view('admin/gift-card/add',$d);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

       $GiftCard = GiftCard::updateOrCreate(

            [

                'id' => $request->id

            ],

            [

            // 'user_id'   => Auth::user()->id,

            'title'             => $request->input('title'),

            'description'       => $request->input('description'),

            'amount'            => $request->input('amount_val'),

            'valid_days'        => $request->input('valid_days'),

            'status'        => $request->input('status'),

            

        ]);



         if($request->hasfile('image'))

            {

                $file = $request->file('image');

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('giftcard/', $filename);

                   DB::enableQueryLog(); 

                GiftCard::where('id',$GiftCard->id)->update([



                    'image' => $filename

                ]);

            }

    $type='Gift card';

   \Helper::addToLog('Gift card create or update', $type);

    return redirect('/dashboard/gift-card')->with('status', 'your data is updated');

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

        $d['GiftCard']=GiftCard::findorfail($id);

        $d['products']=Product::where('product_type','=','giftcard')->get();

        $d['title'] = "Gift Card";

        return view('admin/gift-card/add',$d);

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

    public function giftcardTransaction(Request $request){

        $d['title'] = "Gift Card";

        $d['buton_name'] = "ADD NEW";

        $giftcard=GiftCard::all();



        $d['giftcard'] = $giftcard;

         $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }

         $q=GiftCard::select('*');

            if($request->search){

                $q->where('title', 'like', "%$request->search%");  

            }

             $d['giftcard']=$q->paginate($pagination)->withQueryString();

       



        return view('admin/gift-card/gift-trans',$d);
    }

    public function transactionShow($id){

        $d['title'] = "Show Transactions";

        $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }

        $GiftCardUser =GiftCardUser::where('card_id',$id);
        $giftcard = $GiftCardUser->paginate($pagination)->withQueryString();

        foreach($giftcard as $key => $val){

            $giftcard_log =GiftCardLog::where('gift_card_code',$val->gift_card_code)->get();
            foreach($giftcard_log as $key_log => $val_log){
                $user = User::where('id',$val_log->user_id)->first();
                $giftcard_log[$key_log]['user'] = !empty($user->name) ? $user->name : $user->first_name;
            }
            $puchased_user = User::where('id',$val->user_id)->first();
            $giftcard[$key]['puchased_user'] = !empty($puchased_user->name) ? $puchased_user->name : $puchased_user->first_name;
            $giftcard[$key]['log'] = $giftcard_log;

        }

        $d['giftcard'] = $giftcard;
        
        return view('admin/gift-card/tans-show',$d);

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

       $GiftCard =GiftCard::where('id',$id)->first();

        if ($GiftCard != null) {

           $GiftCard->delete();

            $type='GiftCard';

            \Helper::addToLog('Gift card create or update', $type);

            return redirect('dashboard/gift-card')->with('success', 'Student deleted successfully');

        }

    }

}

