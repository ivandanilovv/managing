<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salary::query()->create([
            'amount' => '1000',
            'date_of_payment' => '01.03.2022',
        ]);
        Salary::query()->create([
            'amount' => '2000',
            'date_of_payment' => '01.04.2022',
        ]);
        Salary::query()->create([
            'amount' => '3000',
            'date_of_payment' => '01.05.2022',
        ]);

        Salary::query()->create([
            'amount' => '2000',
            'date_of_payment' => '01.03.2022',
        ]);
        Salary::query()->create([
            'amount' => '1500',
            'date_of_payment' => '01.04.2022',
        ]);
        Salary::query()->create([
            'amount' => '1800',
            'date_of_payment' => '01.05.2022',
        ]);

        Salary::query()->create([
            'amount' => '3200',
            'date_of_payment' => '01.03.2022',
        ]);
        Salary::query()->create([
            'amount' => '1100',
            'date_of_payment' => '01.04.2022',
        ]);
        Salary::query()->create([
            'amount' => '1800',
            'date_of_payment' => '01.05.2022',
        ]);
    }
}
