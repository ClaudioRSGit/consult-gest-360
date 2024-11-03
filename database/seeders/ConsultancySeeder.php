<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultancy;
use Illuminate\Support\Str;

class ConsultancySeeder extends Seeder
{
    public function run()
    {
        Consultancy::create([
            'id' => 1,
            'uuid' => Str::uuid(),
            'client_uuid' => 1,
            'user_uuid' => 2, // ID de um consultor
            'description' => 'Consultoria para otimização de processos industriais',
            'start_date' => '2024-01-01',
            'end_date' => '2024-03-01',
            'status' => 'Em andamento'
        ]);

        Consultancy::create([
            'id' => 2,
            'uuid' => Str::uuid(),
            'client_uuid' => 2,
            'user_uuid' => 2,
            'description' => 'Consultoria para melhoria de controle de qualidade',
            'start_date' => '2024-04-01',
            'end_date' => '2024-06-01',
            'status' => 'Concluída'
        ]);

        Consultancy::create([
            'id' => 3,
            'uuid' => Str::uuid(),
            'client_uuid' => 3,
            'user_uuid' => 2,
            'description' => 'Consultoria em automação de processos',
            'start_date' => '2024-07-01',
            'end_date' => '2024-09-01',
            'status' => 'Cancelada'
        ]);
    }
}
