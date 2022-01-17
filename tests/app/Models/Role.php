<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // use SoftDeletes;

    public $table = 'roles';


    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);

    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);

    }
}
