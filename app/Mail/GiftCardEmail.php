<?php



namespace App\Mail;



use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use App\Models\Mails;



class GiftCardEmail extends Mailable

{

    use Queueable, SerializesModels;



    /**

     * Create a new message instance.

     *

     * @return void

     */

    public $data;

    public function __construct( $user)

    {

        

         $this->data=$user;

    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->from($this->data['fromemail'],$this->data['name'],$this->data['message'])

        ->subject($this->data['subject'])

        ->markdown('mails.mail');

    }

}

