<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceReview;
use Illuminate\Support\Str;

class ServiceReviewSeeder extends Seeder
{
    public function run()
    {
        ServiceReview::create([
            'uuid' => Str::uuid(),
            'activity_id' => 1,
            'client_id' => 1,
            'rating' => 5,
            'comment' => 'Excelente consultoria, superou as expectativas.',
            'date' => '2024-01-30'
        ]);

        ServiceReview::create([
            'uuid' => Str::uuid(),
            'activity_id' => 2,
            'client_id' => 2,
            'rating' => 4,
            'comment' => 'Bom treinamento, mas poderia ter mais conteúdo prático.',
            'date' => '2024-02-08'
        ]);
    }
}
