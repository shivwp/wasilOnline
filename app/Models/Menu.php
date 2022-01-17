<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "menus";

    protected $fillable = [
        'title',
        'slug',
        'url',
        'position',
        'parent',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
