<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'admin', 'description' => 'Administrator'],
            ['role_name' => 'user', 'description' => 'User'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
