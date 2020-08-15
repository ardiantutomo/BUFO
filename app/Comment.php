<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $with = ['user'];
    public function posts()
    {
        return $this->belongsTo('posts');
    }
    public function user()
    {
        return $this->belongsTo('App\user', 'user_id');
    }
    public function getUserAttribute()
    {
        return $this->user();

    }
}
