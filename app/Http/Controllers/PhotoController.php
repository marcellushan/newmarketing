<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use Session;
use DB;
use URL;

use App\Clients;
use App\Comments;

class PhotoController extends BaseController
{
    const MEDIA_NAME = "Photo";
    const MODEL_NAME = 'App\\Photo';
    const VIEW_FOLDER = 'photography';
    const TABLE_NAME = 'photos';
    const MAIL = 'Photo';


}
