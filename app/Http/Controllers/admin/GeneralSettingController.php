<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $d['title'] = "General-settings";
         $settings = Setting::all();
         $setting = [];
         foreach ($settings as $key => $value) {
             // code...
            $setting[$value->name] = $value->value;
         }
         $d['setting'] = $setting;

         // dd($d['setting']);
         return view('admin.general-setting.index',$d);
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

        $d['title'] = "General settings";
        // dd($request);
        $name= $request->name;
        $value=$request->name;
         
        $data = $request->except('_token');
        if(isset($data['vendor_approval']))
            $data['vendor_approval'] = 1;
        else
            $data['vendor_approval'] = 0;
        
        if(isset($data['product_approval']))
            $data['product_approval'] = 1;
        else
            $data['product_approval'] = 0;

        foreach ($data as $key => $value) {
           
            // if(isset($value)){
                $setting= Setting::updateOrCreate(['name'=>$key],[
                    'value'=> $value //()?$value:null
                ]);   
            // }
        }

        // $d['setting'] = Setting::all();
       
        return redirect()->route('dashboard.general-setting.index');
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
