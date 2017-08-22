<?php

namespace App\Http\Controllers;

use App\SocialMedia;
use Illuminate\Http\Request;

use DB;
use Session;
use URL;

use App\Clients;
use App\Comments;

class SocialMediaController extends BaseController
{
    const MEDIA_NAME = "Social Media";
    const MODEL_NAME = 'App\\SocialMedia';
    const VIEW_FOLDER = 'social_media';
    const TABLE_NAME = 'social_media';
    const MAIL = 'SocialMedia';

}
