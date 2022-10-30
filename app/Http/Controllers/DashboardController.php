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
            'statistics' => [
                ['title' => 'Users', 'count' => User::count('id')],
                ['title' => 'Companies', 'count' => Company::count('id')],
                ['title' => 'Industries', 'count' => Industry::count('id')],
                ['title' => 'Employees', 'count' => Employee::count('id')],
            ]
        ]);
    }
}
