<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['title'] = "ATTRIBUTE";
        $d['buton_name'] = "ADD NEW";
        $d['attribute']=Attribute::all();
        return view('admin/attribute/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "ATTRIBUTE";
        return view('admin/attribute/add',$d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = Attribute::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            'name'     => $request->input('name')
             ]);
       
        
   $attribute->update();
    return redirect('/dashboard/attribute')->with('status', 'your data is updated');
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
        $d['attribute']=Attribute::findorfail($id);
        $d['title'] = "ATTRIBUTE";
        return view('admin/attribute/add',$d);
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
        $attribute =Attribute::where('id',$id)->first();
        if ($attribute != null) {
           $attribute->delete();
            return redirect('dashboard/attribute')->with('success', 'Student deleted successfully');
        }
    }
}
