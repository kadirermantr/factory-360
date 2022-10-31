<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Industry;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('dashboard', [
            'statistics' => [
                ['title' => trans('terms.users'), 'count' => User::count('id')],
                ['title' => trans('terms.companies'), 'count' => Company::count('id')],
                ['title' => trans('terms.industries'), 'count' => Industry::count('id')],
                ['title' => trans('terms.employees'), 'count' => Employee::count('id')],
            ]
        ]);
    }

    /**
     * Set language.
     *
     * @param $locale
     * @return RedirectResponse
     */
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
