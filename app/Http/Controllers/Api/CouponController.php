<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['title'] = "COUPON";
        $d['buton_name'] = "ADD NEW";
        $d['coupon']=Coupon::all();
        return view('admin/coupon/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "COUPON";
        return view('admin/coupon/add',$d);
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
        $coupon = Coupon::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            // 'user_id'   => Auth::user()->id,
            'code'     => $request->input('code'),
            'description'     => $request->input('description'),
            'discount_type'     => $request->input('discount_type'),
            'coupon_amount'     => $request->input('coupon_amount'),
            'allow_free_shipping'     => $request->input('allow_free_shipping'),
            'start_date'     => $request->input('start_date'),
            'expiry_date'     => $request->input('expiry_date'),
            'minimum_spend'     => $request->input('minimum_spend'),
            'maximum_spend'     => $request->input('maximum_spend'),
            'is_indivisual'     => $request->input('is_indivisual'),
            'exclude_sale_item'     => $request->input('exclude_sale_item'),
            'limit_per_coupon'     => $request->input('limit_per_coupon'),
            'limit_per_user'     => $request->input('limit_per_user'),
            'status'     => $request->input('status'),
        ]);
        $coupon->update();
    return redirect('/dashboard/coupon')->with('status', 'your data is updated');
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
        $d['title'] = "PAGE";
        $d['coupon']=Coupon::findorfail($id);
        return view('admin/coupon/add',$d);
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
         $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return back();
    }
}
