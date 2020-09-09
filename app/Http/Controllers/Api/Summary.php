<?php

namespace App\Http\Controllers\Api;

use Laranext\Admin\Airport;
use Laranext\Admin\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Summary extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $booking = Booking::where('id', $request->id)->first();

        return unserialize($booking->summary);
    }
}
