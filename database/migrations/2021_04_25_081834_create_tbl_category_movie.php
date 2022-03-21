<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_movie', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name'); //tên phim
            $table->time('category_time')->nullable(); //thời lượng
            $table->integer('category_old')->nullable(); //giới hạn độ tuổi
            $table->date('category_date')->nullable(); //ngày chiếu
            $table->string('category_country'); //quốc gia
            $table->string('category_directors'); //đạo diễn
            $table->text('category_cast'); //diễn viên
            $table->string('category_img'); //hình ảnh
            $table->text('category_desc'); //tóm tắt
            $table->integer('movie_genre')->unsigned(); //loại phim
            $table->integer('movie_format')->unsigned(); //định dạng phim
            $table->integer('category_price')->nullable(); //giá tiền
            $table->integer('category_status');
            $table->foreign('movie_genre')->references('genre_id')->on('tbl_movie_genre');
            $table->foreign('movie_format')->references('format_id')->on('tbl_movie_format');
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
        Schema::dropIfExists('tbl_category_movie');
    }
}
