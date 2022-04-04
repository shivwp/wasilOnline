<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyGiftcard extends Model
{
    use HasFactory;
    protected $table = "apply_giftcard";

    protected $fillable = [
        'user_id',
        'order_id',
        'giftcard_code',
        'gift_card_amount'
    ];
}
