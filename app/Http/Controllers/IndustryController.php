<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndustryRequest;
use App\Models\Industry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('industry.index', [
            'industries' => Industry::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('industry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param IndustryRequest $request
     * @return RedirectResponse
     */
    public function store(IndustryRequest $request)
    {
        Industry::create($request->validated());

        toastr()->success('Industry created');

        return redirect()->route('industry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Industry $industry
     * @return View
     */
    public function show(Industry $industry)
    {
        return view('industry.show', [
            'industry' => $industry
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param IndustryRequest $request
     * @param Industry $industry
     * @return RedirectResponse
     */
    public function update(IndustryRequest $request, Industry $industry)
    {
        $industry->update($request->validated());

        toastr()->success('Industry updated');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Industry $industry
     * @return RedirectResponse
     */
    public function destroy(Industry $industry)
    {
        $industry->delete();

        toastr()->success('Industry deleted');

        return redirect()->route('industry.index');
    }
}
