<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('tbl_users')->insert([
            [
                'username' => 'superadmin',
                'name' => 'Jerry Castrudes',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'superadmin@example.com',
                'role_id' => 1,
            ],
            [
                'username' => 'admin1',
                'name' => 'Mark Joseph Hipolito',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'admin@example.com',
                'role_id' => 2,
            ],
            [
                'username' => 'admin2',
                'name' => 'Ian Carl Marley',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'admin2@example.com',
                'role_id' => 2,
            ],
            [
                'username' => 'instructor1',
                'name' => 'Gerinelle Putt',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'instructor@example.com',
                'role_id' => 3,
            ],
            [
                'username' => 'instructor2',
                'name' => 'Maenard Sharon',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'instructor2@example.com',
                'role_id' => 3,
            ],
                        [
                'username' => 'instructor3',
                'name' => 'Jose Sharon',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'instructor2@example.com',
                'role_id' => 3,
            ],
                        [
                'username' => 'instructor4',
                'name' => 'Kem Sharon',
                'password' => '$2y$10$5HPgFmOJ8Sa8d4r3/0UI6eSFD/3pbHpDrWw6H/2WnSefq0wNbm9j6',
                'email' => 'instructor2@example.com',
                'role_id' => 3,
            ],
        ]);
    }
}
