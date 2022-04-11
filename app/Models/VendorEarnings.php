<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class VendorEarnings extends Model

{

    use HasFactory;

        protected $table = "vendor_earnings";



    protected $fillable = [

        'id',

        'order_id',

        'vendor_id',

        'product_id',

        'amount',
        'note'

    ];

}

