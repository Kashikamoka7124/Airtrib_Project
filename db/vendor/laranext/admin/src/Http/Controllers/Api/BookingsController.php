<?php

namespace Laranext\Admin\Http\Controllers\Api;

use App\Booking;
use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Http\Controllers\Controller;
use Laranext\Admin\Fields\BookingFields;
use Laranext\Admin\Filters\BookingFilters;
use Laranext\Admin\Requests\BookingRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\BookingFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(BookingFilters $filters)
    {
        if (request('customer')) {
            return new IndexCollection(
                Booking::whereCustomerId(request('customer'))->filter($filters)->simplePaginate(),
                BookingFields::class
            );
        }

        return new IndexCollection(
            Booking::filter($filters)->simplePaginate(),
            BookingFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function create(Booking $booking)
    {
        return new BookingFields($booking);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Booking $booking)
    {
        return new BookingRequest($request, $booking);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return $booking;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return new BookingFields($booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        return new BookingRequest($request, $booking);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Booking::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Bookings Deleted Successfully!'
                : 'Booking Deleted Successfully!'
        ];
    }
}
