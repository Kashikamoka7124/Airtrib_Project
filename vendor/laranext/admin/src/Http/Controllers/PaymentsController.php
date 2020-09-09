<?php

namespace Laranext\Admin\Http\Controllers;

use App\Payment;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::payments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Payment  $payment
     * @return View
     */
    public function create(Payment $payment)
    {
        return view('views::payments.form', compact('payment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return View
     */
    public function show(Payment $payment)
    {
        return view('views::payments.detail', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return View
     */
    public function edit(Payment $payment)
    {
        return view('views::payments.form', compact('payment'));
    }
}
