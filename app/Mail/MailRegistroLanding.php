<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Landing;

class MailRegistroLanding extends Mailable
{
    use Queueable, SerializesModels;

    public $landing;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Landing $landing)
    {
        $this->landing = $landing;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('eBook - Donde esta el Poder escondido de la Iglesia')->view('mails.landing-ebook')
                                                                                    ->attach(public_path() . '/ebook/ebook-poder-iglesia.pdf');;
    }
}
