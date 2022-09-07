<?php

namespace Database\Seeders;

use App\Models\Employee;
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
        $employee = Employee::query()->find(1);
        $employee->salaries()->createMany(
            collect([
                [
                    'amount' => '1000',
                    'date_of_payment' => '01.03.2022',
                ],
                [
                    'amount' => '2000',
                    'date_of_payment' => '01.04.2022',
                ],
                [
                    'amount' => '3000',
                    'date_of_payment' => '01.05.2022',
                ],
            ])
        );
        $employee = Employee::query()->find(2);
        $employee->salaries()->createMany(
            collect([
                [
                    'amount' => '2000',
                    'date_of_payment' => '01.03.2022',
                ],
                [
                    'amount' => '1500',
                    'date_of_payment' => '01.04.2022',
                ],
                [
                    'amount' => '1800',
                    'date_of_payment' => '01.05.2022',
                ],
            ])
        );
        $employee = Employee::query()->find(3);
        $employee->salaries()->createMany(
            collect([
                [
                    'amount' => '3200',
                    'date_of_payment' => '01.03.2022',
                ],
                [
                    'amount' => '1100',
                    'date_of_payment' => '01.04.2022',
                ],
                [
                    'amount' => '1800',
                    'date_of_payment' => '01.05.2022',
                ],
            ])
        );
    }
}
