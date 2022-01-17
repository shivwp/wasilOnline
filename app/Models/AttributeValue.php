<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AttributeValue extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "attributes_value";

    protected $fillable = [
        'attr_id',
        'attr_value_name',
        'slug',
    ];

    protected $guarded = [];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'attr_value_name'
            ]
        ];
    }

    
}
