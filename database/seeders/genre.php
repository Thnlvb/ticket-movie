<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_movie_genre')->insert([
            ['genre_name' 	=> 'Kinh Dị', #1
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name' 	=> 'Hành Động', #2
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name' 	=> 'Phiêu Lưu', #3
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name' 	=> 'Gia Đình', #4
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name' 	=> 'Hài', #5
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name' 	=> 'Hoạt Hình', #6
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name' 	=> 'Nhạc Kịch', #7
            'genre_status' 	=> 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['genre_name'   => 'Tâm Lý', #8
            'genre_status'  => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['genre_name'   => 'Tình Cảm', #9
            'genre_status'  => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['genre_name'   => 'Hồi Hợp', #10
            'genre_status'  => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['genre_name'   => 'Lịch Sử', #11
            'genre_status'  => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['genre_name'   => 'Thần Thoại', #12
            'genre_status'  => 1,
            'created_at'    => now(),
            'updated_at'    => now()],
        ]);
    }
}
