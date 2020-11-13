<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

    protected $table = 'reports';

    public function user()
    {
        return $this->belongsTo('App\User', 'object_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Post', 'object_id');
    }
}
