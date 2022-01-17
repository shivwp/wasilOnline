<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'vendor_id',
         'cat_id',
        'pname',
        'sku_id',
        'p_price',
        's_price',
        's_price',
        'tax_type',
        'tax_ammount',
        'short_description',
        'long_description',
        'discount_type',
        'discount',
        'featured_image',
        'gallery_image',
        'in_stock',
        'shipping_type',
        'shipping_charge',
        'meta_title',
        'meta_keyword',
    ];

  public function category()
    {
        return $this->belongsTo(Category::class);
    }
  public function product_attr()  
    {
        return $this->hasMany(ProductAttribute::class,'product_id');
    }
}
