<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SupportEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $lastName;
    public $phone;
    public $messageUser;
    public $emailUser;

    /**
     * Create a new message instance.
     */
    public function __construct($firstName,$lastName, $emailUser,$phone,$messageUser)
    {
        //
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailUser = $emailUser;
        $this->phone = $phone;
        $this->messageUser = $messageUser;
    }

    public function build()
    {
        return $this->view('emails.support-email-template')
                    ->with([
                    'firstName' => $this->firstName,
                    'lastName' => $this->lastName,
                    'email' => $this->emailUser,
                    'phone' => $this->phone,
                    'messageUser' => $this->messageUser]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Support Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.support-email-template',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}