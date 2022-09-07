<?php

namespace Database\Seeders;

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
    public function run()
    {
        Employee::query()->create([
            'name' => 'Ivan',
            'surname' => 'Danilov',
            'ssn' => '1234567890123',
            'address' => 'Employee address 1'
        ]);
        Employee::query()->create([
            'name' => 'Jordanco',
            'surname' => 'Eftimov',
            'ssn' => '5678903475432',
            'address' => 'Employee address 2'
        ]);
        Employee::query()->create([
            'name' => 'Jovana',
            'surname' => 'Serdarska',
            'ssn' => '5938503512367',
            'address' => 'Employee address 3'
        ]);
    }
}
