<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
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
