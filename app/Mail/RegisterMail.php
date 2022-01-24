<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use App\Models\Mails;



class RegisterMail extends Mailable

{

    use Queueable, SerializesModels;



    /**

     * Create a new message instance.

     *

     * @return void

     */

    public $signupdata;

    public function __construct( $user)

    {

        

         $this->signupdata=$user;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

         return $this->from($this->signupdata['from_email'],$this->signupdata['name'])

        ->subject($this->signupdata['subject'])

        ->markdown('mails.register');

    }

}

