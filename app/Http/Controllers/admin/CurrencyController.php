<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $d['title'] = "Currency";
        $d['buton_name'] = "ADD NEW";
        $currency=Currency::all();

        $d['currency'] = $currency;
         $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
         $q=Currency::select('*');
            if($request->search){
                $q->where('code', 'like', "%$request->search%");  
            }
             $d['currency']=$q->paginate($pagination)->withQueryString();
        
        return view('admin/currency/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "Add Currency";
        return view('admin/currency/add',$d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
       $currency = Currency::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            // 'user_id'   => Auth::user()->id,
            'name'     => $request->input('currency_name'),
            'code'     => $request->input('currency_code'),
            'country_name'     => $request->input('country_name'),
            'country_code'     => $request->input('country_code'),
            'compare_by'     => $request->input('compare'),
            'compare_rate'     => $request->input('compare_rate'),
            'status'     => $request->input('status'),
            
        ]);
       
        
   $currency->update();
    return redirect('/dashboard/currency')->with('status', 'your data is updated');
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
        $d['currency']=Currency::findorfail($id);
        $d['title'] = "Currency Edit";
        return view('admin/currency/add',$d);
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
       $currency =Currency::where('id',$id)->first();
       $currency->delete();
       return redirect('dashboard/currency')->with('success', 'Currency deleted successfully');
    }
}
