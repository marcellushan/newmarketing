<?php

namespace App\Http\Controllers;

use App\Presentation;
use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;




class PresentationController extends BaseController
{
    const MEDIA_NAME = "Presentation";
    const MODEL_NAME = 'App\\Presentation';
    const VIEW_FOLDER = 'presentation';
    const TABLE_NAME = 'presentations';
    const MAIL = 'Presentation';



}
