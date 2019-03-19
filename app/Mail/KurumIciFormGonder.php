<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KurumIciFormGonder extends Mailable
{
    use Queueable, SerializesModels;

    public $gonder;
    public function __construct($bilgiler)
    {
        $this->gonder = $bilgiler;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.kurumiciformgonder')->subject('Kurum İçi Başvuru Formu');
    }
}
