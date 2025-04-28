<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_roles')->insert([
            ['role_name' => 'SUPER_ADMIN'],
            ['role_name' => 'ADMIN'],
            ['role_name' => 'INSTRUCTOR'],
        ]);
    }
}
