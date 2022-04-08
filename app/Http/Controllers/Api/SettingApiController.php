<?php



namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Setting;



class SettingApiController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    {
         $setting=Setting::pluck('value','name');
        if(count($setting) > 0 ){
            if(!empty($setting['arab_value_banner'])){
            $setting['arab_value_banner'] = url('images/' . $setting['arab_value_banner']);
            }
            if(!empty($setting['arab_top_banner'])){
                $setting['arab_top_banner'] = url('images/' . $setting['arab_top_banner']);
            }
            if(!empty($setting['arab_arrival_banner'])){
                $setting['arab_arrival_banner'] = url('images/' . $setting['arab_arrival_banner']);
            }
            if(!empty($setting['sale_with_us'])){
                $setting['sale_with_us'] = url('images/' . $setting['sale_with_us']);
            }
            if(!empty($setting['arab_sale_with_us'])){
                $setting['arab_sale_with_us'] = url('images/' . $setting['arab_sale_with_us']);
            }
            if(!empty($setting['all_cat_page_banner'])){
                $setting['all_cat_page_banner'] = url('images/' . $setting['all_cat_page_banner']);
            }
            if(!empty($setting['arab_all_cat_page_banner'])){
                $setting['arab_all_cat_page_banner'] = url('images/' . $setting['arab_all_cat_page_banner']);
            }
            
            unset($setting['city']);
            return response()->json(['status' => true, 'message' => "Success",  'setting' => $setting], 200);
        }

        else{
            return response()->json(['status' => false, 'message' => "data not found",  'settings' => []], 200);
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

