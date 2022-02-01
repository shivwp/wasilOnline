<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newslatter;

class NewslatterApiController extends Controller
{
    public function store(Request $request)
    {
       $newslatter = Newslatter::create([
                    'email'             => $request->email,
                ]);
       if(!empty($newslatter)){
             return response()->json([ 'status'=> true , 'message' => "done", 'order' => $newslatter], 200);
        }else{
             return response()->json([ 'status'=> false ,'message' => "fail", 'order' => []], 200);
        }
    }
}
