<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionExam;
use App\Reading;
use App\Exam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //
    public function create(Request $request)
    {
        // $questions = Question::all();
        $input = $request->input();
        if (array_key_exists('id', $input)) {
            $exam = new Exam();
            if(Auth::check()){
                $exam["user_id"] = Auth::user()->id;
            }else{
                $exam["user_id"] = null;
            }
            $exam["speed"] = $input["speed"];
            $exam["number_words"] = $input["number_words"];
            $exam["number_lines"] = $input["number_lines"];
            $exam["splited"] = ($input["splited"] ? 1 : 2);
            $exam["template_id"] = $input["template_id"];
            $exam["initial_date"] = Carbon::now();
            $exam['score'] = 0;
            $exam->save();

            $questions = Question::where("reading_id", '=', $input['id'])->inRandomOrder()->take(4)->get();
            $question_exams = [];
            $total = 0;
            for ($i = 0; $i < count($questions); $i++) {
                $tmp = new QuestionExam();
                $tmp["question_id"] = $questions[$i]["id"];
                $total += $questions[$i]["score"];
                $tmp["exam_id"] = $exam["id"];
                $tmp["time"] = null;
                $tmp["correct"] = null;
                $tmp["user_answer"] = null;
                $tmp->save();
                $tmp->question->id;
                array_push($question_exams, $tmp);
            }
            $exam['total'] = $total;
            $exam->save();
            // $reading = Reading::find($input['id']);
            return response()->json(["questions"=>$question_exams,"exam"=>$exam]);

            // $readings=Reading::all();
        }
        return response()->json("WRONG");
    }
}
