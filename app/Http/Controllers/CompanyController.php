<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\CompanyIndustries;
use App\Models\Employee;
use App\Models\Industry;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('company.index', [
            'companies' => Company::with('user')->has('user')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyRequest  $request
     * @return RedirectResponse
     */
    public function store(CompanyRequest $request)
    {
        Company::create([
            'name' => $request->name,
            'user_id' => Auth::id(),
            'created_at' => now(),
        ]);

        toastr()->success('Company created');

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Company  $company
     * @return View
     */
    public function show(Company $company)
    {
        return view('company.show', [
            'company' => $company,
            'employees' => Employee::query()->where('company_id', $company->id)->get(),
            'industries' => Industry::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CompanyRequest  $request
     * @param  Company  $company
     * @return RedirectResponse
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());

        if ($request->industry_ids) {
            CompanyIndustries::where('company_id', $company->id)->delete();

            foreach ($request->industry_ids as $industryId) {
                $companyIndustry = CompanyIndustries::where([
                    'company_id' => $company->id,
                    'industry_id' => $industryId,
                ])->get();

                if ($companyIndustry->count() == 0) {
                    CompanyIndustries::create([
                        'company_id' => $company->id,
                        'industry_id' => $industryId,
                    ]);
                }
            }
        } else {
            CompanyIndustries::where('company_id', $company->id)->delete();
        }

        toastr()->success('Company updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Company  $company
     * @return RedirectResponse
     */
    public function destroy(Company $company)
    {
        $company->delete();

        toastr()->success('Company deleted');

        return redirect()->route('company.index');
    }
}
