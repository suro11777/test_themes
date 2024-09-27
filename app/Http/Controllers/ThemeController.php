<?php

namespace App\Http\Controllers;

use App\Http\Requests\SwitchThemeRequest;
use App\Services\ThemeService;
use Illuminate\Http\RedirectResponse;

class ThemeController extends Controller
{

    public function __construct(protected ThemeService $service)
    {
    }

    public function switchTheme(SwitchThemeRequest $request): RedirectResponse
    {
        $this->service->switchTheme($request->validated());

        return redirect()->back();
    }
}
