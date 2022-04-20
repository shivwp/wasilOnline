<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class GiftCardUser extends Model

{

    use HasFactory;

    protected $table = "user_giftcard";



    protected $fillable = [

        'user_id',

        'card_id',

        'gift_card_code',

        'gift_card_amount',

        'gift_expiry_date',
        'assigned_user'

       

    ];

}

