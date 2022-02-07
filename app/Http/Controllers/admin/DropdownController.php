<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class DropdownController extends Controller
{
    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('admin.address.add', $data);
    }
    public function fetchState(Request $request)
    {

        $data['states'] = State::where("country_id",$request->country_id)->get(["state_name", "state_id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["city_name", "city_id"]);
        return response()->json($data);
    }
}
