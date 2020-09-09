<?php

namespace Laranext\Admin\Http\Controllers;

use App\Donation;
use App\Http\Controllers\Controller;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::donations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Donation  $donation
     * @return View
     */
    public function create(Donation $donation)
    {
        return view('views::donations.form', compact('donation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return View
     */
    public function show(Donation $donation)
    {
        return view('views::donations.detail', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return View
     */
    public function edit(Donation $donation)
    {
        return view('views::donations.form', compact('donation'));
    }
}
