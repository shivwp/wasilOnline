<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;
    protected $table = "products_variants";

    protected $fillable = [
        'parent_id',
         'p_id',
        'variant_id',
        'variant_value',
        'variant_sku',
        'variant_price',
        'variant_stock',
        'variant_images'
    ];

  
}
