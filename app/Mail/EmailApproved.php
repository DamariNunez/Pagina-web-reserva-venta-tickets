<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class EmailApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $id;

    public $subject = '¡Anótalo en tu agenda! Tu evento está aprobado';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->id = $request;
    }

    public function build()
    {
        return $this->view('emails.approved');
    }
}
