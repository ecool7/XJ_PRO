<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageText;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageText = $message;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('forma@xinji-tech.com', 'Xinji Contact Form')
                    ->replyTo($this->email, $this->name)
                    ->subject('New Contact Form Message from ' . $this->name)
                    ->view('emails.contact')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'messageText' => $this->messageText,
                    ]);
    }
}

