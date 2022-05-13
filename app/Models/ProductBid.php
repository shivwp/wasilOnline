<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBid extends Model
{
    use HasFactory;

    protected $table = "product_bid";

     protected $fillable = [
        'id',
        'product_id',
        'start_date',
        'end_date',
        'min_bid_price',
        'step_price',
        'auto_allot'
    ];
}
