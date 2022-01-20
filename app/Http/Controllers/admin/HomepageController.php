<?php



namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\PageMeta;





class HomepageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        // $d['title'] = "HOMEPAGE";

        // $d['buton_name'] = "ADD NEW";

        // $d['homepage']=Homepage::all();

        // return view('admin/homepage/index',$d);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        //dd(gettype($request->sale_image[1]['image']));
        $d['title'] = "Homepage";
        $content = [];

        $thumb=[];
       
        if($request->has('slider_image')) {
          $files=$request->slider_image;
            if($files) {
                $i=0;
              foreach($files as $file){
                if(!empty($file['image'])){
                    $name=uniqid().$file['image']->getClientOriginalName();
                    $file['image']->move('img/slider', $name);
                    $thumb[$i]['image']=$name;
                    $thumb[$i]['url']=$file['url'];
                   // $i++;
                }
                else{
                    $thumb[$i]['image']=$file['image_prev'];
                    $thumb[$i]['url']=$file['url'];
                  

                }
                $i++;
              }
            }
        }
        $thumb_sale=[];
      
        if($request->has('sale_image')) {
          $files=$request->sale_image;
            if($files) {
                $i=0;
              foreach($files as $file){
                if(!empty($file['image'])){
                    $name=uniqid().$file['image']->getClientOriginalName();
                    $file['image']->move('img/slider', $name);
                    $thumb_sale[$i]['image']=$name;
                    $thumb_sale[$i]['url']=$file['url'];
                }
                else{
                    $thumb_sale[$i]['image']=$file['sale_prev'];
                    $thumb_sale[$i]['url']=$file['url'];
                }
                $i++;
              }
            }
        }

        $thumb_adv='';
       
        if($request->has('adv_img')) {
          $file=$request->adv_img;
            if($request->has('adv_img')) {
                $name=uniqid().$file->getClientOriginalName();
                $file->move('img/slider', $name);
                $thumb_adv = $name;
            }
        }
        else{
               $thumb_adv = $request->adv_img_prev;  
            }


        $thumb_banner='';
       
        if($request->has('banner_img')) {
          $file_banner=$request->banner_img;
            if($request->has('banner_img')) {
                $name1=uniqid().$file_banner->getClientOriginalName();
                $file_banner->move('img/slider', $name1);
                $thumb_banner = $name1;
            }
        }
         else{
               $thumb_banner = $request->banner_img_prev;  
            }
       $content['content'] = $request->input('content');
       $content['slider'] = $thumb;
       $content['sale'] = $thumb_sale;
       $content['adv_img'] = $thumb_adv;
       $content['banner_img'] = $thumb_banner;
        $homepage = Homepage::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            'title'     => $request->input('title'),
            'content'     => json_encode($content),
        ]);
        $metaarray=[
            'Pagemeta_title'=>$request->input('page_title'),
            'Pagemeta_details'=>$request->input('page_details'),
            'new_product_url'=>$request->input('new_product_url'),
            'best_seller_url'=>$request->input('best_seller_url'),

        ];
        foreach($metaarray as $key=> $vl){
            if(!empty($vl)){
                $homepage= PageMeta::where('page_id','=',$request->id)->updateOrCreate([
                'page_id'=> $request->id,
                'key'=>$key,

            ], [
                'value'=>$vl
            ]);
            }
        }
        
    return redirect('dashboard/homepage/1/edit');

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
        $d['homepage']=Homepage::findorfail($id);
        $homepage_content=Homepage::findorfail($id);
        $d['homepage_content'] = json_decode($homepage_content);
        $page_id =$id;
        $d['title'] = "Homepage";
        $d['setting']=PageMeta::where('page_id', '=' , $id)->first();
        $d['data'] = $this->getPageMeta($page_id);
        return view('admin/homepage/add',$d);
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

