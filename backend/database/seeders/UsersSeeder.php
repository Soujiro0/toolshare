<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;
use App\Helpers\UserHelper;

class UsersSeeder extends Seeder
{
    public function run()
    {

        $users = [
            [
                'username' => 'superadmin',
                'name' => 'Jerry Castrudes',
                'password' => bcrypt('password123'),
                'email' => 'superadmin@example.com',
                'role_id' => 1,
            ],
            [
                'username' => 'admin1',
                'name' => 'Mark Joseph Hipolito',
                'password' => bcrypt('password123'),
                'email' => 'admin@example.com',
                'role_id' => 2,
            ],
            [
                'username' => 'admin2',
                'name' => 'Ian Carl Algabre',
                'password' => bcrypt('password123'),
                'email' => 'admin2@example.com',
                'role_id' => 2,
            ],
            [
                'username' => 'instructor1',
                'name' => 'Gerinelle Gabrillo',
                'password' => bcrypt('password123'),
                'email' => 'instructor@example.com',
                'role_id' => 3,
            ],
            [
                'username' => 'instructor2',
                'name' => 'Maenard Salinas',
                'password' => bcrypt('password123'),
                'email' => 'instructor2@example.com',
                'role_id' => 3,
            ],
            [
                'username' => 'instructor3',
                'name' => 'Jose Galo',
                'password' => bcrypt('password123'),
                'email' => 'instructor3@example.com',
                'role_id' => 3,
            ],
            [
                'username' => 'instructor4',
                'name' => 'Kem Entic',
                'password' => bcrypt('password123'),
                'email' => 'instructor4@example.com',
                'role_id' => 3,
            ],
        ];


        foreach ($users as $user) {
            $user['user_id'] = UserHelper::generateCustomUserId();
            UserModel::create($user);
        }
    }
}
