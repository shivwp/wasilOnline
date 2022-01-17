<?php



namespace App\Http\Controllers\admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Attribute;
use App\Models\AttributeValue;


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

        //$d['attribute']=Attribute::all();
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $d['attribute'] =Attribute::paginate($pagination)->withQueryString();

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

            'name'     => $request->input('name'),
            
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
         $d['attributeVal']=AttributeValue::findorfail($id);

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
        dd($request);
        $attr=Attribute::findorfail($id);
        $attribute = AttributeValue::updateOrCreate(['id' => $request->id],[
                    'attr_id'               =>$attr,
                    'attr_value_name'       => $request->input('attr_value')
         ]);
         \Helper::addToLog('Attribute value create or update');
        return redirect('/dashboard/attribute')->with('status', 'your data is updated');

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

    public function addvalue(Request $request,$id)
    {
          $d['attribute']=AttributeValue::all();
       return view('admin/attribute/show',['id' => $id]);

    }
    public function saveatrvalue(Request $request,$id)
    {
      $data = new AttributeValue();
      $data->attr_id = $id;
      $data->attr_value_name = $request->attr_value;
      $data->save();
 return redirect('dashboard/attribute');
    }


}

