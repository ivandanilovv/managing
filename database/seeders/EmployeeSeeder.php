<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $company = Company::query()->find(1);
        $company->employees()->createMany(
            collect([
                [
                    'name' => 'Ivan',
                    'surname' => 'Danilov',
                    'ssn' => '12345678',
                    'address' => 'Employee address 1',
                ],
                [
                    'name' => 'Jordanco',
                    'surname' => 'Eftimov',
                    'ssn' => '56789034',
                    'address' => 'Employee address 2',
                ],
                [
                    'name' => 'Jovana',
                    'surname' => 'Serdarska',
                    'ssn' => '593850',
                    'address' => 'Employee address 3'
                ],
            ])
        );
    }
}
