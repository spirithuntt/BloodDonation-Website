<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
 
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Email;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param Email $message
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // The build() function is used to build the email message 
    public function build()
    {
        $name = $this->user['name'];
$email = $this->user['email'];
$phone = $this->user['phone'];
$message = $this->user['message'];
        // markdown() function specifies the email template 
        return $this->markdown('emails.contact')->subject(config('app.name'))->subject(config('app.name') . ' - Contact Us')->with([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ]);
    }
    public function envelope(): Envelope
    {
        return new Envelope (
        subject: 'Contact Mail',
        );
    }
}
