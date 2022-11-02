<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Industry;
use App\Models\User;
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
            'statistics' => $this->viewStatistics()
        ]);
    }

    public function viewStatistics()
    {
        return [
            ['title' => __('terms.users'), 'count' => User::count('id')],
            ['title' => __('terms.companies'), 'count' => Company::count('id')],
            ['title' => __('terms.industries'), 'count' => Industry::count('id')],
            ['title' => __('terms.employees'), 'count' => Employee::count('id')],
        ];
    }
}
