<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['GHC','details','date_needed','start_time','location','banners','magazines','promo','recruitment','table_clothes','easels','signs',
        'other','other_details','pickup_name','pickup_email','pickup_phone','department','attendance','contact_name','contact_email','contact_phone',
        'cost','speaker','speaker_bio','sponsor','sponsor_website','rsvp'];
}
