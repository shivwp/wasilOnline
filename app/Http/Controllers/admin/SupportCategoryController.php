<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Image;
use Intervention\Image\Exception\NotReadableException;
use Illuminate\Http\Request;
use App\Models\SupportCategory;
class SupportCategoryController extends Controller
{

    public function index (Request $request)
    {
        $d['title'] = "Support Category";
        $d['buton_name'] = "ADD NEW";
        $pagination=10;
        if(isset($_GET['paginate'])){
            $pagination=$_GET['paginate'];
        }
        $cat = SupportCategory::orderBy('id');
        $d['cat']=$cat->paginate($pagination)->withQueryString();
        return view('admin/support-category/index',$d);

    }

    public function create()
    {
        $d['title'] = "Support Category";
        $d['buton_name'] = "ADD NEW";
        return view('admin/support-category/add',$d);
    }

    public function store(Request $request)
    {
        
       $SupportCategory = SupportCategory::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'title'         => $request->input('title')
        ]);

        if($request->hasfile('category_image'))
        {
            $file = $request->file('category_image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('support-category/', $filename);
                $SupportCategory->update([
                    'category_image' => $filename
                ]);
                  
        }
        $SupportCategory->update();

        return redirect('/dashboard/support-category')->with('status', 'your data is updated');


    }

    public function show($id)
    {

    }

    public function edit($id)
    {

        $d['title'] = "Support Category";
        $d['buton_name'] = "ADD NEW";
        $d['cat'] = SupportCategory::findorfail($id);
        return view('admin/support-category/add',$d);

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        
       $SupportCategory =SupportCategory::findorfail($id);
       $SupportCategory->delete();
       return redirect('dashboard/support-category')->with('success', 'Category deleted successfully');

    }

}

