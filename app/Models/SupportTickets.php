<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTickets extends Model
{
    use HasFactory;
        protected $table = "support_ticket";

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'user_id',
        'cat_id',
        'title',
        'description',
        'image',
        'status',
        'remark',
        'source'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(SupportCategory::class,'cat_id');
    }
    public function comments()
    {
        return $this->hasMany(SupportComment::class,'ticket_id');
    }


}
