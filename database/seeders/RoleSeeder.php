<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'admin',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'consultant',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'client',
            ],
        ]);
    }
}
