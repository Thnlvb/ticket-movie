<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTicketsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tickets_details', function (Blueprint $table) {
            $table->increments('details_id');
            $table->integer('details_category')->unsigned();
            $table->integer('details_tickets')->unsigned();
            $table->integer('details_chair')->unsigned();
            $table->integer('details_count');
            $table->integer('details_total');
            $table->foreign('details_tickets')->references('tickets_id')->on('tbl_tickets');  
            $table->foreign('details_category')->references('category_id')->on('tbl_category_movie');
            $table->foreign('details_chair')->references('chair_id')->on('tbl_chair'); 
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
        Schema::dropIfExists('tbl_tickets_details');
    }
}
