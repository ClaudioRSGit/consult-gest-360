<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        Activity::create([
            'uuid' => Str::uuid(),
            'type' => 'consultancy',
            'description' => 'Reunião inicial para consultoria de processos',
            'date' => '2024-01-02',
            'status' => 'Concluída'
        ]);

        Activity::create([
            'uuid' => Str::uuid(),
            'type' => 'training',
            'description' => 'Aula prática de Six Sigma',
            'date' => '2024-02-07',
            'status' => 'Pendente'
        ]);
    }
}
