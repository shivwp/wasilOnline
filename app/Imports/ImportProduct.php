<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProduct implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Product([
            //
            'pname' => $row[0],
            'arab_pname' => $row[1],
            'product_type' => $row[2],
            'p_price' => $row[2],
            's_price' => $row[2],
        ]);
    }
}
