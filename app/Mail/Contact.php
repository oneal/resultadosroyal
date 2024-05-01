<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

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
        return
            $this->from($this->data['email'], config('mail.from.name'))
                ->view('web.email.contact')->with([
                    'name' => $this->data['name'],
                    'email' => $this->data['email'],
                    'phone' => $this->data['phone'],
                    'messageC' => $this->data['messageC']
                ]);
    }
}
