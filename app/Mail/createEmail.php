<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class createEmail extends Mailable
{
    public $name;
    public $email;
    public $msg;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Pnam,$Pemail,$Pmsg)
    {
        $this->name=$Pnam;
        $this->email=$Pemail;
        $this->msg=$Pmsg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages');
    }
}
