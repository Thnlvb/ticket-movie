<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class movie_theater extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_movie_theater')->insert([
            ['theater_name'		=> 'Phòng 1',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 2',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 3',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 4',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 5',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 6',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 7',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 8',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 9',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 10',
            'theater_rows'		=> 13,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 3D1',
            'theater_rows'		=> 10,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng 3D2',
            'theater_rows'		=> 10,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['theater_name'		=> 'Phòng IMAX',
            'theater_rows'		=> 10,
            'theater_cols'		=> 12,
            'theater_status'	=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],
        ]);
    }
}
