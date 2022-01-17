<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
        protected $table = "tax_type";

    protected $fillable = [
        'title',
        'tax_amount',
        'id'
    ];
}
