<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['title'] = "MENU";
        $d['menu']=Menu::all();
        $d['buton_name'] = "ADD NEW";
         $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['menu'] =Menu::paginate($pagination)->withQueryString();
        return view('admin.menu.index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "MENU";
        return view('admin/menu/add',$d);
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
         $menu = Menu::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            'title'     => $request->input('title'),
            'position'     => $request->input('position'),
            'url'     => $request->input('url'),
            'parent'     => 0, 
        ]);
       
   $menu->update();
   $type='menu';
   \Helper::addToLog('MENU create or update', $type);
    return redirect('/dashboard/menus')->with('status', 'your data is updated');
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
        $d['title'] = "MENU";
        $d['menu']=Menu::findorfail($id);
        return view('admin/menu/add',$d);
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
        $pg=Menu::findOrFail($id);
         $pg->delete();
        \Helper::addToLog('MENU delete');
         return redirect('dashboard/menus');
    }
}