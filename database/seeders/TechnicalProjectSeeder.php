<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TechnicalProject;
use Illuminate\Support\Str;

class TechnicalProjectSeeder extends Seeder
{
    public function run()
    {
        TechnicalProject::create([
            'uuid' => Str::uuid(),
            'client_id' => 1,
            'user_id' => 2,
            'description' => 'Desenvolvimento de sistema de monitoramento em tempo real',
            'start_date' => '2024-03-01',
            'end_date' => '2024-06-01',
            'status' => 'Em andamento'
        ]);

        TechnicalProject::create([
            'uuid' => Str::uuid(),
            'client_id' => 3,
            'user_id' => 2,
            'description' => 'Integração de sistemas ERP para gestão de produção',
            'start_date' => '2024-05-01',
            'end_date' => '2024-10-01',
            'status' => 'Cancelado'
        ]);
    }
}
