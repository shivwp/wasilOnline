<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAttributes extends Model
{
    use HasFactory;
        protected $table = "custom_attributes";

    protected $fillable = [
        'id',
        'product_id',
        'custom_attributes'
    ];
}
