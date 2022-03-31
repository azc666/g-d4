<?php

namespace App\Mail;

// use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailConf extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $phone;
    public $subject;
    public $message;
    public $firstname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->email = session('email');
        $this->name = session('name');
        $this->phone = session('phone');
        $this->subject = session('subject');
        $this->message = session('message');
        $this->firstname = session('firstname');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('output@g-d.com')
            ->subject('Your Message Comfirmation from G+D')
            ->replyTo('output@g-d.com')
            // ->cc('dani@g-d.com')
            // ->bcc('output@g-d.com')
            // ->bcc('azc666@gmail.com')
            ->markdown('emails.contact');

    }
}