<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Post;

class Lang extends Model
{
    public  function video(){
        return $this->hasMany(Video::class);
    }

    public  function post(){
        return $this->hasMany(Post::class);
    }
}
