<?php

namespace Laranext\Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class LanguageSettings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function __invoke($language)
    {
        return view('views::language', compact('language'));
    }
}
