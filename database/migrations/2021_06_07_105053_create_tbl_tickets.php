<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tickets', function (Blueprint $table) {
            $table->increments('tickets_id');
            $table->integer('tickets_customer')->unsigned();
            $table->string('tickets_price');
            $table->integer('tickets_payment')->unsigned();      
            $table->datetime('tickets_day');
            $table->string('tickets_status');
            $table->foreign('tickets_payment')->references('payment_id')->on('tbl_payment');
            $table->foreign('tickets_customer')->references('customer_id')->on('tbl_customer');
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
        Schema::dropIfExists('tbl_tickets');
    }
}
