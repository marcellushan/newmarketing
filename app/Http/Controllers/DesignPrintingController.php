<?php

namespace App\Http\Controllers;

use App\DesignPrinting;
use Illuminate\Http\Request;


class DesignPrintingController extends BaseController
{

    const MEDIA_NAME = "Design and Printing";
    const MODEL_NAME = 'App\\DesignPrinting';
    const VIEW_FOLDER = 'design_printing';
    const TABLE_NAME = 'design_printings';
    const MAIL = 'DesignPrinting';

}
