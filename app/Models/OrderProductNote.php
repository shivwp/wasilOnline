<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductNote extends Model
{
    use HasFactory;
        protected $table = "order_product_note";

    protected $fillable = [
        'order_id',
        'product_id',
        'status',
        'note',
        'id'
    ];
}
