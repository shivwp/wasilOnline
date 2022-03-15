<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
        protected $table = "testimonials";

    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'customer_name',
        'designation',
        'long_description',
        'arab_title',
        'arab_description',
        'arab_long_description',
        'arab_designation',
        'arab_customer_name'
    ];
}
