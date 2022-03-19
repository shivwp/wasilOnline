<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Validator;
use Auth;
class TestimonialsApiController extends Controller
{
    public function index(Request $request)
    {
        $Testimonials=Testimonials::all();

        if(count($Testimonials) > 0 ){
            foreach($Testimonials as $key => $val){
                    $val->image =   url('testimonials/' . $val->image);
                    if(!empty($request->language) && ($request->language == "arabic")){
                    $val->title =  $val->arab_title;
                    $val->description =  $val->arab_description;
                    $val->long_description =  $val->arab_long_description;
                }
            }
            return response()->json(['status' => true, 'message' => "Success",  'testimonials' => $Testimonials], 200);
        }
        else{
            return response()->json(['status' => false, 'message' => "data not found",  'testimonials' => []], 200);
        }
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request)
    {
    }

}

