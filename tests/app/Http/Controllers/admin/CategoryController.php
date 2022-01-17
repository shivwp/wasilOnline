<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['title'] = "CATEGORY";
        $d['buton_name'] = "ADD NEW";
        $category=Category::all();

        foreach($category as $key => $val){

            $categoryParent = Category::where('parent_id','!=',0)->where('id',$val->id)->first();

            if(!empty($categoryParent)){

                $Parent = Category::where('id','=',$categoryParent->parent_id)->first();

                $category[$key]['parent_name'] = !empty($Parent->title) ? $Parent->title : '';

            }

        }

        $d['category'] = $category;

        return view('admin/category/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "CATEGORY";
        $d['parent'] = Category::where('parent_id','=', 0)->get();
        return view('admin/category/add',$d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $category = Category::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            // 'user_id'   => Auth::user()->id,
            'title'     => $request->input('title'),
            'parent_id'     => isset($request->parent_cat) ? $request->parent_cat : 0
            
        ]);
       
        
   $category->update();
    return redirect('/dashboard/category')->with('status', 'your data is updated');
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
        $d['category']=Category::findorfail($id);
        $d['title'] = "CATEGORY";
        $d['parent'] = Category::where('parent_id','=', 0)->get();
        return view('admin/category/add',$d);
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
