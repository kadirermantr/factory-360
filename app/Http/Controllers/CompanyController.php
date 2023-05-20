<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Industry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        return view('company.index', [
            'companies' => Company::with('user')->has('user')->get(),
        ]);
    }

    public function create(): View
    {
        return view('company.create');
    }

    public function store(CompanyRequest $request): RedirectResponse
    {
        Company::create([
            'name' => $request->get('name'),
            'user_id' => Auth::id(),
            'created_at' => now(),
        ]);

        toastr()->success('Company created');

        return redirect()->route('company.index');
    }

    public function show(Company $company): View
    {
        return view('company.show', [
            'company' => $company,
            'employees' => Employee::query()->where('company_id', $company->id)->get(),
            'industries' => Industry::all(),
        ]);
    }

    public function update(CompanyRequest $request, Company $company): RedirectResponse
    {
        $company->update($request->validated());

        $company->industry()->sync($request->get('industry_ids'));

        toastr()->success('Company updated');

        return back();
    }

    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();

        toastr()->success('Company deleted');

        return redirect()->route('company.index');
    }
}
