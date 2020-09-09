<?php

namespace Laranext\Admin\Http\Controllers;

use App\Traveler;
use App\Http\Controllers\Controller;

class TravelersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::travelers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Traveler  $traveler
     * @return View
     */
    public function create(Traveler $traveler)
    {
        return view('views::travelers.form', compact('traveler'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return View
     */
    public function show(Traveler $traveler)
    {
        return view('views::travelers.detail', compact('traveler'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return View
     */
    public function edit(Traveler $traveler)
    {
        return view('views::travelers.form', compact('traveler'));
    }
}
