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
            'id' => '1',
            'name' => 'Demelyn E. Monzon',
            'email' => 'admin@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '1',
        ]);
        $user = User::create([
            'id' => '2',
            'name' => 'Irryne P. Gatchalian',
            'email' => 'regular@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '2',
        ]);
        $user = User::create([
            'id' => '3',
            'name' => 'Rosicar E. Escober',
            'email' => 'part-time@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '3',
        ]);
        $user = User::create([
            'id' => '4',
            'name' => 'Ednalyn A. Bataller',
            'email' => 'staff@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '4',
        ]);
        $user = User::create([
            'id' => '5',
            'name' => 'Jaime P. Gutierrez, Jr.',
            'email' => 'director@xyz.ph',
            'password' => bcrypt('changeme'),
            'role_id' => '5',
        ]);

    }
}
