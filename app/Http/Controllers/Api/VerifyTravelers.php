<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyTravelers extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // return $request->all();
        $request->validate([
            'travelers.*.gender' => 'required',
            'travelers.*.firstName' => 'required',
            'travelers.*.lastName' => 'required',
            'travelers.*.email' => 'required|email',
            'travelers.*.birthDate' => 'required',
            'travelers.*.phone' => 'required',
            'travelers.*.countryCode' => 'required|max:3|regex:/^[0-9]{1,3}/i',
            'travelers.*.phone' => 'required|numeric|digits_between:5,15',
        ]);

        return 'done';
    }
}
