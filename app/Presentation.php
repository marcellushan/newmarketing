<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $fillable = ['details', 'students','faculty_staff','community','alumni','date_needed','assistance','other'];
}
