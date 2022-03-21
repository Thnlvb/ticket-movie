<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class format extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_movie_format')->insert([
            ['format_name' 	=> 'Tiếng Anh - 2D Phụ Đề Tiếng Việt', #1
            'format_status' => 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['format_name' 	=> 'Tiếng Việt - 2D Phụ Đề Tiếng Anh', #2
            'format_status' => 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['format_name'  => 'Tiếng Việt - 2D Phụ Đề Tiếng Hàn', #3
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - 2D Phụ Đề Tiếng Nhật', #4
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name' 	=> 'Tiếng Nhật - 2D Phụ Đề Tiếng Việt/Anh', #5
            'format_status' => 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['format_name'  => 'Tiếng Hàn - 2D Phụ Đề Tiếng Việt/Anh', #6
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name' 	=> 'Tiếng Anh - 2D Lồng Tiếng/Phụ Đề Tiếng Việt', #7
            'format_status' => 1,
            'created_at'	=> now(),
            'updated_at'	=> now()],

            ['format_name'  => 'Tiếng Nhật - 2D Lồng Tiếng/Phụ Đề Tiếng Việt', #8
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Trung - 2D Lồng Tiếng/Phụ Đề Tiếng Việt', #9
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nga - 2D Phụ Đề Tiếng Việt/Anh', #28
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Anh - 3D Phụ Đề Tiếng Việt', #10
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - 3D Phụ Đề Tiếng Anh', #11
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - 3D Phụ Đề Tiếng Hàn', #12
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - 3D Phụ Đề Tiếng Nhật', #13
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nhật - 3D Phụ Đề Tiếng Việt/Anh', #14
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Hàn - 3D Phụ Đề Tiếng Việt/Anh', #15
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Anh - 3D Lồng Tiếng/Phụ Đề Tiếng Việt', #16
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nhật - 3D Lồng Tiếng/Phụ Đề Tiếng Việt', #17
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Trung - 3D Lồng Tiếng/Phụ Đề Tiếng Việt', #18
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nga - 3D Phụ Đề Tiếng Việt/Anh', #29
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Anh - IMAX Phụ Đề Tiếng Việt', #19
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - IMAX Phụ Đề Tiếng Anh', #20
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - IMAX Phụ Đề Tiếng Hàn', #21
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Việt - IMAX Phụ Đề Tiếng Nhật', #22
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nhật - IMAX Phụ Đề Tiếng Việt/Anh', #23
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Hàn - IMAX Phụ Đề Tiếng Việt/Anh', #24
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Anh - IMAX Lồng Tiếng/Phụ Đề Tiếng Việt', #25
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nhật - IMAX Lồng Tiếng/Phụ Đề Tiếng Việt', #26
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Trung - IMAX Lồng Tiếng/Phụ Đề Tiếng Việt', #27
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],

            ['format_name'  => 'Tiếng Nga - IMAX Phụ Đề Tiếng Việt/Anh', #30
            'format_status' => 1,
            'created_at'    => now(),
            'updated_at'    => now()],
  
        ]);
    }
}
