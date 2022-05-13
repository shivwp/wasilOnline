<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBids extends Model
{
    use HasFactory;

     protected $table = "user_bid";

     protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'bid_price',
        'status'
    ];
}
