<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorSetting extends Model
{
    use HasFactory;
       protected $table="vendorsettings";

    protected $fillable=['id','name','value','vendor_id','commision'];

    public $timestamps=true;

}
