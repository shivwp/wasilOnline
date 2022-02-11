<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = "feedback";

    protected $fillable = [
        'id',
        'rating',
        'discription',
        'follow_up',
        'order_id'
    ];
}
