<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = array('*');
    //
    protected $hidden=['answer'];
    protected $table = 'questions';
}
