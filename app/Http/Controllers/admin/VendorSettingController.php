<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorSetting;
use App\Models\Setting;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\City;
use App\Models\ShippingMethod;
use App\Models\VendorShipping;
use App\Models\CityPriceVendor;
use Auth;
use Hash;
use Redirect;
use Validator;
use App\Models\Mails;
use App\Mail\OrderMail;
use Mail;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportVendor;
class VendorSettingController extends Controller
{
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
        if($request->search){
            $setting->where('first_name', 'like', "%$request->search%"); 
        }

        $data['setting']=$setting->paginate($pagination)->withQueryString();
        return view('admin.vendor-details.vendor-list',$data);

    }

     public function index2(Request $request)
    {

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
            //check method
            $data['avaliablesettings'] = Setting::pluck('value','name');
            
           //dd($data['setting']);
           $state = [2150,2151,2152,2153,2154,2155,2156,2157,2158];
           $data['city_list'] = City::whereIn('state_id',$state)->get();

           $stateCity =State::where('country_id','121')->get();
           foreach($stateCity as $s_k => $s_v){
            $city =City::select('city_id','city_name')->where('state_id',$s_v->state_id)->get();
            $stateCity[$s_k]['city'] = $city;
           }
           $data['stateCity'] = $stateCity;

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
            $this->savevalue($vendor_id,$key,$value);
        }
        dd('ssdfsffds');
        exit();

    }


    public function create()
    {

        $data['title'] = "Create Vendor";
        $data['countries'] = Country::get(["name", "id"]);
        $data['states'] = State::get(["state_name", "state_id"]);
        $data['cities'] = City::get(["city_name", "city_id"]);
         return view('admin.vendor-setting',$data);
    }



    public function store(Request $request)
    {
        //dd($request->citystatecountry);
        if(Auth::user()->roles->first()->title == 'Admin'){

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
            $user->cities()->sync($request->citystatecountry,[]);

        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){

            $vendor_id= Auth::user()->id;
            $role = 'Vendor';
            $vendor = User::where('id',$vendor_id)->first();
            DB::table('city_user')->where('user_id',$vendor_id)->delete();
            $vendor->cities()->sync($request->citystatecountry,[]);
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

        if(isset($data['free_shipping_is_applied']))

            $data['free_shipping_is_applied'] = "on";
        else
            $data['free_shipping_is_applied'] = "off";    

        if(isset($data['normal_shipping_is_applied']))

            $data['normal_shipping_is_applied'] = "on";
        else
            $data['normal_shipping_is_applied'] = "off";  
        if(isset($data['shipping_by_city_is_applied']))

            $data['shipping_by_city_is_applied'] = "on";
        else
            $data['shipping_by_city_is_applied'] = "off";    

        foreach ($data as $key => $value) {
            $this->savevalue($vendor_id,$key,$value);

        }

        $type='Vendor ';

        \Helper::addToLog('Vendor Settings Changes', $type);
        if(!empty($request->ship_city)){
            foreach($request->ship_city as $c_key => $c_val){
                CityPriceVendor::updateOrCreate([
                    'city_id'=>$c_val['city_id'],
                    'vendor_id'=>Auth::user()->id,
                    ], [
                        'vendor_id'=>Auth::user()->id,
                        'city_id'=>$c_val['city_id'],
                        'normal_price'=>!empty($c_val['admin_normal_price']) ? $c_val['admin_normal_price'] : 0,
                        'priority_price'=>!empty($c_val['admin_city_wise_price']) ? $c_val['admin_city_wise_price'] : 0,
                    ]); 
            }
        }

        if($role == "Admin") {
            return redirect('/dashboard/vendorsettings');

        }

        else {
            return back();
        }

    }


    public function approveVendor($id){

        $vendor = User::where('id',$id)->update([

            'is_approved' => 1

        ]);
        $vendor = User::where('id',$id)->first();
         //Approve Mail
             
         $basicinfo = [
            '{status}' =>  "approved",
         ];
        $mail_data = Mails::where('msg_category', 'vendor approve')->first();
        $msg = $mail_data->message;
        foreach($basicinfo as $key=> $info){
            $msg = str_replace($key,$info,$msg);
        }

        $config = ['from_email' => $mail_data->mail_from,
        "reply_email" => $mail_data->reply_email,
        'subject' => $mail_data->subject, 
        'name' => $mail_data->name,
        'message' => $msg,
        ];

        Mail::to($vendor->email)->send(new OrderMail($config));

        return Redirect::back()->with('status', 'Vendor Approved');


    }

    public function rejectVendor($id){

        User::where('id',$id)->update([
            'is_approved' => 2

        ]);
        $vendor = User::where('id',$id)->first();

        //Reject Mail
        $basicinfo = [
            '{status}' =>  "rejected",
         ];
        $mail_data = Mails::where('msg_category', 'vendor approve')->first();
        $msg = $mail_data->message;
        foreach($basicinfo as $key=> $info){
            $msg = str_replace($key,$info,$msg);
        }
        $config = ['from_email' => $mail_data->mail_from,
        "reply_email" => $mail_data->reply_email,
        'subject' => $mail_data->subject, 
        'name' => $mail_data->name,
        'message' => $msg,
        ];

        Mail::to($vendor->email)->send(new OrderMail($config));

        return Redirect::back()->with('status', 'Vendor Approved');


    }


    public function savevalue($vendor_id,$key,$value="") {
        $name=$key;
        // if($value != "") {
            if($key == 'citystatecountry' || $key == 'ship_city'){
                $setting =VendorSetting::updateOrCreate([
                    'vendor_id'=> $vendor_id,
    
                    'name'=>$key,
                ], [
                    'value'=>json_encode($value)
                ]);
            }
            else{
                $setting= VendorSetting::updateOrCreate([
                    'vendor_id'=> $vendor_id,

                    'name'=>$key,
                ], [
                    'value'=>$value
                ]);
            }
           

            $lastid =$setting->id;
            if($key == 'profile_img' ){ 

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

    }
    


    public function edit($id)
    {
        $vendor_id=$id;
        $data['vendor']=User::findorfail($id);

        $data['title'] = "Vendor-details";
        $data['setting']=VendorSetting::where('vendor_id', '=' , $id)->get();

        $data['data'] = $this->getVendorMeta($id);

        $stateCity =State::where('country_id','121')->get();
        foreach($stateCity as $s_k => $s_v){
         $city =City::select('city_id','city_name')->where('state_id',$s_v->state_id)->get();
         $stateCity[$s_k]['city'] = $city;
        }
        $data['stateCity'] = $stateCity;

        return view('admin.vendor-details.vendor-setting',$data);
    }


    public function update(Request $request, $id)
    {


    }

    public function importView(Request $request){
        return redirect('/dashboard/product');
      }
  
      public function importvendor(Request $request){
        $fileName = time().'_'.request()->importfile->getClientOriginalName();
          Excel::import(new ImportVendor, $request->file('importfile')->storeAs('product-csv', $fileName));
          return redirect()->back();
      }







    public function destroy($id)
    {
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



