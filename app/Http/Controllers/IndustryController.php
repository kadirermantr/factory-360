<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndustryRequest;
use App\Models\Industry;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class IndustryController extends Controller
{
    public function index(): View
    {
        return view('industry.index', [
            'industries' => Industry::all(),
        ]);
    }

    public function create(): View
    {
        return view('industry.create');
    }

    public function store(IndustryRequest $request): RedirectResponse
    {
        Industry::create($request->validated());

        toastr()->success('Industry created');

        return redirect()->route('industry.index');
    }

    public function show(Industry $industry): View
    {
        return view('industry.show', [
            'industry' => $industry,
        ]);
    }

    public function update(IndustryRequest $request, Industry $industry): RedirectResponse
    {
        $industry->update($request->validated());

        toastr()->success('Industry updated');

        return back();
    }

    public function destroy(Industry $industry): RedirectResponse
    {
        $industry->delete();

        toastr()->success('Industry deleted');

        return redirect()->route('industry.index');
    }
}
