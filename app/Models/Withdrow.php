<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrow extends Model
{
    use HasFactory;
        protected $table = "withdrow_request";

    protected $fillable = [
        'id',
        'vendor_id',
        'amount',
        'status',
        'method'
    ];

    public function vendor()
    {
        return $this->belongsTo(User::class);
    }
}
