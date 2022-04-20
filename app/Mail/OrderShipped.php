<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     *
     */
    protected $references;
    public function __construct($references = [])
    {
        $this->references = $references;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->/* from('terminalcobroKF@etecno.com.mx')
        -> */markdown('emails.orders.shipped',[
            'references' => $this->references
        ]);
    }
}
