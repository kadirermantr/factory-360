<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::with('company')->has('company')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('employee.create', [
            'companies' => Company::all('id', 'name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());

        toastr()->success('Employee created');

        return $this->show($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $employee
     * @return View
     */
    public function show(Employee $employee)
    {
        return view('employee.show', [
            'employee' => $employee,
            'companies' => Company::all('id', 'name'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmployeeRequest  $request
     * @param  Employee  $employee
     * @return RedirectResponse
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        toastr()->success('Employee updated');

        return back();
    }
}
