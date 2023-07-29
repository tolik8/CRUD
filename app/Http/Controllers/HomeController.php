<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Cookie;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function setLocale($lang)
    {
        if (array_key_exists($lang, Config::get('app.locales'))) {
            Cookie::queue(Cookie::forget('lang'));
            Cookie::queue(Cookie::make('lang', $lang, 525600)); // 60*24*365 = 1 year
        }
        return back();
    }
}
