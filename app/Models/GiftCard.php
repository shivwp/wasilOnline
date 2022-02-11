<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    use HasFactory;
    protected $table = "gift_card";

    protected $fillable = [
        'title',
        'description',
        'image',
        'amount',
        'valid_days',
        'status',
        'prodduct_id'
    ];
}
