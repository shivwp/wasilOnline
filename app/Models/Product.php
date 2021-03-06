<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "products";

    protected $fillable = [
        'vendor_id',
         'cat_id',
         'cat_id_2',
         'cat_id_3',
        'pname',
        'product_type',
        'sku_id',
        'p_price',
        's_price',
        'tax_apply',
        'tax_type',
        'short_description',
        'long_description',
        'discount_type',
        'discount',
        'featured_image',
        'gallery_image',
        'in_stock',
        'new',
        'featured',
        'best_saller',
        'shipping_type',
        'shipping_charge',
        'meta_title',
        'meta_keyword',
        'parent_id',
        'commission',
        'meta_description',
        'offer_start_date',
        'offer_end_date',
        'offer_discount',
        'top_hunderd',
        'return_days',
        'arab_pname',
        'arab_short_description',
        'arab_long_description',
        'is_publish',
        'brand_slug',
        'in_offer',
        'for_auction'
    ];

  public function category()
    {
        return $this->belongsTo(Category::class);
    }
  public function product_attr()  
    {
        return $this->hasMany(ProductAttribute::class,'product_id');
    }

  public function coupn()
    {
        return $this->belongsToMany(Coupon::class);

    }
    public function ticket()
    {
        return $this->hasMany(SupportTickets::class);
    }
    public function sluggable(): array

    {

        return [

            'slug' => [

                'source' => 'pname'

            ]

        ];

    }

    
}
