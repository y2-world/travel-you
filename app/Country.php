<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Posts'); 
    }

    public function troubles()
    {
        return $this->hasMany('App\Troubles'); 
    }
}
