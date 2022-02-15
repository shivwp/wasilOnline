<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\Role;
use App\Models\Category;
use DB;



class CouponController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index( Request $request)

    {

        $d['title'] = "COUPON";

        $d['buton_name'] = "ADD NEW";

        //$d['coupon']=Coupon::all();

        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        
         $q=Coupon::select('*');
            if($request->search){
                $q->where('code', 'like', "%$request->search%");  
            }
             $d['coupon']=$q->paginate($pagination)->withQueryString();

        return view('admin/coupon/index',$d);
        

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $d['title'] = "COUPON";
        $d['vendor'] = Role::where('title', 'Vendor')->first()->users()->get();
        $d['category'] = Category::all();
        return view('admin/coupon/add',$d);

    }


    public function productSearch(Request $req){

        $search =  $req->psearchTerm;
        $datas = [];

       $Product = Product::where('pname', 'like', "%{$search}%")->get();
		
		$data = array();
		foreach ($Product as $d){
			$data[] =array(
				'id' =>$d->id,
				'text' => $d->pname,
			);
		}
        echo json_encode($data);
		exit;


    }

    public function store(Request $request)

    {
     
      $maximum_spend = $request->maximum_spend;
      $minimum_spend = $request->manimum_spend;
        $coupon = Coupon::updateOrCreate(
            
            [

                'id' => $request->id

            ],

            [

            // 'user_id'   => Auth::user()->id,

            'code'      => $request->input('code'),

            'description'     => $request->input('description'),

            'discount_type'     => $request->input('amount_type'),

            'coupon_amount'     => $request->input('coupon_amount'),

            'allow_free_shipping'     => $request->input('free_shipping'),

            'start_date'     => $request->input('start_date'),

            'expiry_date'     => $request->input('expiry_date'),

            'minimum_spend'     => $minimum_spend,

            'maximum_spend'     => $maximum_spend,

            'limit_per_coupon'     => $request->input('limit_per_coupon'),

            'limit_per_user'     => $request->input('limit_per_user'),

            'status'     => $request->input('status'),

            'vendor_id'     => json_encode($request->input('vendor_id')),

            'category_id'     => json_encode($request->input('category_id')),
            
            'product_id'     => json_encode($request->input('product_id')),

        ]);

        if(!empty($request->id)){

            DB::table('coupon_product')->where('coupon_id',$request->id)->delete();
            DB::table('category_coupon')->where('coupon_id',$request->id)->delete();
            DB::table('coupon_user')->where('coupon_id',$request->id)->delete();

        }
        $coupon->product()->sync($request->input('product_id'),[]);

        $coupon->category()->sync($request->input('category_id'),[]);
        
        $coupon->vendor()->sync($request->input('vendor_id'),[]);



    return redirect('/dashboard/coupon')->with('status', 'your data is updated');

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

        $d['title'] = "Coupon";

        $d['coupon']=Coupon::findorfail($id);

        $d['vendor'] = Role::where('title', 'Vendor')->first()->users()->get();

        $d['category'] = Category::all();

        $d['product'] = Product::all();

        return view('admin/coupon/add',$d);

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

         $coupon = Coupon::findOrFail($id);

        $coupon->delete();

        return back();

    }

}

