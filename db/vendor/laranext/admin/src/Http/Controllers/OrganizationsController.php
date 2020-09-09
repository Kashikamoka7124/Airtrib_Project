<?php

namespace Laranext\Admin\Http\Controllers;

use App\Organization;
use App\Http\Controllers\Controller;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::organizations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Organization  $organization
     * @return View
     */
    public function create(Organization $organization)
    {
        return view('views::organizations.form', compact('organization'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return View
     */
    public function show(Organization $organization)
    {
        return view('views::organizations.detail', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return View
     */
    public function edit(Organization $organization)
    {
        return view('views::organizations.form', compact('organization'));
    }
}
