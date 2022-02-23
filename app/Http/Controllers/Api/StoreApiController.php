<?php



namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\VendorSetting;

use App\Models\Category;

use Validator;

use App\Models\Product;

use App\Models\Role;

use Auth;



class StoreApiController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

   

        $vendors = Role::where('title', 'Vendor')->first()->users()->get();



        foreach ($vendors as $key => $value) {

             // code...

              $data=$this->getVendorMeta($value->id);

              

              $value['profile_img']= isset($data['profile_img'])?url('images/vendor/settings/' . $data['profile_img']):'';

              $value['banner_img']= isset($data['banner_img'])?url('images/vendor/settings/' . $data['banner_img']):'';

              $value['data'] = $data;

            

        }

      return response()->json(['status' => true, 'message' => "Store list", 'data' => $vendors], 200);

       

    }



    public function singlestore( Request $request)

    {

          $data['vendor'] = User::where('id','=',$request->id)->get();

        foreach (  $data['vendor'] as $key => $value) {

            // code...

            $data=$this->getVendorMeta($value->id);

            

            $data['profile_img']=isset($data['profile_img'])?url('images/vendor/settings/' . $data['profile_img']):'';

            $data['banner_img']=isset($data['banner_img'])?url('images/vendor/settings/' . $data['banner_img']):'';

            if(!empty($request->cat_id)){

            $data['product'] = Product::where('vendor_id','=',$request->id)->where('cat_id','=',$request->cat_id)->get();

            }else{

                $data['product'] = Product::where('vendor_id','=',$request->id)->get();

            }

           



           //dd($data['product']);

            foreach ($data['product'] as $key => $value) {

                // code...



                $value['featured_image'] = url('products/feature/'. $value->featured_image);

                $value['gallery_image'] = json_decode($value->gallery_image);

                $value['gallery_image'] = url('products/feature/'. $value->featured_image);

           

                 

            }

             

             

             

        }

      

        return response()->json(['status' => true, 'message' => "Store list", 'data' => $data], 200);



       

    }

     public function singlestorecategory(Request $request)

    {
        
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false,'code'=>$succcessCode, 'message' => implode("", $validator->errors()->all())], 200);
        }

        $vendor = User::where('id','=',$request->id)->first();
        $productcat = Product::select('products.id as pro_id','products.vendor_id','categories.*')->Join('categories', 'categories.id', '=', 'products.cat_id')->groupBy('categories.slug')->get();

        if(count($productcat)>0){
            foreach($productcat as $key => $val){
                $val->category_image = url('category/' . $val->category_image );
                $val->category_image_banner = url('category/' . $val->category_image_banner );

            }
            return response()->json(['status' => true, 'message' => "Store Category list", 'data' => $productcat], 200);  

        }
        else{
            return response()->json(['status' => false, 'message' => "Store category not found", 'data' => []], 200);  

        }


    //   $vendor = User::where('id','=',$request->id)->get();

    //     foreach ($vendor as $key => $value) {

           

    //         $product = Product::where('vendor_id','=',$request->id)->groupBy('cat_id')->get();

    //         foreach ($product as $key => $value) {

    //             $data['categories'][] = Category::where('id','=',$value->cat_id)->get();    

    //         }  

           

    //     }

    //     return response()->json(['status' => true, 'message' => "Store list", 'data' => $data], 200);  

    }

    public function singlestorecategoryproduct(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode("", $validator->errors()->all())], 200);
        }
        if(isset($request->cat_id) && !empty($request->cat_id)){
            $products = Product::where('cat_id',$request->cat_id)->get();
        }
        else{
            $products = Product::where('vendor_id',$request->id)->get();
        }

       
        if(count($products)>0){

            return response()->json(['status' => false, 'message' => "Store Category Product List", 'data' => $products], 200); 
        }
        else{
            return response()->json(['status' => false, 'message' => "Store Category Product List not found", 'data' =>[]], 200); 

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

        //

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

