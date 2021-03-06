<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\State;
use App\Models\ShippingMethod;
use App\Models\City;
use App\Models\CityPrice;
class SettingsController extends Controller
{
    public function index()
    {
        $d["title"] = "Web-settings";
        $d["setting"] = Setting::pluck("value", "name");
        $ship_method = ShippingMethod::all();
        $title = [];
        foreach ($ship_method as $val) {
            $title[] = $val->title;
        }
        $d["arr"] = implode(",", $title);
        $d["ship_meth_1"] = ShippingMethod::where("id", 1)->first();
        $d["ship_meth_2"] = ShippingMethod::where("id", 2)->first();
        $d["ship_meth_3"] = ShippingMethod::where("id", 3)->first();
        // $state = [2150, 2151, 2152, 2153, 2154, 2155, 2156, 2157, 2158];
        // $d["city_list"] = City::whereIn("state_id", $state)->get();
        $data = [];
        $statedata = [];
        $state = State::where('country_id',121)->get();
        foreach($state as $s_key => $s_val){
            $statedata[$s_key]['state_id'] = $s_val->state_id;
            $statedata[$s_key]['state_name'] = $s_val->state_name;
            $city =  City::where("state_id", $s_val->state_id)->get();
            $citydata = [];
            foreach($city as $c_key => $c_val){
                $citydata[$c_key]['city_id'] = $c_val->city_id;
                $citydata[$c_key]['city_name'] = $c_val->city_name;
            }
            $statedata[$s_key]['city'] = $citydata;
        }

        $d['statedata'] = $statedata;
        $d['state'] = $state;

       // dd($statedata);
        return view("admin.site-setting", $d);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        //dd($request);
        $ship = explode(",", $request->ship_method);
        $setting["logo"] = "";
        $setting["value_banner"] = "";
        $setting["top_banner"] = "";
        $setting["arrival_banner"] = "";
        $setting["arab_value_banner"] = "";
        $setting["arab_top_banner"] = "";
        $setting["arab_arrival_banner"] = "";
        $setting["sale_with_us"] = "";
        $setting["arab_sale_with_us"] = "";
        $setting["all_cat_page_banner"] = "";
        $setting["arab_all_cat_page_banner"] = "";
        $setting["name"] = $request->name;
        $setting["country"] = $request->country;
        $setting["state"] = $request->state;
        $setting["city"] = $request->city;
        $setting["postcode"] = $request->postcode;
        $setting["help_number"] = $request->help_number;
        $setting["email"] = $request->email;
        $setting["pan_number"] = $request->pan_number;
        $setting["cin_number"] = $request->cin_number;
        $setting["gst_number"] = $request->gst_number;
        $setting["url"] = $request->url;
        $setting["address"] = $request->address;
        $setting["hour"] = $request->hour;
        $setting["instagram"] = $request->instagram;
        $setting["twitter"] = $request->twitter;
        $setting["facebook"] = $request->facebook;
        $setting["pinterest"] = $request->pinterest;
        $setting["facebook"] = $request->facebook;
        $setting["normal_price"] = $request->admin_normal_price;
        $setting["free_shipping_over"] = $request->free_shipping;
        $setting["free_shipping_is_applied"] =
            isset($request->free) && $request->free == "on" ? "on" : "off";
        $setting["normal_shipping_is_applied"] =
            isset($request->normal) && $request->normal == "on" ? "on" : "off";
        $setting["city_shipping"] =
            isset($request->city_shipping) && $request->city_shipping == "on"
                ? "on"
                : "off";
        $setting["approval"] =
            isset($request->approval) && $request->approval == "on" ? 1 : 0;
        $setting["value_banner_alt"] = $request->value_banner_alt;
        $setting["value_banner_url"] = $request->value_banner_url;
        $setting["top_banner_alt"] = $request->top_banner_alt;
        $setting["top_banner_url"] = $request->top_banner_url;
        $setting["arrival_banner_alt"] = $request->arrival_banner_alt;
        $setting["arrival_banner_url"] = $request->arrival_banner_url;
        $setting["sale_with_us_alt"] = $request->sale_with_us_alt;
        $setting["sale_with_us_url"] = $request->sale_with_us_url;
        $setting["all_cat_page_banner_alt"] = $request->all_cat_page_banner_alt;
        $setting["all_cat_page_banner_url"] = $request->all_cat_page_banner_url;
        foreach ($setting as $key => $value) {
            if ($key == "logo" && $request->hasfile("logo")) {
                $file = $request->logo;
                $extention = $file->getClientOriginalExtension();
                $filename = time() . "." . $extention;
                $file->move("images/logo", $filename);
                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if ($key == "value_banner" && $request->hasfile("value_banner")) {
                $file = $request->value_banner;
                $extention = $file->getClientOriginalExtension();
                $filename = time() . "." . $extention;
                $file->move("images", $filename);
                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if ($key == "top_banner" && $request->hasfile("top_banner")) {
                $file = $request->top_banner;
                $extention = $file->getClientOriginalExtension();
                $filename = time() . "." . $extention;
                $file->move("images", $filename);
                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "arrival_banner" &&
                $request->hasfile("arrival_banner")
            ) {
                $file = $request->arrival_banner;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "arab_value_banner" &&
                $request->hasfile("arab_value_banner")
            ) {
                $file = $request->arab_value_banner;

                $extention = $file->getClientOriginalExtension();
                $filename = time() . "." . $extention;
                $file->move("images", $filename);
                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "arab_top_banner" &&
                $request->hasfile("arab_top_banner")
            ) {
                $file = $request->arab_top_banner;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "arab_arrival_banner" &&
                $request->hasfile("arab_arrival_banner")
            ) {
                $file = $request->arab_arrival_banner;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if ($key == "sale_with_us" && $request->hasfile("sale_with_us")) {
                $file = $request->sale_with_us;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "arab_sale_with_us" &&
                $request->hasfile("arab_sale_with_us")
            ) {
                $file = $request->arab_sale_with_us;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "all_cat_page_banner" &&
                $request->hasfile("all_cat_page_banner")
            ) {
                $file = $request->all_cat_page_banner;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if (
                $key == "arab_all_cat_page_banner" &&
                $request->hasfile("arab_all_cat_page_banner")
            ) {
                $file = $request->arab_all_cat_page_banner;

                $extention = $file->getClientOriginalExtension();

                $filename = time() . "." . $extention;

                $file->move("images", $filename);

                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $filename,
                    ]
                );
            }

            if ($value) {
                Setting::updateOrCreate(
                    [
                        "name" => $key,
                    ],
                    [
                        "value" => $value,
                    ]
                );
            }
        }
        //dd($request->selling_city);

        //Shipping Method
        $c = 0; 
        $newarray = array();
        foreach($request->selling_city as $key => $val){
            $arraynew = array();
            $i = 0;
            $keyIndex = array_search('all', $val['city']);
            if(gettype($keyIndex) == 'boolean' && $keyIndex == false){

                 foreach($val['city'] as $key => $value){
                    if(isset($val['normal_price'][$key])){
                         $arraynew[$i]['city'] = $value;
                          $arraynew[$i]['normal_price'] = $val['normal_price'][$key];
                          $arraynew[$i]['property_price'] = $val['property_price'][$key];
                          $arraynew[$i]['state_id']        = $val['state_id'][$key];
                    }
                    $i++;
                }
            }
            else{
                foreach($val['city'] as $key => $value){
                    if(isset($val['normal_price'][$key])){
                          $arraynew[$i]['city'] = $value;
                          $arraynew[$i]['normal_price'] = $val['normal_price'][$keyIndex];
                          $arraynew[$i]['property_price'] = $val['property_price'][$keyIndex];
                          $arraynew[$i]['state_id']        = $val['state_id'][$key];                    }
                    $i++;
                }
            }

                
            $newarray[$c] = $arraynew;
            $c++;   
            
        }
        //dd($newarray);
        foreach($newarray as $new_k => $new_val){
           foreach($new_val as $sub_key => $sub_val){
            CityPrice::updateOrCreate(
                [
                    "state_id" => $sub_val["state_id"],
                    "city_id" => $sub_val["city"],
                ],
                [
                    "city_id" => $sub_val["city"],

                    "normal_price" => !empty($sub_val["normal_price"])
                        ? $sub_val["normal_price"]
                        : 0,

                    "priority_price" => !empty($sub_val["property_price"])
                        ? $sub_val["property_price"]
                        : 0,
                ]
            );

           }
        }
        // foreach ($request->city as $c_key => $c_val) {
        //     CityPrice::updateOrCreate(
        //         [
        //             "city_id" => $c_val["city_id"],
        //         ],
        //         [
        //             "city_id" => $c_val["city_id"],

        //             "normal_price" => !empty($c_val["admin_normal_price"])
        //                 ? $c_val["admin_normal_price"]
        //                 : 0,

        //             "priority_price" => !empty($c_val["admin_city_wise_price"])
        //                 ? $c_val["admin_city_wise_price"]
        //                 : 0,
        //         ]
        //     );
        // }

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
        $d["title"] = "Web-settings";

        $d["setting"] = Setting::all();

        //  dd($d['setting']);

        return view("admin.site-setting", $d);
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