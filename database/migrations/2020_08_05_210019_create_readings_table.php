<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('link');
            $table->string('language');

            $table->text('text');
            $table->text('abstract');
            $table->bigInteger('topic_id')->unsigned();
            $table->integer('level');
            $table->integer('complexity');
            $table->integer('words');
            $table->timestamps();
            $table->foreign('topic_id')->references('id')->on('topics');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readings');
    }
}
