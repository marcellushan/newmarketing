<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class Presentation extends BaseEmail
{
    const MEDIA_NAME = "Presentation";
    const METHOD = 'presentation';
    const VIEW_FOLDER = 'presentation';

}
