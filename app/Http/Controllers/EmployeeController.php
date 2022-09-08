<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeController extends Controller
{
    //
    public function employeeSalaries(Employee $employee) {

        $salaries = Salary::query()->where('employee_id', '=', $employee->id)->get('amount');

        return JsonResource::collection($salaries);
    }

    public function averageSalary(Employee $employee) {
        $average = Salary::query()->where('employee_id', '=', $employee->id)->average('amount');

        return JsonResource::make(collect($average));
    }
}
