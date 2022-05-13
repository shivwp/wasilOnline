<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBids;
use App\Models\User;

class BidController extends Controller
{
    public function index(Request $request){
      $d['title'] = "Bids";
      $d['buton_name'] = "ADD NEW";
      $bids = UserBids::orderBy('id','DESC');


        $pagination=10;
      if(isset($_GET['paginate'])){
          $pagination=$_GET['paginate'];
      }
     

      $d['bids'] = $bids->paginate($pagination)->withQueryString();

      foreach($d['bids'] as $key => $val){
        $user = User::where('id',$val->user_id)->first();
        $product = Productwhere('id',$val->product_id)->first();

      }

        return view('admin/bids/index',$d);

    }

     public function create(Request $request)
    { 

    }

     public function store(Request $request)
    { 

    }

    public function edit(Request $request)
    { 

    }
}
