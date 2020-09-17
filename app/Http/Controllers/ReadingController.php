<?php

namespace App\Http\Controllers;

use App\Question;
use App\Reading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $readings = Reading::where('approbed',1)->get();
        foreach ($readings as $key => $value) {
            $value->topic;
        }
        return response()->json($readings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $iReading = $input['reading'];
        $reading = new Reading();
        $reading->approbed = false;
        if (Auth::check()) {
            $reading->user_id = Auth::user()->id;
        }
        $reading['title'] = $iReading['title'];
        $reading['words'] = $iReading['words'];
        $reading['abstract'] = $iReading['abstract'];
        $reading['author'] = $iReading['author'];
        $reading['link'] = $iReading['link'];
        $reading['text'] = $iReading['text'];
        $reading['language'] = $iReading['language'];
        $reading['level'] = $iReading['level'];
        $reading['complexity'] = 1;
        $reading['topic_id'] = 1;
        $reading->save();
        $final = [];
        $questions = $input['questions'];
        foreach ($questions as $key => $value) {
            $question = new Question();
            $question['quest'] = $value['question'];
            $question['answer'] = $value['correct'];
            $tmp = $value['distracting'];
            $test =  $value['correct'];
            array_push($tmp,$test);
            $question['answers'] = json_encode($tmp);
            $question['score'] = 3;
            $question['type'] = 1;
            $question['reading_id'] = $reading['id'];
            $question->save();
            array_push($final, $question);
        }

        // $table->string('quest');
        // $table->string('answers');
        // $table->string('answer');
        // $table->integer('score');
        // $table->integer('type');
        // $table->bigInteger('reading_id')->unsigned();
        // $table->foreign('reading_id')->references('id')->on('readings');

        return response()->json(["reading" => $reading, "questions" => $final]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function show(Reading $reading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function edit(Reading $reading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reading $reading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reading $reading)
    {
        //
    }
}
