<?php

namespace Database\Seeders;

use App\Models\RoleModel;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = now();

        $roles = [
            ['role_name' => 'SUPER_ADMIN'],
            ['role_name' => 'ADMIN'],
            ['role_name' => 'INSTRUCTOR'],
        ];

        $roles = array_map(function ($role) use ($now) {
            return array_merge($role, ['created_at' => $now, 'updated_at' => $now]);
        }, $roles);

        RoleModel::insert($roles);
    }
}
