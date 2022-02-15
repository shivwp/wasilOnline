<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageMeta;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $d['title'] = "PAGE";
        $d['buton_name'] = "ADD NEW";
        $d['page']=Page::all();
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $q=Page::select('*');
            if($request->search){
                $q->where('title', 'like', "%$request->search%");  
            }
             $d['page']=$q->paginate($pagination)->withQueryString();
       
        return view('admin/page/index',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['title'] = "PAGE";
        return view('admin/page/add',$d);
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
        $page = Page::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
            // 'user_id'   => Auth::user()->id,
            'title'     => $request->input('title'),
            'content'     => $request->input('content'),
            
        ]);
        $metaarray=[

            'Pagemeta_title'=>$request->input('page_title'),

            'Pagemeta_details'=>$request->input('page_details'),


        ];
        foreach($metaarray as $key=> $vl){
            if(!empty($vl)){
                $homepage= PageMeta::where('page_id','=',$request->id)->updateOrCreate([
                'page_id'=> $page->id,
                'key'=>$key,

            ], [
                'value'=>$vl
            ]);
            }
        }
       
        
   $page->update();
    return redirect('/dashboard/pages')->with('status', 'your data is updated');
    
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
        $d['page']=Page::findorfail($id);
        $page_id =$id;
         $d['setting']=PageMeta::where('page_id', '=' , $id)->first();
        $d['data'] = $this->getPageMeta($page_id);
        return view('admin/page/add',$d);
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
        $page = Page::findOrFail($id);
        $page->delete();
        return back();
    }
}
