<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Setting;

use App\Models\ShippingMethod;

class SettingsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        $d['title'] = "Web-settings";



         $d['setting']=Setting::pluck('value', 'name');



         $ship_method = ShippingMethod::all();

            $title = [];

         foreach($ship_method as $val){
            $title[] = $val->title;
         }



         $d['arr'] = implode(",",$title);

         $d['ship_meth_1'] = ShippingMethod::where('id',1)->first();

         $d['ship_meth_2'] = ShippingMethod::where('id',2)->first();

         $d['ship_meth_3'] = ShippingMethod::where('id',3)->first();



         // dd($d['setting']);



        return view('admin.site-setting',$d);

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

         $ship = explode(",",$request->ship_method);

        //  $mailData=['host' => $request->host,



        //   'port' => $request->port,



        //   'encrypt' =>$request->encrypt,



        //   'name'=>$request->sname,



        //   'email'=>$request->semail,



        //   'password'=>$request->password];

        //     for($i=0;$i<17;$i++){

        //     $name="name_".$i;

        //     $value="value_".$i;

        //     $id="id_".$i;

        //     if($request->has($name) && $request->has($value)){

        //     if($request->file($value)){

        //     $setting= Setting::updateOrCreate(['id'=>$request->$id],[

        //     'name'=>$request->$name,

        //     'value'=>$request->file($value)->move('logo',uniqid().$request->file($value)->getClientOriginalName())



        //     ]); 

        //     }else{

        //     $setting= Setting::updateOrCreate(['id'=>$request->$id],[

        //     'name'=>$request->$name,

        //     'value'=>$request->$value

        //     ]);   

        //     } 

        //     }

        //     if($i==14){

        //       $setting= Setting::updateOrCreate(['id'=>$request->$id],[

        //         'name'=>$request->$name,

        //         'value'=>json_encode($mailData)

        //         //json_encode(['mail_type'=>$mailtype,'mail_data'=>$mailData])

    

        //         ]); 

        //     } 

        // }

        // $mailData=null;

        // // if($request->mail=="smtp"){



        //   // $mailtype=$request->mail;



        //   // }elseif($request->mail=="sendmail"){

        //   // $mailtype=$request->mail;

        //   // }


//dd($request);
        $setting['logo'] = '';

        $setting['value_banner'] = '';

        $setting['top_banner'] = '';

        $setting['arrival_banner'] = '';
        $setting['arab_value_banner'] = '';
        $setting['arab_top_banner'] = '';
        $setting['arab_arrival_banner'] = '';
        $setting['sale_with_us'] = '';
        $setting['arab_sale_with_us'] = '';
        $setting['all_cat_page_banner'] = '';
        $setting['arab_all_cat_page_banner'] = '';

        $setting['name'] = $request->name;

        $setting['country'] = $request->country;

        $setting['state'] = $request->state;

        $setting['city'] = $request->city;

        $setting['postcode'] = $request->postcode;

        $setting['help_number'] = $request->help_number;

        $setting['email'] = $request->email;

        $setting['pan_number'] = $request->pan_number;

        $setting['cin_number'] = $request->cin_number;

        $setting['gst_number'] = $request->gst_number;

        $setting['url'] = $request->url;

        $setting['address'] = $request->address;

        $setting['hour'] = $request->hour;

        $setting['instagram'] = $request->instagram;

        $setting['twitter'] = $request->twitter;

        $setting['facebook'] = $request->facebook;

        $setting['pinterest'] = $request->pinterest;
        $setting['approval'] = isset($request->approval) && ($request->approval == "on") ? 1 : 0 ;

        

        foreach ($setting as $key => $value) {

           

            if($key == 'logo'  && $request->hasfile('logo')){ 

                // 

                $file=$request->logo;

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images/logo', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

            

            if($key == 'value_banner'   && $request->hasfile('value_banner')){ 

      

                $file=$request->value_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

               if($key == 'top_banner'   && $request->hasfile('top_banner')){ 

      

                $file=$request->top_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

               if($key == 'arrival_banner'   && $request->hasfile('arrival_banner')){ 

      

                $file=$request->arrival_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

            if($key == 'arab_value_banner'   && $request->hasfile('arab_value_banner')){ 

      

                $file=$request->arab_value_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

            if($key == 'arab_top_banner'   && $request->hasfile('arab_top_banner')){ 

      

                $file=$request->arab_top_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

            if($key == 'arab_arrival_banner'   && $request->hasfile('arab_arrival_banner')){ 

      

                $file=$request->arab_arrival_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

            if($key == 'sale_with_us'   && $request->hasfile('sale_with_us')){ 

      

                $file=$request->sale_with_us;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }


            if($key == 'arab_sale_with_us'   && $request->hasfile('arab_sale_with_us')){ 

      

                $file=$request->arab_sale_with_us;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }

             if($key == 'all_cat_page_banner'   && $request->hasfile('all_cat_page_banner')){ 

      

                $file=$request->all_cat_page_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }


            if($key == 'arab_all_cat_page_banner'   && $request->hasfile('arab_all_cat_page_banner')){ 

      

                $file=$request->arab_all_cat_page_banner;

      

                $extention = $file->getClientOriginalExtension();

                $filename = time().'.'.$extention;

                $file->move('images', $filename);

                Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$filename

                    ]);

            }




            if($value)

            Setting::updateOrCreate([

                        'name'=>$key,

                    ], [

                        'value'=>$value

                    ]);

        }



        //Shipping Method



        if(isset($request->free) && $request->free == "on"){

            ShippingMethod::where('id',1)->update([

                'is_available' => 1

            ]);

        }

        else{

            ShippingMethod::where('id',1)->update([

                'is_available' => 0

            ]);

        }

        if(isset($request->fixed) && $request->fixed == "on"){

            ShippingMethod::where('id',2)->update([

                'is_available' => 1

            ]);

        }

        else{

            ShippingMethod::where('id',2)->update([

                'is_available' => 0

            ]);

        }

        if(isset($request->wasil) && $request->wasil == "on"){

            ShippingMethod::where('id',3)->update([

                'is_available' => 1

            ]);

        }

        else{

            ShippingMethod::where('id',3)->update([

                'is_available' => 0

            ]);

        }

           

              

        // $lastid =$setting->id;   

        // $setting->save();



       return back();



    }







    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */





    public function language(Request $request)

    {

         $d['title'] = "Web-settings";



         $d['setting']=Setting::all();



        //  dd($d['setting']);



        return view('admin.site-setting',$d);



    }





    public function currency(Request $request)

    {

        //

    }



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

