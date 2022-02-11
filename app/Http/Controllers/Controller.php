<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\VendorSetting;
use App\Models\PageMeta;
use App\Models\Country;
use App\Models\City;
use App\Models\State;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getVendorMeta($id, $name="", $status = false)
    {
        if (empty($name)) {
            // 
            $vendor_data = VendorSetting::where('vendor_id', $id)->select('name', 'value')
                ->pluck('value', 'name')
                ->toArray();
            return $vendor_data;
        }
        else {
            //
            if ($status) {
                // 
                $vendor_data = VendorSetting::where('vendor_id', $id)->where('name', $name)->first();
                if (!empty($vendor_data))
                    return $vendor_data->value;
                else
                    return "";
            }
            else {
                $vendor_data = VendorSetting::where('vendor_id', $id)->where('name', $name)->select('name', 'value')
                    ->pluck('value', 'name')
                    ->toArray();
                return $vendor_data;
            }
        }
    }
    public function getPageMeta($id, $key="")
    {
        if (empty($key)) {
            // 
            $PageMeta = PageMeta::where('page_id', $id)->select('key', 'value')
                ->pluck('value', 'key')
                ->toArray();
            return $PageMeta;
        }
        else {
            //
            if ($status) {
                // 
                $PageMeta = PageMeta::where('page_id', $id)->where('key', $key)->first();
                if (!empty($PageMeta))
                    return $PageMeta->value;
                else
                    return "";
            }
            else {
                $PageMeta = PageMeta::where('page_id', $id)->where('key', $key)->select('key', 'value')
                    ->pluck('value', 'key')
                    ->toArray();
                return $PageMeta;
            }
        }
    }
    public function get_country($id)
    {
        $country_name= Country::where($id,'=','id')->first();
        return  $country_name->name;
    }
    public function get_state($id)
    {
        $state_name= Country::where($id,'=','id')->first();
    }
    public function get_city($id)
    {
        $city_name= Country::where($id,'=','id')->first();
    }

     
}
