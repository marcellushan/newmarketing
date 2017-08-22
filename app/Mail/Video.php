<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class Video extends BaseEmail
{
    const MEDIA_NAME = "Videography";
    const METHOD = 'videography';
    const VIEW_FOLDER = 'videography';

}
