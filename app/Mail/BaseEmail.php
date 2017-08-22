<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

use Session;
use App\Clients;
use App\ServiceRequests;
use App\User;
use App\Customer;

class BaseEmail extends Mailable
{
    const MEDIA_NAME = "abstract";
    const METHOD = 'abstract';
    const VIEW_FOLDER = 'abstract';


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
        $data = ServiceRequests::find(Session::get('id'));
//        $client = Auth::user();
//        dd(session('user_id'));
        $user_id = session('user_id');
        $client = Customer::find($user_id);
//        dd(session('user_id'));
        $service_method = $this::METHOD;
        $view_folder=$this::VIEW_FOLDER;
        $service_name = $this::MEDIA_NAME;
        $service_type = $data->$service_method;
//        dd($service_type);
//        $email_view = 'emails.' . $this::VIEW_FOLDER;
        return $this->from('marcom@highlands.edu')
            ->subject('A Marcom ' . $service_name . ' request has been submitted')
            ->view('emails.services')->with(compact('data', 'service_type','service_name','view_folder','client'));
    }
}
