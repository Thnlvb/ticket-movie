<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblChair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_chair', function (Blueprint $table) {
            $table->increments('chair_id');
            $table->string('chair_name');
            $table->integer('chair_types')->unsigned();
            $table->integer('chair_theater')->unsigned();
            $table->integer('chair_status');
            $table->foreign('chair_types')->references('types_id')->on('tbl_chair_types');
            $table->foreign('chair_theater')->references('theater_id')->on('tbl_movie_theater');
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
        Schema::dropIfExists('tbl_chair');
    }
}
