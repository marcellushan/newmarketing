<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressReleaseController extends BaseController
{
    const MEDIA_NAME = "Press Release";
    const MODEL_NAME = 'App\\PressRelease';
    const VIEW_FOLDER = 'press_release';
    const TABLE_NAME = 'press_releases';
    const MAIL = 'PressRelease';
}
