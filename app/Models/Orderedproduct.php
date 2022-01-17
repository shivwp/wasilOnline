<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderedproduct extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = [
        'product_id',
        'order_id',
        'p_name',
        'p_price',
        'tax',
        'shipping_charge',
        'country',
        'short_description',
        'long_description',
        'featured_image'
    ];

}
