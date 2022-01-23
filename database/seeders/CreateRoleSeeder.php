<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            ['name' => 'admin', 'display_name' => 'Quản Trị Viên'],
            ['name' => 'teacher', 'display_name' => 'Giáo Viên'],
            ['name' => 'developer', 'display_name' => 'Người Phát Triển Hệ Thống'],
            ['name' => 'student', 'display_name' => 'Sinh Viên'],
        ]);
    }
}
