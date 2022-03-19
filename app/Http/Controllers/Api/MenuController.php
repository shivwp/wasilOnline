<?php



namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Menu;



class MenuController extends Controller

{

    public function index(Request $request)
    {
        $menu = Menu::all();
        if(count($menu) > 0){

            if(!empty($request->language) && ($request->language = "arabic")){
                foreach($menu as $key => $val){
                    $menu[$key]['title'] = $val->arab_title;
                }
            }

            return response()->json(['status' => true, 'message' => "gift cards", 'data' => $menu], 200);
        }
        else{
            return response()->json(['status' => false, 'message' => "gift cards not found", 'data' => []], 200);
        }
    }
}

