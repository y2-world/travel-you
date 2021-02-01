<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Trouble;
use App\User;

class Post extends Model
{
    protected $fillable = [
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}