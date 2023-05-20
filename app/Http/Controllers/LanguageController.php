<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Set language.
     *
     * @return RedirectResponse
     */
    public function switch($locale)
    {
        App::setLocale($locale);

        session()->put('locale', $locale);

        return redirect()->back();
    }
}
