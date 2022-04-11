<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdrow;
use App\Models\Setting;
use App\Models\User;
use App\Models\Product;
use App\Models\VendorEarnings;
use App\Models\OrderedProducts;
use Illuminate\Support\Carbon;
use Redirect;
use Auth;



class WithdrowController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $d['title'] = "Withdrow Requests";

        if(Auth::user()->roles->first()->title == 'Admin'){
            $earning = VendorEarnings::orderBy('id','DESC')->where('withdrawal_status','requested');
        }
        else{
            $earning = VendorEarnings::where('vendor_id',Auth::user()->id)->orderBy('id','DESC')->where('withdrawal_status','requested');
            
        }
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $vendor_earning =    $earning->paginate($pagination)->withQueryString();
        foreach($vendor_earning as $key => $val){
            $vendor = User::where('id',$val->vendor_id)->first();
            $product = Product::where('id',$val->product_id)->first();
          
            $vendor_earning[$key]['vendor'] = $vendor->name;
            $vendor_earning[$key]['product'] = $product->pname;
        }
        
        $d['vendor_earning'] = $vendor_earning;

        return view('admin/withdrow/vendor-earning',$d);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $d['title'] = "Request Withdrow";

        $d['min_withdrwal_limit'] = Setting::where('id',66)->first();

        $d['max_withdrwal_limit'] = Setting::where('id',67)->first();

        $d['withdrwal_threshould'] = Setting::where('id',68)->first();

        $authUser = Auth::user();

        $d['authUser'] = $authUser;

        if($authUser->vendor_wallet >= $d['min_withdrwal_limit']->value){



            return view('admin/withdrow/add',$d);



        }

        else{



            return view('admin/withdrow/show',$d);



        }

        

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $page = Withdrow::create(

            [

            'vendor_id'     => Auth::user()->id,

            'amount'     => $request->input('amount'),

            'status'     => 0,

            'method'     => $request->input('method'),

            ]);



        return redirect('/dashboard/withdrow');

    

    }

    public function withdrowreq(Request $request){
        VendorEarnings::where('id',$request->withdrowid)->update([
            'withdrawal_status' => 'requested'
        ]);
        return redirect('/dashboard/vendor-earning-list');
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

    public function vendorEarninglist()
    {
      
        $d['title'] = "Vendor Earning";
        if(Auth::user()->roles->first()->title == 'Admin'){
            $earning = VendorEarnings::orderBy('id','DESC');
        }
        else{
            $earning = VendorEarnings::where('vendor_id',Auth::user()->id)->orderBy('id','DESC');
            
        }
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $vendor_earning =    $earning->paginate($pagination)->withQueryString();
        foreach($vendor_earning as $key => $val){
            $vendor = User::where('id',$val->vendor_id)->first();
            $product = Product::where('id',$val->product_id)->first();
            $Order = OrderedProducts::where('order_id',$val->order_id)->where('product_id',$val->product_id)->first();
            $date = Carbon::parse($Order->created_at);
            $now = Carbon::now();
            $diff = $date->diffInDays($now);

            if(($Order->status == "delivered") && ($diff >=30)){
                $vendor_earning[$key]['can_withdrow'] = true;
            }
            else{
                $vendor_earning[$key]['can_withdrow'] = false;
            }
            $vendor_earning[$key]['vendor'] = $vendor->name;
            $vendor_earning[$key]['product'] = $product->pname;
        }
        
        $d['vendor_earning'] = $vendor_earning;

        return view('admin/withdrow/vendor-earning',$d);

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

      
        $d['title'] = "Request Withdrow";

        $d['min_withdrwal_limit'] = Setting::where('id',66)->first();

        $d['max_withdrwal_limit'] = Setting::where('id',67)->first();

        $d['withdrwal_threshould'] = Setting::where('id',68)->first();

        $authUser = Auth::user();

        $d['authUser'] = $authUser;

        if($authUser->vendor_wallet >= $d['min_withdrwal_limit']->value){



            return view('admin/withdrow/add',$d);



        }

        else{



            return view('admin/withdrow/show',$d);



        }

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



    public function approve(Request $request)

    {
        VendorEarnings::where('id',$request->id)->update([
            'withdrawal_status' => 'approved',
            'note' => $request->comment
        ]);

        return Redirect::back()->with('status', 'Withdrow Request Approved');

       

    }



    public function reject(Request $request)

    {

        VendorEarnings::where('id',$request->id)->update([
            'withdrawal_status' => 'decline',
            'note' => $request->comment
        ]);

        return Redirect::back()->with('status', 'Withdrow Request Rejected');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $tax = Withdrow::findOrFail($id);

        $tax->delete();

        return back();

    }

}

