<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Trouble;
use App\User;
use App\Question;
use App\Comment;

class Trouble extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function trouble_comments() {
        return $this->hasMany('App\TroubleComment')->orderByDesc('created_at');
    }
}

