<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class NewClient extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('envios@emailkananfleet.com.mx', 'envios@emailkananfleet.com.mx')->view('mails.new-client')
        ->with([
            'name' => $this->request->name,
            'lastname' => $this->request->lastname,
            'phone' => $this->request->phone,
            'bussines' => $this->request->bussines,
            'email' => $this->request->email,
            'web' => $this->request->web,
            'option'=> $this->request->option,
        ]);
    }
}