<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

 
 class ExportUser implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $User =  User::all();
        // echo '<pre>';
        // print_r($User);
        // die;

        foreach($User as $key => $val){

            foreach($val->roles as $role_k => $role_v){

                $role = $role_v->title;

               // $User[$key]['role'] = $role;



            }

           //$val->stripe_id = $role;



           unset($val->id);

        }

        return $User;

    }


     public function headings(): array
    {
        $header =  ["name", "first_name", "last_name","email","dob", "phone", "social_id","api_token","device_id","device_token","email_verified_at","password","customer_id","user_wallet","remember_token","is_approved","vendor_wallet","profile_image","created_at","updated_at","stripe_id","role"];

        
        return $header;
    }
}
