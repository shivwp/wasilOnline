<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\GiftCard;
use DB;

class GiftCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['title'] = "Gift Card";
        $d['buton_name'] = "ADD NEW";
        $giftcard=GiftCard::all();

        $d['giftcard'] = $giftcard;

        return view('admin/gift-card/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "Create Gift Card";
        return view('admin/gift-card/add',$d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       $GiftCard = GiftCard::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            // 'user_id'   => Auth::user()->id,
            'title'             => $request->input('title'),
            'description'       => $request->input('description'),
            'amount'            => $request->input('amount'),
            'valid_days'        => $request->input('valid_days'),
            'status'        => $request->input('status'),
            
        ]);

         if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('giftcard/', $filename);
                   DB::enableQueryLog(); 
                GiftCard::where('id',$GiftCard->id)->update([

                    'image' => $filename
                ]);
            }
    return redirect('/dashboard/gift-card')->with('status', 'your data is updated');
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
        $d['GiftCard']=GiftCard::findorfail($id);
        $d['title'] = "Edit Gift Card";
        return view('admin/gift-card/add',$d);
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
       $category =Category::where('id',$id)->first();
        if ($category != null) {
           $category->delete();
            return redirect('dashboard/category')->with('success', 'Student deleted successfully');
        }
    }
}
