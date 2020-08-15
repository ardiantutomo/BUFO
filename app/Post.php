<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasmany('App\comment', 'parent_id', 'id');
    }
    public function users(){
        return $this->belongsTo('App\user', 'user_id', 'id');
    }
}
