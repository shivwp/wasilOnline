<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = [
        'parent_id',
        'order_id',
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

    public function orderMeta(){

        return $this->hasMany(OrderMeta::class);
    }
    public function orderItem()
    {
    return $this->hasMany(OrderedProducts::class,'order_id');
    }
    public function ticket()
    {
        return $this->hasMany(SupportTickets::class);
    }
}
