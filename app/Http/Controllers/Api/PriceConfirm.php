<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Facades\App\Api\Amadeus\Amadeus;
use Illuminate\Support\Facades\Cache;

class PriceConfirm extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validateRequest($request);

        $params = [
            'include' => 'credit-card-fees,bags,other-services',
            'forceClass' => 'true'
        ];

        $body = [
            'data' => [
                'type' => 'flight-offers-pricing',
                'flightOffers' => []
            ]
        ];

        $body['data']['flightOffers'][] = $request->flight;

        if (config('app.url') == 'http://airtrib.test') {
            $response = Cache::rememberForever('test_flight_confirm_price', function () use ($params, $body) {
                return Amadeus::confirmPrice($params, $body);
            });
        }
        else {
            $response = Amadeus::confirmPrice($params, $body);
        }

        if ($response['status_code'] != 200 && $response['status_code'] != 201) {
            return ['message' => "We couldn't process this flight in demo!"];
        }

        // Price::create([
        //     'email' => $request->travelers[0]['email'],
        //     'flight' => serialize($request->flight),
        //     'response' => serialize($response),
        // ]);

        Cache::forget($request->session . ':current_confirmed_flight_price');

        Cache::remember($request->session . ':current_confirmed_flight_price', now()->addDay(), function () use ($response) {
            return $response;
        });

        return $response;

        // return Cache::rememberForever('price-confirm', function () use ($params, $body) {
        //     return Amadeus::confirmPrice($params, $body);
        // });
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validateRequest(Request $request)
    {
        $request->validate([
            'flight.id' => 'required',
            // 'travelers.0.password' => 'required',
            // 'travelers.0.email' => 'required|email|unique:users,email',

            // 'travelers.*.gender' => 'required',
            // 'travelers.*.firstName' => 'required',
            // 'travelers.*.lastName' => 'required',
            // 'travelers.*.email' => 'required|email',
            // 'travelers.*.passport' => 'required',
            // 'travelers.*.passportExpire' => 'required',
            // 'travelers.*.birthDate' => 'required',
        ]);
    }
}
