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

        'slug',
        'category_image',
        'category_image_banner',
        'arab_title',
        'arab_description'

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

    public function coupn()
    {
        return $this->belongsToMany(Coupon::class);

    }
    

}

