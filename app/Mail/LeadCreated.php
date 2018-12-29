<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LeadCreated extends Mailable
{
    use Queueable, SerializesModels;


    protected $lead;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.lead')
                    ->from('norepy@nidge.kz', 'NIDGE')
                    ->with($this->lead);
    }
}
