<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $customer = auth()->user()->customer()->with('bookings')->first();

        $booking = $id ? $customer->bookings->firstWhere('id', $id) : $customer->bookings->last();

        return view('client.travels', get_defined_vars());
    }
}
