<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class OrderShipping extends Model

{

    use HasFactory;

    protected $table = "order_shipping";

    

    protected $fillable = [

        'order_id',
        'vendor_id',
        'shipping_title',
        'shipping_price'

    ];

}

