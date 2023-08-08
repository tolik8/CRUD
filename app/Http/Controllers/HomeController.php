<?php

namespace App\Http\Controllers;

use Config;
use Cookie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function Locale($lang): RedirectResponse
    {
        if (array_key_exists($lang, Config::get('app.locales'))) {
            Cookie::queue(Cookie::forget('lang'));
            Cookie::queue(Cookie::make('lang', $lang, 525600)); // 60*24*365 = 1 year
        }
        return back();
    }
}
