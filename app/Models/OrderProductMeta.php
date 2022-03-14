<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductMeta extends Model
{
    use HasFactory;
        protected $table = "ordered_products_meta";

    protected $fillable = [
        'id',
        'product_id',
        'meta_key',
        'meta_value',
        'order_id'
    ];
}
