<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";

    protected $fillable = [
        'title',
        'parent_id',
        'status'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}