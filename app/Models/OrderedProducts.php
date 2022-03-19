<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class OrderedProducts extends Model

{

    use HasFactory;

        protected $table = "ordered_products";



    protected $fillable = [

        'id',

        'order_id',

        'product_id',

        'product_name',

        'category',

        'product_type',

        'sku_id',

        'quantity',

        'product_price',

        'discount',

        'total_price',

        'tax',
        'status',
        'vendor_id'

    ];



    public function order()

    {

       return $this->belongsTo(Order::class,'order_id');

    }

}

