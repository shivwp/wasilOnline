<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Mails;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public function __construct( $user)
    {
         $this->data=$user;
    }


    public function build()
    {
         return $this->from($this->data['from_email'],$this->data['reply_email'],$this->data['name'],$this->data['message'])
         ->subject($this->data['subject'])
        ->markdown('mails.mail');
    }

}



