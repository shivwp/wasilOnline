<?php

namespace App\Http\Traits;

use App\Models\Currency;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

use AmrShawky\LaravelCurrency\Facade\Currency as CurrencyConvert;

trait CurrencyTrait {

    public function currencyFetch($code) {

        // return currency and codde

        $getCurrency = [];

        $currency = Currency::where('code',$code)->first();

        if(!empty($currency)){

            $getCurrency['sign'] = $currency->sign;

            $getCurrency['code'] = $currency->code;

        }

        return $getCurrency;

    }

    public function currencyConvert($code,$amount){

        $convertedCurrency = '';

        $currency = Currency::where('code',$code)->first();

        $defaultcurrency = Currency::where('is_default',1)->first();

        if($currency != null && $currency->is_default == 0){

         $convertedCurrency =    CurrencyConvert::convert()

            ->from($defaultcurrency->code)

            ->to($currency->code)

            ->amount($amount)

            ->get();

        return $convertedCurrency;

        }

        else{

           $convertedCurrency =  $amount;

           return $convertedCurrency;

        }



    }

    public function getCountry($id){
        $Country = Country::where('id',$id)->first();
        return $Country->name;

    }
    public function getstate($id){
        $State = State::where('state_id',$id)->first();
        return $State->state_name;

    }
    public function getCity($id){
        $City = City::where('city_id',$id)->first();
        return $City->city_name;

    }

   

}