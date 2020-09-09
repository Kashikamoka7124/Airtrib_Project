<?php

namespace App\Http\Controllers\Api;

use App\Airport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchAirports extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Airport::where('name', 'LIKE', $request->search . '%')
                    ->orWhere('iata', 'LIKE', $request->search . '%')
                    ->orWhere('city', 'LIKE', $request->search . '%')
                    ->take(5)
                    ->get();
    }
}
