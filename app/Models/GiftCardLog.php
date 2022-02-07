<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCardLog extends Model
{
    use HasFactory;
    protected $table = "user_giftcard_log";

    protected $fillable = [
        'user_id',
        'card_id',
        'gift_card_code',
        'gift_card_amount',
        'gift_expiry_date',
        'note'
    ];
}
