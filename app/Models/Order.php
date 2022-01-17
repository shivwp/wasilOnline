<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = [
        'product_id',
        'user_id',
        'status',
        'status_note',
        'invoice_number',
        'total_price',
        'currency_sign',
        'giftcard_used_amount',
        'shipping_address_id',
        'shipping_type',
        'shipping_method',
        'shipping_price',
        'payment_mode',
        'payment_status',
        'receipt_amount'
    ];
}
