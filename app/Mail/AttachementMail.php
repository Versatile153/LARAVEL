<?php

namespace App\Mail;

use App\Mail\AttachementMail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AttachementMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.attachement')
        ->subject('how to add image')
        ->attach(public_path('/img/image.jpg'),[
            'as'=>'my cover image',
            'mine'=>'application/jpg'
        ]);
    }
}
