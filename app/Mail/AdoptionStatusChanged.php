<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Adoption;

class AdoptionStatusChanged extends Mailable
{
    use Queueable, SerializesModels;

    public $adoption;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Adoption $adoption, $status)
    {
        $this->adoption = $adoption;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.adoptionStatusChanged')
            ->subject('Your Adoption Request Status')
            ->with([
                'adoption' => $this->adoption,
            ]);
    }
}