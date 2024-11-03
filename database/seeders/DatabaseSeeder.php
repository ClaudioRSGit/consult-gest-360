<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ClientSeeder::class,
            ConsultancySeeder::class,
            TrainingSeeder::class,
            TechnicalProjectSeeder::class,
            ActivitySeeder::class,
            PaymentSeeder::class,
            InvoiceSeeder::class,
            ServiceReviewSeeder::class,
        ]);
    }
}
