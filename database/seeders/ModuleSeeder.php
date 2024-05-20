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
            'id' => 1,
            'title' => 'Admin',
        ]);
        $role = Role::create([
            'id' => 2,
            'title' => 'Faculty (Regular)',
        ]);
        $role = Role::create([
            'id' => 3,
            'title' => 'Faculty (Part time)',
        ]);
        $role = Role::create([
            'id' => 4,
            'title' => 'Staff',
        ]);
        $role = Role::create([
            'id' => 5,
            'title' => 'Director',
        ]);

        // Users
        $user = User::create([
            'id' => '66464592-e6aa-4a71-9eb6-16fccd7c1bcA',
            'name' => 'Demelyn E. Monzon',
            'email' => 'admin@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => 1,
        ]);
        $user = User::create([
            'id' => '66464592-e6aa-4a71-9eb6-16fccd7c1bc5',
            'name' => 'Irryne P. Gatchalian',
            'email' => 'regular@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => 2,
        ]);
        $user = User::create([
            'id' => '66464592-e6aa-4a71-9eb6-16fccd7c1bcF',
            'name' => 'Rosicar E. Escober',
            'email' => 'part-time@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => 3,
        ]);
        $user = User::create([
            'id' => '66464132-e6aa-4a71-9eb6-16adcd7c1aed',
            'name' => 'Ednalyn A. Bataller',
            'email' => 'staff@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => 4,
        ]);
        $user = User::create([
            'id' => '6646A592-e6aa-4a71-9eb6-16fccd7c1bcD',
            'name' => 'Jaime P. Gutierrez, Jr.',
            'email' => 'director@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => 5,
        ]);

    }
}
