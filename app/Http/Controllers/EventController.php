<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;


class EventController extends BaseController
{
    const MEDIA_NAME = "Event Aid";
    const MODEL_NAME = 'App\\Event';
    const VIEW_FOLDER = 'event';
    const TABLE_NAME = 'events';
    const MAIL = 'Event';
}
