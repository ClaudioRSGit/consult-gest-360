<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;
use Illuminate\Support\Str;

class TrainingSeeder extends Seeder
{
    public function run()
    {
        Training::create([
            'uuid' => Str::uuid(),
            'client_id' => 1,
            'user_id' => 3, // ID de um instrutor
            'description' => 'Formação sobre Lean Manufacturing',
            'start_date' => '2024-01-10',
            'end_date' => '2024-01-15',
            'status' => 'Concluída'
        ]);

        Training::create([
            'uuid' => Str::uuid(),
            'client_id' => 2,
            'user_id' => 3,
            'description' => 'Treinamento de Six Sigma para controle de qualidade',
            'start_date' => '2024-02-05',
            'end_date' => '2024-02-10',
            'status' => 'Em andamento'
        ]);
    }
}
