<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_exams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->unsigned();
            $table->bigInteger('exam_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('exam_id')->references('id')->on('exams');

            $table->integer('time')->nullable();
            $table->boolean('correct')->nullable();
            $table->string('user_answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_exams');
    }
}
