<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorShipping extends Model
{
    use HasFactory;
        protected $table = "shipping_vendor";

    protected $fillable = [
        'id',
        'shipping_method_id',
        'vendor_id',
        'min_order_free',
        'ship_price',
        'is_available'
    ];
}
