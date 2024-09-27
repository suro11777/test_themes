<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $theme = session('theme', 'classic');

        return view('themes.'. $theme .'.contact');
    }
}
