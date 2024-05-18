<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role
        $role = Role::create([
            'id' => '1',
            'title' => 'Admin',
        ]);
        $role = Role::create([
            'id' => '2',
            'title' => 'Faculty (Regular)',
        ]);
        $role = Role::create([
            'id' => '3',
            'title' => 'Faculty (Part time)',
        ]);
        $role = Role::create([
            'id' => '4',
            'title' => 'Staff',
        ]);
        $role = Role::create([
            'id' => '5',
            'title' => 'Director',
        ]);

        // Users
        $user = User::create([
            'id' => 'd3c35680-f5b9-4ad7-aa0b-d2b2c13dc067',
            'name' => 'Demelyn E. Monzon',
            'email' => 'admin@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '1',
        ]);
        $user = User::create([
            'id' => '8cf15921-8e70-4cb2-9b54-295ccf2f98ae',
            'name' => 'Irryne P. Gatchalian',
            'email' => 'regular@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '2',
        ]);
        $user = User::create([
            'id' => '69415d2b-86b2-4d37-a463-51b1eb0b6a22',
            'name' => 'Rosicar E. Escober',
            'email' => 'part-time@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '3',
        ]);
        $user = User::create([
            'id' => 'e41f1b70-4a9d-45c5-88c0-578f3f24af65',
            'name' => 'Ednalyn A. Bataller',
            'email' => 'staff@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '4',
        ]);
        $user = User::create([
            'id' => 'c22a58d7-ef81-4a0d-bacd-4edf7a7bc74c',
            'name' => 'Jaime P. Gutierrez, Jr.',
            'email' => 'director@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '5',
        ]);

    }
}
