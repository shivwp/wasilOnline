<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingProduct extends Model
{
    use HasFactory;
        protected $table = "shipping_product";

    protected $fillable = [
        'id',
        'product_id',
        'shipping_method_id',
        'is_available',
        'min_order_free',
        'ship_price'
    ];
}
