<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lang;

class Video extends Model
{
    public  function lang(){
        return $this->belongsTo(Lang::class);
    }
}
