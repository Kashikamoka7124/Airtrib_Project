<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $id;

    public $name;

    public $summary;

    public $booking;

    public $payments;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $name, $summary, $booking, $payments)
    {
        $this->id = $id;
        $this->name = $name;
        $this->summary = $summary;
        $this->booking = $booking;
        $this->payments = $payments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.booking-confirmation');
    }
}
