<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @param $contact
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')
            //->from('')
            //->text('mails.demo_plain')
            ->subject('Contact Form')
            ->with(
                [
                    'message' => $this->contact->message,
                    'email' => $this->contact->email,
                    'phone' => $this->contact->phone,
                    'name' => $this->contact->name,
                ]);
            //->attach(public_path('/images').'/demo.jpg', [
            //    'as' => 'demo.jpg',
            //    'mime' => 'image/jpeg',
            //]);
    }
}
