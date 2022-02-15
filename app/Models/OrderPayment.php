<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;
        protected $table = "order_payment";

    protected $fillable = [
        'id',
        'order_id',
        'status',
        'trans_id',
        'trans_status',
        'charges_id',
        'balance_transaction',
        'message'
    ];
}
