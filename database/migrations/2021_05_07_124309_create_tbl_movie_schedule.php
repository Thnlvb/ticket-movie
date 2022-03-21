<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMovieSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_movie_schedule', function (Blueprint $table) {
            $table->increments('schedule_id');
            $table->integer('schedule_movie')->unsigned();
            $table->integer('schedule_times')->unsigned();
            $table->integer('schedule_theater')->unsigned();
            $table->integer('schedule_status');
            $table->foreign('schedule_times')->references('times_id')->on('tbl_times');
            $table->foreign('schedule_movie')->references('category_id')->on('tbl_category_movie');
            $table->foreign('schedule_theater')->references('theater_id')->on('tbl_movie_theater');
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
        Schema::dropIfExists('tbl_movie_schedule');
    }
}
