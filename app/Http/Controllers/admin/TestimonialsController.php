<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Testimonials;



class TestimonialsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $d['title'] = " Testimonials";
        $d['buton_name'] = "ADD NEW";
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['testimonials'] =Testimonials::paginate($pagination)->withQueryString();
        return view('admin/testimonials/index',$d);
    }
    

    public function create()

    {

        $d['title'] = "Testimonials Add";

        return view('admin/testimonials/add',$d);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
       $Testimonials = Testimonials::updateOrCreate(
            [
                'id' => $request->id
            ],
            [

            'title'         => $request->input('title'),

            'description'         => $request->input('discription'),

            'long_description'         => $request->input('content'),

            'customer_name'     => $request->input('customer_name'),

            'designation'         =>  $request->input('designation'),
        ]);

        if($request->hasfile('image'))
          {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('testimonials', $filename);
            Testimonials::where('id',$Testimonials->id)->update([
                'image' => $filename
            ]);
          }



       // $Testimonials->update(['image'=>]);

    return redirect('/dashboard/testimonials')->with('status', 'your data is updated');

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

        $d['Testimonials']=Testimonials::findorfail($id);

        $d['title'] = "Testimonials Edit";

        return view('admin/testimonials/add',$d);

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

       $Testimonials =Testimonials::where('id',$id)->first();

        if ($Testimonials != null) {

           $Testimonials->delete();

            return redirect('dashboard/testimonials')->with('success', 'Student deleted successfully');

        }

    }

}

