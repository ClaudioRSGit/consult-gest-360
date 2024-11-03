<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use Illuminate\Support\Str;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        Invoice::create([
            'uuid' => Str::uuid(),
            'client_id' => 1,
            'amount' => 8000.00,
            'issue_date' => '2024-01-25',
            'due_date' => '2024-02-25',
            'status' => 'Pendente'
        ]);

        Invoice::create([
            'uuid' => Str::uuid(),
            'client_id' => 2,
            'amount' => 4500.00,
            'issue_date' => '2024-02-10',
            'due_date' => '2024-03-10',
            'status' => 'Pago'
        ]);
    }
}
