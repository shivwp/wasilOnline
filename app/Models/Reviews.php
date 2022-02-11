<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
     protected $table = "reviews";

    protected $fillable = [
        'email',
        'name',
        'comment',
        'product_id',
        'rating_number'
    ];
}
