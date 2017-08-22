<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class Event extends BaseEmail
{
    const MEDIA_NAME = "Event";
    const METHOD = 'event';
    const VIEW_FOLDER = 'event';

}
