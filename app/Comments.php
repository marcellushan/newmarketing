<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function services()
    {
        return $this->hasOne('App\Services');
    }

    public function photography()
    {
        return $this->hasOne('App\User');
    }
}
