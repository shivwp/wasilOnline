<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportComment extends Model
{
    use HasFactory;
        protected $table = "ticket_comments";

    protected $fillable = [
        'id',
        'ticket_id',
        'support_id',
        'user_id',
        'comment'
    ];

    public function ticket()
    {
        return $this->belongsTo(SupportTickets::class);
    }


 


}
