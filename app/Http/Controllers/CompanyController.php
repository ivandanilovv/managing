<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Psy\Util\Json;

class CompanyController extends Controller
{

    public function index(): AnonymousResourceCollection
    {
        $companies = Company::all();

        return JsonResource::collection($companies);
    }

    public function show(Company $company) {
        $employees = Employee::query()->where('company_id', '=', $company->id)->get();

        return JsonResource::collection($employees);
    }
}
