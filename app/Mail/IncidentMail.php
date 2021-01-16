<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IncidentMail extends Mailable
{
    use Queueable, SerializesModels;
    public $incident;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($incident)
    {
        $this->incident = $incident;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Incident has been registered ")->view('emails.incident-mail');
    }
}
