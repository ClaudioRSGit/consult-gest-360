<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'uuid' => Str::uuid(),
            'name' => 'Company A',
            'address' => '123 Main St, City, Country',
            'phone' => '+1234567890',
            'email' => 'contact@companya.com',
            'status' => true
        ]);

        Client::create([
            'uuid' => Str::uuid(),
            'name' => 'Company B',
            'address' => '456 Market St, City, Country',
            'phone' => '+1987654321',
            'email' => 'contact@companyb.com',
            'status' => true
        ]);

        Client::create([
            'uuid' => Str::uuid(),
            'name' => 'Company C',
            'address' => '789 Broadway, City, Country',
            'phone' => '+1122334455',
            'email' => 'contact@companyc.com',
            'status' => false
        ]);

        Client::create([
            'uuid' => Str::uuid(),
            'name' => 'Company D',
            'address' => '101 Center St, City, Country',
            'phone' => '+1223344556',
            'email' => 'contact@companyd.com',
            'status' => true
        ]);

        Client::create([
            'uuid' => Str::uuid(),
            'name' => 'Company E',
            'address' => '202 King St, City, Country',
            'phone' => '+1445566778',
            'email' => 'contact@companye.com',
            'status' => true
        ]);
    }
}
