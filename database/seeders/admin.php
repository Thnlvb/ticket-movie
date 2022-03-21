<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_admin')->insert([
            'admin_email'       => 'admin@gmail.com',
            'admin_password'    => md5('admin'),
            'admin_name'        => 'Hồng Nhung',
            'admin_phone'       => '0123456789',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
