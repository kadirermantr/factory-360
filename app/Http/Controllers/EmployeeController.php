<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function index(): View
    {
        return view('employee.index', [
            'employees' => Employee::with('company')->has('company')->get(),
        ]);
    }

    public function create(): View
    {
        return view('employee.create', [
            'companies' => Company::all('id', 'name'),
        ]);
    }

    public function store(EmployeeRequest $request): View
    {
        $employee = Employee::create($request->validated());

        toastr()->success('Employee created');

        return $this->show($employee);
    }

    public function show(Employee $employee): View
    {
        return view('employee.show', [
            'employee' => $employee,
            'companies' => Company::all('id', 'name'),
        ]);
    }

    public function update(EmployeeRequest $request, Employee $employee): RedirectResponse
    {
        $employee->update($request->validated());

        toastr()->success('Employee updated');

        return back();
    }
}
