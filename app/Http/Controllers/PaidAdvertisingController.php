<?php

namespace App\Http\Controllers;

use App\PaidAdvertising;
use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;
class PaidAdvertisingController extends BaseController
{
    const MEDIA_NAME = "Paid Advertising";
    const MODEL_NAME = 'App\\PaidAdvertising';
    const VIEW_FOLDER = 'paid_advertising';
    const TABLE_NAME = 'paid_advertisings';
    const MAIL = 'PaidAdvertising';


}
