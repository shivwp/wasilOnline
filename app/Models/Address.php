<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = "address";

    protected $fillable = [
        'first_name',
        'order_id',
        'phone',
        'address_type',
        'address',
        'address2',
        'city',
        'country',
        'state',
        'zip_code',
        'landmark'
    ];
}
