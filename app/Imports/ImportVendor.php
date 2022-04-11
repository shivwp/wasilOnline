<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Role;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportVendor implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      
        $user =  User::create([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'email' => $row[2],
            'dob' => $row[2],
           // 'phone' => bcrypt($row[2]),
            'phone' => $row[2],
        ]);
        $user->roles()->sync(3);
        return $user;
    }
}
