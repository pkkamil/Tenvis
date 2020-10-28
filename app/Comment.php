<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function comments() {
        return $this -> hasMany('App\Models\Comment');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
