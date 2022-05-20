<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDefaultCards extends Model
{
    use HasFactory;


    protected $table = "user_default_card";

     protected $fillable = [
        'id',
        'user_id',
        'card_number',
        'date',
        'cvc'
    ];
}
