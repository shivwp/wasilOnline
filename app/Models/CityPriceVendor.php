<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityPriceVendor extends Model
{
    use HasFactory;
     protected $table = "city_price_vendor";
     protected $fillable = [
        'id',
        'vendor_id',
        'normal_price',
        'city_id',
        'priority_price',
    ];

}
