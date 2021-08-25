<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Trouble;
use App\User;
use App\Question;
use App\Comment;    

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment')->orderByDesc('created_at');
    }
}