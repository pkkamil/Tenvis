<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    public $timestamps = True;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
