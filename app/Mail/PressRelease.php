<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class PressRelease extends BaseEmail
{
    const MEDIA_NAME = "Press Release";
    const METHOD = 'pressRelease';
    const VIEW_FOLDER = 'press_release';

}
