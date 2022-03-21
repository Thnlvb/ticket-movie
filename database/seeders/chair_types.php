<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chair_types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_chair_types')->insert([
            ['types_name'		=> 'Thường',
            'types_surcharge'	=> 0,
            'types_status'		=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['types_name'		=> 'VIP',
            'types_surcharge'	=> 10000,
            'types_status'		=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['types_name'		=> 'Sweet Box',
            'types_surcharge'	=> 20000,
            'types_status'		=> 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],
        ]);
    }
}
