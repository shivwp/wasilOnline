<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class SupportCategory extends Model
{
    use HasFactory;
    use Sluggable;
        protected $table = "support_category";

    protected $fillable = [
        'id',
        'title',
        'slug',
    ];

    public function ticket()
    {
        return $this->hasMany(SupportTickets::class);
    }

    public function sluggable(): array

    {

        return [

            'slug' => [

                'source' => 'title'

            ]

        ];

    }

}
