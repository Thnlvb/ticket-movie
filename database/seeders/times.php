<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class times extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_times')->insert([
            ['start_times'      => '09:50:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '10:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '11:50:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '12:30:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '13:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '13:20:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '14:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '14:10:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '15:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '15:40:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '16:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()], 
            
            ['start_times'      => '16:30:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()], 

            ['start_times'      => '17:20:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '17:50:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '18:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '18:20:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'       => '19:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '19:40:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'       => '20:20:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '20:30:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'       => '21:00:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '21:20:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '21:30:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['start_times'      => '21:50:00',
            'day_times'			=> now()->format('Y-m-d'),
            'times_status'		=> 1,
            'created_at'        => now(),
            'updated_at'        => now()],
        ]);
    }
}
