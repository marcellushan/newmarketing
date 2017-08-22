<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class Photo extends BaseEmail
{
    const MEDIA_NAME = "Photography";
    const METHOD = 'photography';
    const VIEW_FOLDER = 'photography';

}
