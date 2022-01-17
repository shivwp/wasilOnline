<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;



class Category extends Model

{

    use HasFactory;

    use Sluggable;

    protected $table = "categories";



    protected $fillable = [

        'title',

        'parent_id',
        
        'discription',
        
        'commision',

        'status',

        'parent_id',

        'level',

        'slug'

    ];

    protected $guarded = [];

    

    public function sluggable(): array

    {

        return [

            'slug' => [

                'source' => 'title'

            ]

        ];

    }



    public function product()

    {

        return $this->hasMany(Product::class);

    }

}

