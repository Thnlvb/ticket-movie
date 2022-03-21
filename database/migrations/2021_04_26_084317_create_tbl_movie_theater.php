<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMovieTheater extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_movie_theater', function (Blueprint $table) {
            $table->increments('theater_id');
            $table->string('theater_name');
            $table->integer('theater_rows');
            $table->integer('theater_cols');
            $table->integer('theater_status');
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
        Schema::dropIfExists('tbl_movie_theater');
    }
}
