<?php

namespace Laranext\Admin\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::customers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Customer  $customer
     * @return View
     */
    public function create(Customer $customer)
    {
        return view('views::customers.form', compact('customer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return View
     */
    public function show(Customer $customer)
    {
        return view('views::customers.detail', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return View
     */
    public function edit(Customer $customer)
    {
        return view('views::customers.form', compact('customer'));
    }
}
