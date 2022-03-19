<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Validator;

class CategoryApiController extends Controller
{
    public function index(Request $request)
    { 

        $category=Category::select('id','title','slug','category_image','category_image_banner','slug','parent_id','arab_description','arab_title')->where('parent_id','=',0)->get();
        foreach($category as $key => $val){

            if(!empty($request->language) && $request->language == "arabic"){
                $val->title =$val->arab_title;
                $val->discription =$val->arab_description;
            }

            $val['count']= Product::where('cat_id','=',$val->id)->count();

            $val->category_image_banner = url('category/' . $val->category_image_banner);

            $val['category_image'] = url('category/' . $val->category_image);

            $category_child= Category::select('id','title','slug','category_image','slug','parent_id','arab_description','arab_title')->where('parent_id','=',$val->id)->get();

            foreach ($category_child as $key => $value) {
                if(!empty($request->language) && $request->language == "arabic"){
                    $value->title =$val->arab_title;
                    $value->discription =$val->arab_description;
                }

                if(!empty($request->arabic) && $request->arabic == "arabic"){
                    $value->title =$val->arab_title;
                    $value->discription =$val->arab_description;
                }
                $sub_child_category = Category::select('id','title','slug','category_image','slug','parent_id')->where('parent_id','=',$value->id)->get();
                 $category_child[$key]['sub_child_category']= $sub_child_category;
                 foreach($sub_child_category as $subkey => $subval){
                    if(!empty($request->language) && $request->language == "arabic"){
                        $subval->title =$val->arab_title;
                        $subval->discription =$val->arab_description;
                    }
                 }
            }

            $val['child_category']=$category_child;

        }

        return response()->json(['status' => true, 'message' => "All category list", 'data' => $category], 200);
       
         
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */



    public function categorylist()

    {

       $categorylist=Category::all('id','title','slug','category_image','slug','parent_id');



         foreach($categorylist as $key => $val){

          

         }  

        

        return response()->json(['status' => true, 'message' => "All category list", 'data' => $categorylist], 200);

    }





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

