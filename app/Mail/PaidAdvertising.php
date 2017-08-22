<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Session;
use App\Clients;

class PaidAdvertising extends BaseEmail
{
    const MEDIA_NAME = "Paid Advertising";
    const METHOD = 'paidAdvertising';
    const VIEW_FOLDER = 'paid_advertising';

}
