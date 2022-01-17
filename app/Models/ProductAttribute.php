<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $table = "product_attributes";

    protected $fillable = [
        'product_id',
        'attr_id',
        'attr_value_id'
    ];

    public function product_attributes_val()
    {
        return $this->hasMany(ProductAttributeValue::class,'product_attribute_id');
    }
    public function attribute()
    {
       return $this->belongsTo(Attribute::class,'attr_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
