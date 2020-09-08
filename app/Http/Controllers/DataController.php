<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    //
    public function speedComprehension()
    {
        // $exams = Exam::selectRaw("speed as x, score/total as y")->where("y", ">", "0.0")->get();
        $exams = Exam::selectRaw("speed as x, score/total*100 as y")->whereRaw("score > 0.0")->get();
        if (Auth::check()) {
            $myexams = Exam::selectRaw("speed as x, score/total*100 as y")->whereRaw("score > 0.0")->where('user_id', Auth::user()->id)->get();
            $myspeed = Exam::selectRaw("speed, initial_date")->where('user_id', Auth::user()->id)->get();
            return response()->json(["comprehension" => $exams, 'mycomprehension' => $myexams, 'myspeed' => $myspeed]);
        }else{
            return response()->json(["comprehension" => $exams, 'mycomprehension' => [], 'myspeed' => []]);
        }
    }
}
