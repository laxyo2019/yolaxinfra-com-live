<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class MailforContact extends Mailable
{
    public $data;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mailforcontact');
    }
}
