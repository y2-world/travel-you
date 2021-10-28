<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Trouble;
use App\User;
use App\Question;
use App\Comment;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function answers() {
        return $this->hasMany('App\Answer')->orderBy('created_at');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
