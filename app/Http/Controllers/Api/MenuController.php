<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();

        if(count($menu) > 0){

            return response()->json(['status' => true, 'message' => "gift cards", 'data' => $menu], 200);
        }
        else{

            return response()->json(['status' => false, 'message' => "gift cards not found", 'data' => []], 200);

        }
    }
}
