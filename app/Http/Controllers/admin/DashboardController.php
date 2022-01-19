<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $d['order']=Order::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); 
        });
        $d['readyforship']=Order::where('status','=','ready to ship')->get();
        $d['shipped']=Order::where('status','=','shipped')->get();;
        $d['delivered']=Order::where('status','=','delivered')->get();;

        $ordermcount = [];
        $orderArr = [];
      
        
        $d['month'] =["Jan", "Feb", "Mar", "Apr", "May", "Jun","jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        $d['string'] = '"Jan", "Feb", "Mar", "Apr", "May", "Jun","jul", "Aug", "Sep", "Oct", "Nov", "Dec"';//implode(",",$d['month']);
     
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
       // dd( $orderArr);


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
