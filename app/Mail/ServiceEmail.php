<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class ServiceEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = Clients::find(Session::get('id'));
        $press_release = $data->pressRelease;
//        dd($press_release);

        return $this->view('emails.press_release')->with(compact('data', 'press_release'));
    }
}
