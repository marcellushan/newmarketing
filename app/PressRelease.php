<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
    protected $fillable = ['details','media_type','student_feature', 'departmental_news','student_news','college_news','alumni_feature','research','alumni_news',
        'recognition','employee_feature','award','employee_news','retirement','professional','promotional','audience','quote_name_1','quote_email_1','quote_phone_1', 'quote_name_2',
        'quote_email_2','quote_phone_2', 'quote_name_3','quote_email_3','quote_phone_3', 'image'];
}
