<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // Initialization if needed
    }

    public function build()
    {
        return $this->subject('Test Email')
                    ->view('emails.test'); // Create a simple Blade view for the email content
    }
}