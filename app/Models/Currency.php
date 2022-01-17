<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
        protected $table = "currency_conversion";

    protected $fillable = [
        'id',
        'name',
        'code',
        'country_name',
        'country_code',
        'compare_by',
        'compare_rate',
        'status'
    ];
}
