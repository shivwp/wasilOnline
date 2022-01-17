<?php

namespace App\Helper;
use DB;
use App\BookingActivity;
use App\Models\LogActivity;
use Request;


class Helper
{
    public static function imageUpload($image,$path){

        $extention = $image->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $image->move($path, $filename);
        return $filename;
	}

    public static function multiImageUpload($images,$path){

        $multi = [];

            foreach ($images as $img) {
                $name = $img->getClientOriginalName();
                $img->move($path, $name);
                 $multi[] =  $name;
            }
            return $multi;
        
	}
    public static function addToLog($subject,$type='')
    {
        $log = [];
        $log['subject'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['type'] = $type;
        $log['ip'] = Request::ip();
        $log['agent'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        LogActivity::create($log);
    }


    public static function logActivityLists()
    {
        return LogActivity::latest()->get();
    }

}