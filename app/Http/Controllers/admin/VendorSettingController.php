<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorSetting;
use App\Models\Role;
use App\Models\User;
use Auth;
use Hash;
use Redirect;

class VendorSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function country()
    {
        $data['countries'] = Country::get(["name","id"]);
        return view('country-state-city',$data);
    }
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
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
     public function index2()
    {
        // 
        $vender_id = Auth::user()->id;
        $data['title'] = "Vendor-settings";
        $data['setting']=VendorSetting::where('vendor_id', '=' , $vender_id)->first();

        $data['data'] = $this->getVendorMeta($vender_id);
        // dd($data);
        return view('admin.vendor-setting',$data);
    }
    public function index3()
    {
          $data['title'] = "Vendor-settings";
        return view('admin.vendor-setting-admin',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Create Vendor";
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
     //dd($request->vendor_id); 

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

}
