<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lang;

class Post extends Model
{
    public  function lang(){
        return $this->belongsTo(Lang::class);
    }
}
