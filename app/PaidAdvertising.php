<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaidAdvertising extends Model
{
    protected $fillable = ['details','audience','purpose','use','advertising','budget','other'];

}
