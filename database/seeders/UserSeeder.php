<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
                'status' => true,
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Consultant User',
                'email' => 'consultant@example.com',
                'password' => bcrypt('password'),
                'role' => 'consultant',
                'status' => true,
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Client User',
                'email' => 'client@example.com',
                'password' => bcrypt('password'),
                'role' => 'client',
                'status' => true,
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Test User',
                'email' => 'test@test.com',
                'password' => 'test1234',
                'role' => 'client',
                'status' => true,
            ],
        ]);
    }
}
