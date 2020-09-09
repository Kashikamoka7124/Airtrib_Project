<?php

namespace Laranext\Admin\Http\Controllers;

use App\Booking;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::bookings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Booking  $booking
     * @return View
     */
    public function create(Booking $booking)
    {
        return view('views::bookings.form', compact('booking'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return View
     */
    public function show(Booking $booking)
    {
        return view('views::bookings.detail', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return View
     */
    public function edit(Booking $booking)
    {
        return view('views::bookings.form', compact('booking'));
    }
}
