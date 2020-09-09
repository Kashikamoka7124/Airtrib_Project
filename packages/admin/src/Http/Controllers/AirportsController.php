<?php

namespace Laranext\Admin\Http\Controllers;

use App\Airport;
use App\Http\Controllers\Controller;

class AirportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::airports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Airport  $airport
     * @return View
     */
    public function create(Airport $airport)
    {
        return view('views::airports.form', compact('airport'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Airport  $airport
     * @return View
     */
    public function show(Airport $airport)
    {
        return view('views::airports.detail', compact('airport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airport  $airport
     * @return View
     */
    public function edit(Airport $airport)
    {
        return view('views::airports.form', compact('airport'));
    }
}
