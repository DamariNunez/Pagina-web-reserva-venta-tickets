<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class EmailPay extends Mailable
{
    use Queueable, SerializesModels;

    public $cad;

    public $subject = '¡A un paso de asistir al evento!';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->cad = $request;
    }

    public function build()
    {
        return $this->view('emails.pay');
    }
}
