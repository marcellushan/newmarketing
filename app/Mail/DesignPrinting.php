<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class DesignPrinting extends BaseEmail
{
    const MEDIA_NAME = "Design and Printing";
    const METHOD = 'designPrinting';
    const VIEW_FOLDER = 'design_printing';

}
