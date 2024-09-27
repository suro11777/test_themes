<?php

namespace App\Services;

class ThemeService
{
    public function switchTheme(array $attributes)
    {
        session(['theme' => $attributes['theme']]);
    }
}
