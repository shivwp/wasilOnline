<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderNote extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_id',
        'order_status',
        'order_note',
        'status'
    ];
}
