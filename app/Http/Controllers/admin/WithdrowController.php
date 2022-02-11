<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdrow;
use App\Models\Setting;
use Redirect;
use Auth;

class WithdrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $d['title'] = "Withdrow Requests";
        $d['buton_name'] = "ADD NEW";
         $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['title'] = "Request Withdrow";
        $d['min_withdrwal_limit'] = Setting::where('id',89)->first();
        $d['max_withdrwal_limit'] = Setting::where('id',90)->first();
        $d['withdrwal_threshould'] = Setting::where('id',92)->first();
        $authUser = Auth::user();
        $d['authUser'] = $authUser;

        $withdrow =Withdrow::with('vendor');
        
        if(Auth::user()->roles->first()->title == 'Admin'){
            if(isset($request->status)){
                $withdrow->where('status',$request->status);
            }

            $d['withdrow'] =    $withdrow->paginate($pagination)->withQueryString();
        }
        else{

            if(isset($request->status)){
                $withdrow->where('status',$request->status);
            }

            $d['withdrow'] =    $withdrow->where('vendor_id',Auth::user()->id)->paginate($pagination)->withQueryString();

        }
       
        return view('admin/withdrow/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "Request Withdrow";
        $d['min_withdrwal_limit'] = Setting::where('id',66)->first();
        $d['max_withdrwal_limit'] = Setting::where('id',67)->first();
        $d['withdrwal_threshould'] = Setting::where('id',68)->first();
        $authUser = Auth::user();
        $d['authUser'] = $authUser;
        if($authUser->vendor_wallet >= $d['min_withdrwal_limit']->value){

            return view('admin/withdrow/add',$d);

        }
        else{

            return view('admin/withdrow/show',$d);

        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = Withdrow::create(
            [
            'vendor_id'     => Auth::user()->id,
            'amount'     => $request->input('amount'),
            'status'     => 0,
            'method'     => $request->input('method'),
            ]);

        return redirect('/dashboard/withdrow');
    
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
        
        // $d['title'] = "PAGE";
        // $d['tax']=Tax::findorfail($id);
        // return view('admin/tax/add',$d);
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

    public function approve(Request $request)
    {

        Withdrow::where('id',$request->id)->update([
            'status' => 1,
            'note'  => $request->comment
        ]);
        return Redirect::back()->with('status', 'Withdrow Request Approved');
       
    }

    public function reject(Request $request)
    {
        Withdrow::where('id',$request->id)->update([
            'status' => 2,
            'note'  => $request->comment

        ]);
        return Redirect::back()->with('status', 'Withdrow Request Rejected');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax = Withdrow::findOrFail($id);
        $tax->delete();
        return back();
    }
}
