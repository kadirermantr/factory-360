<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    public function switch(string $language): RedirectResponse
    {
        if ($this->isLanguageSupported($language)) {
            session()->put('lang', $language);
        }

        return redirect()->back();
    }

    public function isLanguageSupported(string $language): bool
    {
        return array_key_exists($language, config('app.languages'));
    }
}
