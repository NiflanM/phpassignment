<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;

    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function build()
    {
        return $this->view('emails.reservation-accepted')
            ->subject('Reservation Accepted');
    }
}
