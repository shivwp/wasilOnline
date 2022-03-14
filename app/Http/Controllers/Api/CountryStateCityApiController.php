<?php



namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Country;

use App\Models\State;

use App\Models\City;

use App\Http\Traits\CurrencyTrait;

use Validator;

use Auth;

class CountryStateCityApiController extends Controller

{

    use CurrencyTrait;

    public function allCountries(Request $request)
    {
        $Country = Country::all();
        if(count($Country) > 0){
            return response()->json(['status' => true, 'message' => "success", 'country' => $Country], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "data not found", 'country' => []], 200); 

        }
    }

   
    public function allStates(Request $request)
    {
        $States = State::all();
        if(count($States) > 0){
            return response()->json(['status' => true, 'message' => "success", 'state' => $States], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "data not found", 'state' => []], 200); 

        }
    }

    public function allCities(Request $request)
    {
        $City = City::all();
        if(count($City) > 0){
            return response()->json(['status' => true, 'message' => "success", 'city' => $City], 200);        
        }
        else{
            return response()->json(['status' => false, 'message' => "data not found", 'city' => []], 200); 

        }
    }



}

