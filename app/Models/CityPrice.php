<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityPrice extends Model
{
    use HasFactory;
     protected $table = "city_price";
     protected $fillable = [
        'id',
        'city_id',
        'normal_price',
        'priority_price',
    ];

}
