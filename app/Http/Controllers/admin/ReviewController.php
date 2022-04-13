<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Reviews;

use Auth;



class ReviewController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $d['title'] = "Reviews";

        $d['review']=Reviews::all();

        $pagination=10;

        if(isset($_GET['paginate'])){

            $pagination=$_GET['paginate'];

        }
         $q=Reviews::select('*');

         $user = Auth::guard('api')->user();
        if(Auth::user()->roles->first()->title == 'Admin'){
            $q=Reviews::select('*');
        }
        elseif(Auth::user()->roles->first()->title == 'Vendor'){
            $q=Reviews::select('*')->where('vendor_id',Auth::user()->id);
        }

            if($request->search){

                $q->where('name', 'like', "%$request->search%");  

            }

             $d['review']=$q->paginate($pagination)->withQueryString();

        

        return view('admin.reviews.index',$d);

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

        $review = Review::findOrFail($id);

        $review->delete();

        if(Auth::user()->roles->first()->title == 'Vendor'){

        $type='Review';

       \Helper::addToLog('Review Deleted', $type);

       }

        return back();

    }

}

