<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::query()->create([
            'name' => 'Venikom',
            'address' => 'Company address 1'
        ]);
        Company::query()->create([
            'name' => 'Bike Computer',
            'address' => 'Company address 2'
        ]);
        Company::query()->create([
            'name' => 'Digitalhub',
            'address' => 'Company address 3'
        ]);
    }
}
