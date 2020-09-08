<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $hidden=['answer'];
    protected $table = 'questions';
}
