<?php

namespace App\Mail;

use App\DataTransferObjects\ContactFormData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment as MailAttachment; // alias if needed
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendUsYourCvMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public ContactFormData $data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Us Your Cv Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.send_your_cv',
            with: [
                'data' => $this->data,
            ]
        );
    }

    public function attachments(): array
    {
        if ($this->data->attachment) {
            return [
                MailAttachment::fromPath($this->data->attachment->getRealPath())
                    ->as($this->data->attachment->getClientOriginalName())
                    ->withMime($this->data->attachment->getMimeType()),
            ];
        }

        return [];
    }
}
