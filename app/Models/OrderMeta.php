<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMeta extends Model
{
    use HasFactory;
        protected $table = "order_meta";

    protected $fillable = [
        'id',
        'order_id',
        'meta_key',
        'meta_value'
    ];

    public function order(){

        return $this->belongsTo(Order::class);


    }
}
