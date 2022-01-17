<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMeta extends Model
{
    use HasFactory;
    protected $table = "page_meta";

    protected $fillable = [
        'key',
        'value',
        'page_id'
    ];
}
