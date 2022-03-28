<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\PageMeta;


class HomepageController extends Controller
{

    public function index()
    {



    }

    public function create()
    {

    }


    public function store(Request $request)
    {

        //dd($request);

         $d['title'] = "Homepage";

        $content = [];

        $thumbbanner=[];

        $thumb_mob_banner=[];
        $thumb=[];

        if($request->has('slider_image')) {

            $slider_image=$request->slider_image;

            $loop = count($slider_image);

            $banner=$request->banner;
            if($slider_image) {

                for ($i=0; $i <$loop ; $i++) { 

                    if(!empty($slider_image[$i]['image'])) {

                        $thumb[$i]['image'] = $this->uploadImage($slider_image[$i]['image'], 'image');

                    } else {

                        $thumb[$i]['image']=$slider_image[$i]['image_prev'];

                    }
                    if(!empty($slider_image[$i]['banner_mobile'])) {

                        $thumb[$i]['banner_mobile'] = $this->uploadImage($slider_image[$i]['banner_mobile'], 'banner_mobile');

                    } else {

                        $thumb[$i]['banner_mobile']=$slider_image[$i]['banner_mobile_prev'];

                    }
                    if(!empty($slider_image[$i]['slider_image_arabic'])) {

                        $thumb[$i]['slider_image_arabic'] = $this->uploadImage($slider_image[$i]['slider_image_arabic'], 'slider_image_arabic');

                    } else {

                        $thumb[$i]['slider_image_arabic']=$slider_image[$i]['slider_image_arabic_prev'];

                    }
                    if(!empty($slider_image[$i]['banner_mobile_arabic'])) {

                        $thumb[$i]['banner_mobile_arabic'] = $this->uploadImage($slider_image[$i]['banner_mobile_arabic'], 'banner_mobile_arabic');

                    } else {

                        $thumb[$i]['banner_mobile_arabic']=$slider_image[$i]['banner_mobile_arabic_prev'];

                    }
                    $thumb[$i]['url']=$slider_image[$i]['url'];

                }

            }
           

        }
        

        if($request->has('banner')) {

            $banner=$request->banner;

            if($banner) {

                $i=0;

                foreach($banner as $k => $file) {

                    if(!empty($banner[$k]['banner_mobile'])) {

                        $name=uniqid().$banner[$k]['banner_mobile']->getClientOriginalName();

                        $banner[$k]['banner_mobile']->move('img/slider', $name);

                        $thumb[$i]['banner_mobile']=$name;

                    }

                    else {

                        $thumb[$i]['banner_mobile']=$file['image_banner'];

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
                }
                else{
                    $thumb_sale[$i]['image']=$file['sale_prev'];
                }
                if(!empty($file['image_arabic'])){
                    $name_arab=uniqid().$file['image_arabic']->getClientOriginalName();
                    $file['image_arabic']->move('img/slider', $name_arab);
                    $thumb_sale[$i]['arabic_image']=$name_arab;
                }
                else{
                    $thumb_sale[$i]['arabic_image']=$file['sale_arabic_prev'];
                }
                $thumb_sale[$i]['url']=$file['url'];
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
        else
        {
               $thumb_adv = $request->adv_img_prev;  

        }

        $arab_thumb_adv='';
        
        if($request->has('arab_adv_img')) {
            
          
            if($request->has('arab_adv_img')) {
                $file=$request->arab_adv_img;
                $arab_adv_name=uniqid().$file->getClientOriginalName();
                $file->move('img/slider', $arab_adv_name);
                $arab_thumb_adv = $arab_adv_name;
            }

        }
        else
        {
               $arab_thumb_adv = $request->arab_adv_img_prev;  

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

        $arab_thumb_banner='';
        if($request->has('arab_banner_img')) {

            $file_banner_arab=$request->arab_banner_img;
  
              if($request->has('arab_banner_img')) {
                  $name1_arab=uniqid().$file_banner_arab->getClientOriginalName();
  
                  $file_banner_arab->move('img/slider', $name1_arab);
                  $arab_thumb_banner = $name1_arab;
              }
  
          }
          else{
              $arab_thumb_banner = $request->arab_banner_img_prev; 
          }

       $content['content'] = $request->input('content');
       $content['slider'] = $thumb;
       $content['sale'] = $thumb_sale;
       $content['adv_img'] = $thumb_adv;
       $content['arab_adv_img'] = $arab_thumb_adv;
       
       $content['banner_img'] = $thumb_banner;
       $content['arab_banner_img'] = $arab_thumb_banner;
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

    public function uploadImage($file, $type) {

        // 

        // $name = time().'.'.$file->extension();

        $name = uniqid().$file->getClientOriginalName();

        $file->move('img/slider', $name);  

        return $name;

    }

    public function destroy($id)



    {



        //



    }



}



