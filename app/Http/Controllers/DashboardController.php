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
     */
    public function index(): View
    {
        return view('dashboard', [
            'statistics' => $this->viewStatistics(),
        ]);
    }

    public function viewStatistics()
    {
        return [
            [
                'page' => route('user.index'),
                'title' => __('terms.users'),
                'count' => User::count('id'),
            ],
            [
                'page' => route('company.index'),
                'title' => __('terms.companies'),
                'count' => Company::count('id'),
            ],
            [
                'page' => route('industry.index'),
                'title' => __('terms.industries'),
                'count' => Industry::count('id'),
            ],
            [
                'page' => route('employee.index'),
                'title' => __('terms.employees'),
                'count' => Employee::count('id'),
            ],
        ];
    }
}
