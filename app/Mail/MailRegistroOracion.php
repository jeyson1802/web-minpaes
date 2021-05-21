<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Oracion;

class MailRegistroOracion extends Mailable
{
    use Queueable, SerializesModels;

    public $oracion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Oracion $oracion)
    {
        $this->oracion = $oracion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registro Correcto - Oración')->view('mails.oracion');
    }
}
