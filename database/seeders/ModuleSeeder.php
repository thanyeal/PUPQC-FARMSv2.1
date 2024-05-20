<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Role;
use App\Models\User;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $roles = [
        //     ['id' => '1', 'title' => 'Admin'],
        //     ['id' => '2', 'title' => 'Faculty (Regular)'],
        //     ['id' => '3', 'title' => 'Faculty (Part time)'],
        //     ['id' => '4', 'title' => 'Staff'],
        //     ['id' => '5', 'title' => 'Director'],
        // ];

        // foreach ($roles as $role) {
        //     Role::create($role);
        // }

        // Users
        $users = [
            [
                // 'id' => Str::uuid(),
                'id' => '1',
                'name' => 'Demelyn E. Monzon',
                'email' => 'admin@xyz.ph',
                'password' => bcrypt('changeme'),
                // 'role_id' => 1,
            ],
            [
                // 'id' => Str::uuid(),
                'id' => '2',
                'name' => 'Irryne P. Gatchalian',
                'email' => 'regular@xyz.ph',
                'password' => bcrypt('changeme'),
                // 'role_id' => 2,
            ],
            [
                // 'id' => Str::uuid(),
                'id' => '3',
                'name' => 'Rosicar E. Escober',
                'email' => 'part-time@xyz.ph',
                'password' => bcrypt('changeme'),
                // 'role_id' => 3,
            ],
            [
                // 'id' => Str::uuid(),
                'id' => '4',
                'name' => 'Ednalyn A. Bataller',
                'email' => 'staff@xyz.ph',
                'password' => bcrypt('changeme'),
                // 'role_id' => 4,
            ],
            [
                // 'id' => Str::uuid(),
                'id' => '5',
                'name' => 'Jaime P. Gutierrez, Jr.',
                'email' => 'director@xyz.ph',
                'password' => bcrypt('changeme'),
                // 'role_id' => 5,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
