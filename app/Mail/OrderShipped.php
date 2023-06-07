<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    public $attachment;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order, $attachment)
    {
        //
        $this->order = $order;
        $this->attachment = $attachment;
    }

    /**
     * Get the message envelope. object that defines the subject and,
     * sometimes, the recipients of the message
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address("diepulp@gmail.com", "Vladimir Ivanov"),
            subject: 'Order Shipped',
        );
    }

    /**
     * Get the message content definition.
     * Generates the blade template to genereate the message content
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.orders.shipped',
            with: [
                'url' => 'www.google.com',
                'order' => $this->order,
                'attachment' =>$this->attachment
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->attachment)
                ->as('contract.txt')
                ->withMime('text/plain')
        ];
    }
}
