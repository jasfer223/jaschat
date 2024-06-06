<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        $userRole = Role::where('role_name', 'user')->first();

        User::create([
            'last_name' => 'Fernandez',
            'first_name' => 'Jasper',
            'email' => 'jaf@example.com',
            'password' => 'password',
        ])->roles()->attach($userRole);
    }
}
