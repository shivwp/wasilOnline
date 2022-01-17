<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Coupon extends Model

{

    use HasFactory;

    protected $table = "coupon";



    protected $fillable = [

        'code',

        'description',

        'discount_type',
        'amount_type',

        'coupon_amount',

        'allow_free_shipping',

        'start_date',

         'expiry_date',

        'minimum_spend',

        'maximum_spend',

        'is_indivisual',

        'exclude_sale_item',

        'limit_per_coupon',

         'limit_per_user',

        'status'

    ];

}

