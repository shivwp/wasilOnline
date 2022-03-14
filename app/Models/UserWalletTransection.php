<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWalletTransection extends Model
{
    use HasFactory;
        protected $table = "user_wallet_transection";

    protected $fillable = [
        'user_id',
        'amount',
        'amount_type',
        'description',
        'title',
        'status'
    ];
}
