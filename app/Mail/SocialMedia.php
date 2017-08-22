<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class SocialMedia extends BaseEmail
{
    const MEDIA_NAME = "Social Media";
    const METHOD = 'socialMedia';
    const VIEW_FOLDER = 'social_media';

}
