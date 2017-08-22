<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Comments;

use Session;
use DB;

class VideoController extends BaseController
{
    const MEDIA_NAME = "Videography";
    const MODEL_NAME = 'App\\Video';
    const VIEW_FOLDER = 'videography';
    const TABLE_NAME = 'videos';
    const MAIL = 'Video';

}
