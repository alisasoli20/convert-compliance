<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProcessMail extends Mailable
{
    use Queueable, SerializesModels;
    public $process;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($process)
    {
        $this->process = $process;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Process has been initiated successfully.')->view('emails.process-mail');
    }
}
