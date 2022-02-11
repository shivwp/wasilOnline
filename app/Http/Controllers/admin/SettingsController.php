<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

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
        // dd($request);
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

        $setting['logo'] = '';
        $setting['value_banner'] = '';
        $setting['top_banner'] = '';
        $setting['arrival_banner'] = '';
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

            if($value)
            Setting::updateOrCreate([
                        'name'=>$key,
                    ], [
                        'value'=>$value
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
