<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionExam extends Model
{
    //
    protected $fillable = ['*'];
    public function exam(){
        return $this->belongsTo('App\Exam');
    }
    public function question(){
        return $this->belongsTo('App\Question');
    }
}
