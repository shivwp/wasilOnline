<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  
   $d['orders']=Order::count();
   $d['currdata'] = Order::select('*')
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();
    $d['percentCurrorder'] = ( $d['currdata']  / $d['orders'] )  * 100;
   
 

    $d['prevdata'] = Order::select('*')
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->count();
    $d['percentprevorder'] = ( $d['prevdata']  / $d['orders'] )  * 100;
    //dd( $d['prevdata']);
    $d['comporder']=$d['percentCurrorder'] - $d['percentprevorder'];
    $d['comporder1']=$d['percentprevorder'] - $d['percentCurrorder'];


    $role = 'user';
    $d['users']= User::with('roles')->whereHas("roles", function($q) use($role){ $q->where('title', '=', $role);})->count();
    
   
    $d['curruser'] = User::with('roles')->whereHas("roles", function($q) use($role){ $q->where('title', '=', $role);})
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();
    $d['percentCurruser'] = ( $d['curruser']  / $d['users'] )  * 100;
   
        
    $role = 'user';
    $d['prevuser'] = User::with('roles')->whereHas("roles", function($q) use($role){ $q->where('title', '=', $role);})
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->count();
     $d['percentprevuser'] = ( $d['prevuser']  / $d['users'] )  * 100;
    
    $d['compuser']=$d['percentCurruser'] - $d['percentprevuser'];
    $d['compuser1']=$d['percentprevuser'] - $d['percentCurruser'];
        
        $d['readyforships']=Order::where('status','=','ready to ship')->get();
        $d['delivereds']=Order::where('status','=','delivered')->get(); 
        $d['shippeds']=Order::where('status','=','shipped')->get(); 
        $role = 'user';
     
        //dd($d['users']);

                
        $d['order']=Order::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); 
        });
        // $post= Mjblog::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'));
        // $posts_by_y_m = $post->where('created_at',$post)->get();


        $d['readyforship']=Order::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->where('status','=','ready to ship')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); 
        });
        $d['shipped']=Order::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->where('status','=','shipped')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); 
        });
        $d['delivered']=Order::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->where('status','=','delivered')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); 
        });

        $ordermcount = [];
        $orderArr = [];

      
        
        
        $d['string'] = '"Jan", "Feb", "Mar", "Apr", "May", "Jun","jul", "Aug", "Sep", "Oct", "Nov", "Dec"';
        $d['string1'] = ' "Mon", "Tue", "Wed", "Thu", "Fri", "Sat","Sun"';
     
        foreach ( $d['order'] as $key => $value) {
            $ordermcount[(int)$key] = count($value);
        }
   
         for ($i = 1; $i <= 12; $i++) {
                if (!empty($ordermcount[$i])) {
                    $orderArr[] = $ordermcount[$i];
                    //$ordermonth=$orderArr[]
                } else {
                    $orderArr[]= 0;
                }
                
            }
        $d['orderArr'] = implode(",",$orderArr);

        $shipmcount = [];
        $shipArr = [];
        foreach ( $d['readyforship'] as $key => $value) {
            $shipmcount[(int)$key] = count($value);
        }
   
         for ($i = 1; $i <= 12; $i++) {
                if (!empty($shipmcount[$i])) {
                    $shipArr[] = $shipmcount[$i];
                    //$shipmcount=$shipArr[]
                } else {
                    $shipArr[]= 0;
                }
                
            }
        $d['shipArr'] = implode(",",$shipArr);

        $deliveredmcount = [];
        $deliveredArr = [];
        foreach ( $d['delivered'] as $key => $value) {
            $deliveredmcount[(int)$key] = count($value);
        }

   
         for ($i = 1; $i <= 12; $i++) {
                if (!empty($deliveredmcount[$i])) {
                    $deliveredArr[] = $deliveredmcount[$i];
                    //$deliveredmcount=$deliveredArr[]
                } else {
                    $deliveredArr[]= 0;
                }
                
            }
            $d['deliveredArr'] = implode(",",$deliveredArr);
 

           

      
        $date = Carbon::now()->startOfWeek();
        $daydata=[];

        for ($i = 0; $i < 7; $i++) {
         $day = Carbon::now()->startOfWeek()->addDay($i);
        
               $daydata[$day->format('D')] = Order::select(DB::raw("(COUNT(*)) as count"))->where('status','=','ready to ship')->whereDate('created_at',$day)->count(); 
            }
        $d['weekdata'] = implode(",",$daydata);
        
   


    $date = Carbon::now()->startOfWeek();
        $daydata=[];

        for ($i = 0; $i < 7; $i++) {
         $day = Carbon::now()->startOfWeek()->addDay($i);
        
               $daydata[$day->format('D')] = Order::select(DB::raw("(COUNT(*)) as count"))->where('status','=','delivered')->whereDate('created_at',$day)->count(); 
            }
        $d['weekdatad'] = implode(",",$daydata);



        
        $d['orderd']=Order::whereDate('created_at', Carbon::today())->count();
        //dd( $d['orderd']);
        

        return view('index2',$d);
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
