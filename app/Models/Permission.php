<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    public $table = 'permissions';


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);

    }
}
