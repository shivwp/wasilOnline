<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;

class HomepageApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $homepage=Homepage::first();

         $data = json_decode($homepage->content);

         if(!empty($data)){

            foreach($data->slider as $key => $val){
               $val->image = url('img/slider/' . $val->image);
               $val->banner_mobile = url('img/slider/' . $val->banner_mobile);
            }
            foreach($data->sale as $s_key => $s_val){
                $s_val->image = url('img/slider/' . $s_val->image);
            }
            $data->adv_img = url('img/slider/' . $data->adv_img);
            $data->banner_img = url('img/slider/' . $data->banner_img);
            return response()->json(['status' => true, 'message' => "Home Page", 'home' => $data], 200);

         }
         else{
            return response()->json(['status' => false, 'message' => "Home Page", 'home' => []], 200);
    
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
