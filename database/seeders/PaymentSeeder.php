<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        Payment::create([
            'uuid' => Str::uuid(),
            'client_id' => 1,
            'amount' => 5000.00,
            'date' => '2024-01-20',
            'status' => 'Pago',
            'type' => 'consultancy'
        ]);

        Payment::create([
            'uuid' => Str::uuid(),
            'client_id' => 2,
            'amount' => 3000.00,
            'date' => '2024-02-15',
            'status' => 'Pendente',
            'type' => 'training'
        ]);
    }
}
