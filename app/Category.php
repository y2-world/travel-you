<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function troubles()
    {
        return $this->hasMany('App\Troubles'); 
    }

    public function questions()
    {
        return $this->hasMany('App\Questions'); 
    }
}
