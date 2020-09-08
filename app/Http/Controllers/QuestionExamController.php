<?php

namespace App\Http\Controllers;

use App\QuestionExam;
use Illuminate\Http\Request;

class QuestionExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionExam  $questionExam
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionExam $questionExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionExam  $questionExam
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionExam $questionExam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionExam  $questionExam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questionExam)
    {
        $questionExam = QuestionExam::findOrFail($questionExam);
        //
        if ($questionExam['correct'] == null) {
            $questionExam['time'] = $request->input('time');
            $questionExam['user_answer'] = $request->input('user_answer');
            if ($request->input()['user_answer'] == $questionExam->question['answer']) {
                $questionExam['correct'] = 1;
                $questionExam->exam->score = $questionExam->exam->score + $questionExam->question->score;
                $questionExam->exam->save();
            } else {
                $questionExam['correct'] = 0;
            }
            $questionExam->save();
        }
        return response()->json($questionExam);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionExam  $questionExam
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionExam $questionExam)
    {
        //
    }
}
