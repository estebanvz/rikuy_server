<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    //
    public function topic(){
        return $this->belongsTo('App\Topic');
    }
}
