<?php

namespace Database\Seeders;

use App\Models\RefPaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefPaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            ['method_name' => 'Cash'],
            ['method_name' => 'Credit Card'],
            ['method_name' => 'Debit Card'],
            ['method_name' => 'Online Banking'],
            ['method_name' => 'Cheque'],
            ['method_name' => 'Bank Transfer'],
            ['method_name' => 'Mobile Payment'],
        ];

        foreach ($paymentMethods as $paymentMethod) {
            RefPaymentMethod::create($paymentMethod);
        }
    }
}
