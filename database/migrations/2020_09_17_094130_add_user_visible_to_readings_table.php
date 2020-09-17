<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserVisibleToReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('readings', function (Blueprint $table) {
            //
            $table->boolean('approbed')->default(true);
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('readings', function (Blueprint $table) {
            if (Schema::hasColumn('readings', 'approbed')) {
                $table->dropColumn('approbed');
            }
            if (Schema::hasColumn('readings', 'user_id')) {
                $table->dropForeign('readings_user_id_foreign');
                $table->dropColumn('user_id');
            }
        });
    }
}
