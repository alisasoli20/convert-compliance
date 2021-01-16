<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PolicyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $policies;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($policies)
    {
        $this->policies = $policies;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Policy has been received for approval')->view('emails.policy-mail');
    }
}
