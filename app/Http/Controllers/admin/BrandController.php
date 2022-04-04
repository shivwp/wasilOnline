<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Models\Brand;



class BrandController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $d['title'] = "Brand";

        $d['buton_name'] = "ADD NEW";

        $d['brand']=Brand::all();

         $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }

         $q=Brand::select('*');

            if($request->search){

                $q->where('title', 'like', "%$request->search%");  

            }

             $d['brand']=$q->paginate($pagination)->withQueryString();

        

        return view('admin/brand/index',$d);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $d['title'] = "Brand";

        return view('admin/brand/add',$d);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
      //  dd($request);

        $page = Brand::updateOrCreate(

            [

                'id' => $request->id

            ],

            [

            // 'user_id'   => Auth::user()->id,

            'title'     => $request->input('title'),
            'arabic_title'     => $request->input('arab_title')

            

        ]);

       

        

   $page->update();

    return redirect('/dashboard/brand')->with('status', 'your data is updated');

    

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

        

        $d['title'] = "Brand";

        $d['brand']=Brand::findorfail($id);

        return view('admin/brand/add',$d);

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

        $tax = Brand::findOrFail($id);

        $tax->delete();

        return back();

    }

}

