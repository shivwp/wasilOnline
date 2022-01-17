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

         $d['setting']=Setting::all();

        //  dd($d['setting']);

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
         $mailData=['host' => $request->host,

          'port' => $request->port,

          'encrypt' =>$request->encrypt,

          'name'=>$request->sname,

          'email'=>$request->semail,

          'password'=>$request->password];
            for($i=0;$i<17;$i++){
            $name="name_".$i;
            $value="value_".$i;
            $id="id_".$i;
            if($request->has($name) && $request->has($value)){
            if($request->file($value)){
            $setting= Setting::updateOrCreate(['id'=>$request->$id],[
            'name'=>$request->$name,
            'value'=>$request->file($value)->move('logo',uniqid().$request->file($value)->getClientOriginalName())

            ]); 
            }else{
            $setting= Setting::updateOrCreate(['id'=>$request->$id],[
            'name'=>$request->$name,
            'value'=>$request->$value
            ]);   
            } 
            }
            if($i==14){
              $setting= Setting::updateOrCreate(['id'=>$request->$id],[
                'name'=>$request->$name,
                'value'=>json_encode($mailData)
                //json_encode(['mail_type'=>$mailtype,'mail_data'=>$mailData])
    
                ]); 
            } 
        }
        $mailData=null;
        // if($request->mail=="smtp"){

          // $mailtype=$request->mail;

          // }elseif($request->mail=="sendmail"){
          // $mailtype=$request->mail;
          // }
       



       return back();

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
