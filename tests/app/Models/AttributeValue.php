<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    protected $table = "attributes_value";

    protected $fillable = [
        'attr_id',
        'attr_value_name'
    ];
}
