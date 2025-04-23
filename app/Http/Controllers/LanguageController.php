<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch the application language.
     *
     * @param string $locale
     * @return RedirectResponse
     */
    public function switch(Request $request): RedirectResponse
    {
        // Validate the locale input
        $request->validate([
            'locale' => 'required|in:en,sl', // Only allow 'en' or 'sl'
        ]);

        // Set the locale based on the request input
        // This is a fallback in case the validation fails

        $locale = $request->input('locale', 'sl'); // Default to 'sl' if no locale is provided

        if (in_array($locale, ['en', 'sl'])) {
            // dd($locale);
            Session::put('locale', $locale);
            App::setLocale($locale);
        }

        // dd(app()->getLocale());

        return redirect()->back();
    }
}
