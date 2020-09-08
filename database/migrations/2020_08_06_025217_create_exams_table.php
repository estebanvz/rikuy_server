<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->integer('speed');
            $table->integer('number_words');
            $table->integer('number_lines');
            $table->integer('score')->nullable();
            $table->integer('total')->nullable();
            $table->boolean('splited');
            $table->bigInteger('template_id')->unsigned();
            $table->timestamp('initial_date')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('template_id')->references('id')->on('templates');

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
        Schema::dropIfExists('exams');
    }
}
