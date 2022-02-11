<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorSetting;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\City;
use Auth;
use Hash;
use Redirect;
use Validator;

class VendorSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 
     public function index(Request $request)

    {
        $data['title'] = "Vendors";
        $data['buton_name'] = "Add New";

         $pagination=10;                   
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }

        $setting = Role::where('title', 'Vendor')->first()->users();
        
        if($request->status){

         $setting->where('is_approved', $request->status);   

        }

        $data['setting'] =  $setting->paginate($pagination)->withQueryString();

        // $data['setting']=Role::where('title', 'Vendor')->first()->users()->paginate($pagination)->withQueryString();
       

        return view('admin.vendor-details.vendor-list',$data);
        
    }
     public function index2(Request $request)
    {
        // 
        $vender_id = Auth::user()->id;
        $data['title'] = "Vendor-settings";
        $data['setting']=VendorSetting::where('vendor_id', '=' , $vender_id)->first();
        $data['vendor_details']=VendorSetting::where('vendor_id', '=' , $vender_id)->pluck('value', 'name');
        $data['data'] = $this->getVendorMeta($vender_id);
        $data['countries'] = Country::get(["name", "id"]);
        
        if(isset($data['vendor_details']['country']) && !empty($data['vendor_details']['country'])){

            $data['states'] = State::where("country_id",$data['vendor_details']['country'])->get(["state_name", "state_id"]);
        }
        else{

             $data['states'] = State::where("country_id",$request->country_id)->get(["state_name", "state_id"]);
            }

            if(isset($data['vendor_details']['state']) && !empty($data['vendor_details']['state'])){
   
                 $data['cities'] = City::where("state_id",$data['vendor_details']['state'])->get(["city_name", "city_id"]);
   
            }
            else{
                $data['cities'] = City::where("state_id",$request->state_id)->get(["city_name", "city_id"]);
            }
           //dd($data['setting']);
        return view('admin.vendor-setting',$data);
    }
    public function index3()
    {
        $data['title'] = "Vendor-settings";

        return view('admin.vendor-setting-admin',$data);
    }
    public function vendoradd(Request $request)
    {
         $data['title'] = "Add-vendor";
         return view('admin.vendor-details.add-vendor',$data);
    }

     public function vendoradded(Request $request)
    {
        
    

        $us = User::where("email", $request->email)->first();

       
            $user = new User;
          
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;

            if($request->password){
                $pass = Hash::make($request->password);
                $user->password = $pass;
            }
            $user->email = $request->email;

            $user->phone = $request->phone;

            $user->save();

            $success['token'] =  $user->createToken('API Token')->accessToken;

            $user->roles()->sync(3);

            $vendor_id=$user->id;
             
            $vendordetail = array('store_url'=> $request->store_url,'store_name'=> $request->store_name);

               foreach ($vendordetail as $key => $value) {
                   // code...
                 $this->savevalue($vendor_id,$key,$value);
               }
        
       

        // return redirect()->route('dashboard.vendorsettings');
               dd('ssdfsffds');
               exit();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data['title'] = "Create Vendor";
        $data['countries'] = Country::get(["name", "id"]);
        $data['states'] = State::get(["state_name", "state_id"]);
        $data['cities'] = City::get(["city_name", "city_id"]);

         return view('admin.vendor-setting',$data);
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

        if(Auth::user()->roles->first()->title == 'Admin'){
            // isset($request->vender_id)
            $password = Hash::make($request->password);
            $user = User::updateOrCreate([
                'id'=>$request->vendor_id],[
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'email'         => $request->email,
                'password'      => $password,
            ]);
            
            $user->roles()->sync(3);
            $vendor_id=$user->id;
            $role = 'Admin';
        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){
            // 
            $vendor_id= Auth::user()->id;
            $role = 'Vendor';
        }

        $data = $request->except('_token');

        if(isset($data['selling']))
            $data['selling'] = 1;
        else
            $data['selling'] = 0;
        
        if(isset($data['product_publish']))
            $data['product_publish'] = 1;
        else
            $data['product_publish'] = 0;

        if(isset($data['feature_vendor']))
            $data['feature_vendor'] = 1;
        else
            $data['feature_vendor'] = 0;

        if(isset($data['notify']))
            $data['notify'] = 1;
        else
            $data['notify'] = 0;

        // dd($data);

        foreach ($data as $key => $value) {
            // 
            
            $this->savevalue($vendor_id,$key,$value);
        }

        $type='Vendor ';
        
        \Helper::addToLog('Vendor Settings Changes', $type);

        if($role == "Admin") {
            return redirect('/dashboard/vendorsettings');
        }
        else {
            return back();
        }

    }


    //  public function storedata(Request $request)
    // {
    //     //dd($request);
    //     $vendor_id= $request->id;
    //     $commision= VendorSetting::updateOrCreate([
    //     'vendor_id'=>$request->id,
    //     'commision' => $request->input('commision'),
    //         ]);
    //      \Helper::addToLog('Vendor settings change');
    //     return back();
    // }

    public function approveVendor($id){

        User::where('id',$id)->update([

            'is_approved' => 1
        ]);

        return Redirect::back()->with('status', 'Vendor Approved');


    }

    public function rejectVendor($id){

        User::where('id',$id)->update([

            'is_approved' => 2
        ]);

        return Redirect::back()->with('status', 'Vendor Approved');

        
    }

    public function savevalue($vendor_id,$key,$value="") {

        $name=$key;
        // $value=$value;
        // if($value != "") {
            $setting= VendorSetting::updateOrCreate([
                'vendor_id'=> $vendor_id,
                'name'=>$key,
            ], [
                'value'=>$value
            ]);

            $lastid =$setting->id;
            if($key == 'profile_img' ){ 
                // 
                $file=$value;
                $extention = $value->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('images/vendor/settings', $filename);
                VendorSetting::where('id',$lastid)->where('name','=','profile_img')->update([
                    'value' => $filename
                ]);
            }

            if( $key=='banner_img'){ 
                $file=$value;
                $extention = $value->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('images/vendor/settings', $filename);
                VendorSetting::where('id',$lastid)->where('name','=','banner_img')->update([
                    'value' => $filename
                ]);
            }
        // }
    

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
        $vendor_id=$id;
        $data['vendor']=User::findorfail($id);

        $data['title'] = "Vendor-details";
        $data['setting']=VendorSetting::where('vendor_id', '=' , $id)->get();
        
        $data['data'] = $this->getVendorMeta($id);
        //dd($data['data']);
        return view('admin.vendor-details.vendor-setting',$data);
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

   public function countrylist()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('admin.address.add', $data);
    }
    public function fetchState(Request $request)
    {

        $data['states'] = State::where("country_id",$request->country_id)->get(["state_name", "state_id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["city_name", "city_id"]);
        return response()->json($data);
    }

}
