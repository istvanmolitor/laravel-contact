<?php

namespace IstvanMolitor\LaravelContact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $phone;
    private $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact::emails.email', [
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);
    }
}
