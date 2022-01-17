<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\AttributeValue;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['title'] = "Attribute Value";
        $d['buton_name'] = "ADD NEW";
        $attributeVal=AttributeValue::all();
        foreach($attributeVal as $key => $val){

            $attribute = Attribute::where('id','=',$val->attr_id)->first();
            $attributeVal[$key]['attribute'] = $attribute->name;

        }
        $d['attributeVal'] = $attributeVal;
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['attributeVal'] =AttributeValue::paginate($pagination)->withQueryString();
        return view('admin/attribute-value/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "Add Attribute Value";
        $d['attribute']=Attribute::all();

        return view('admin/attribute-value/add',$d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = AttributeValue::updateOrCreate(['id' => $request->id],[
                    'attr_id'               => $request->input('attrid'),
                    'attr_value_name'       => $request->input('attr_value')
         ]);
        return redirect('/dashboard/attribute-value')->with('status', 'your data is updated');
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
        $d['attributeVal']=AttributeValue::findorfail($id);
        $d['attribute']=Attribute::all();
        $d['title'] = "Attribute Value";
        return view('admin/attribute-value/add',$d);
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
