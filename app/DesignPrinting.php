<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignPrinting extends Model
{
    protected $fillable = ['details', 'students','faculty_staff','community','alumni','payment_type','dept',
        'fund','class','award','grant_number','job_description','copies','date_needed','services_needed','color','image','client_id'];
}
