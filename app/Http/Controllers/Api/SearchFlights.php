<?php

namespace App\Http\Controllers\Api;

use App\Flight\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchFlights extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Flight $flight)
    {
        $request->validate([
            'from' => 'required|alpha',
            'to' => 'required|alpha',
            'departureDate' => 'required|date_format:Y-m-d',
            'tripType' => 'required|alpha',
            'adults' => 'required|numeric',
            'children' => 'nullable|numeric',
            'returnDate' => 'nullable|required_if:tripType,roundtrip|date_format:Y-m-d',
            'stop' => 'nullable',
            'flyoutSame' => 'nullable|boolean'
        ]);

        return $flight->results($request);
    }
}
