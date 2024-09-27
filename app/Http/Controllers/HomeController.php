<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $theme = session('theme', 'classic');

        return view('themes.'. $theme .'.home');
    }
}
