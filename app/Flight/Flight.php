<?php

namespace App\Flight;

use Illuminate\Http\Request;
use App\Filters\FlightFilters;
use Facades\App\Api\Amadeus\Amadeus;
use App\Api\Amadeus\FlightSearchBody;
use Illuminate\Support\Facades\Cache;

class Flight
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Amadeus
     */
    protected $data;

    /**
     * Instantiate Flight.
     *
     * @return Void
     */
    public function __construct()
    {
        //
    }

    public function results(Request $request)
    {
        $this->request = $request;

        if ($this->request->isFresh) {
            $this->data = $this->getOriginalData();
        }
        else {
            $this->getData();
        }

        $collection = (new FlightFilters($request))
                        ->apply(empty($this->data['data']) ? [] : $this->data['data']);

        return [
            'current_page' => $page = $this->request->page ?? 1,
            'per_page' => $perPage = 10,
            'total' => $total = $collection->count(),
            'next_page' => $nextPage = ($total > ($perPage * $page)) ? $page + 1 : null,
            'data' => $collection->forPage($page, $perPage)->values(),
            'airLines' => $this->getAirLines(),
            'top' => $this->getTop(),
            'dictionaries' => empty($this->data['dictionaries']) ? [] : $this->data['dictionaries'],
        ];
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function getData()
    {
        $this->data = Cache::get($this->request->session.':flight_results') ?? $this->getOriginalData();
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function getOriginalData()
    {
        if (config('app.url') == 'http://airtrib.test') {
            // Key for oneway trip: test_flight_results_oneway
            // Key for roundtrip: test_flight_results
            // Key for multi: test_flight_results_multi
            // Cache::forget('test_flight_results_multi');

            if ($this->request->tripType == 'multicity') {
                $response = Cache::rememberForever('multicity_flight_results', function () {
                    return Amadeus::searchFlights(
                        new FlightSearchBody($this->request)
                    );
                });
            }
            else {
                $response = Cache::rememberForever('test_flight_results', function () {
                    return Amadeus::searchFlights(
                        new FlightSearchBody($this->request)
                    );
                });
            }
        }
        else {
            $response = Amadeus::searchFlights(
                new FlightSearchBody($this->request)
            );
        }

        Cache::forget($this->request->session.':flight_results');

        Cache::remember($this->request->session.':flight_results', now()->addDay(), function () use ($response) {
            return $response;
        });

        return $response;
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function getAirLines()
    {
        return collect(empty($this->data['data']) ? [] : $this->data['data'])->map(function($flight) {
            return [
                'label' => $flight['itineraries'][0]['segments'][0]['carrierCode'],
                'value' => $flight['itineraries'][0]['segments'][0]['carrierCode']
            ];
        })
        ->unique()
        ->values();
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function getTop()
    {
        return [
            'best' => $this->getBest(empty($this->data['data']) ? [] : $this->data['data']),
            'cheapest' => empty($this->data['data']) ? [] : $this->data['data'][0],
            'fastest' => $this->getFastest(empty($this->data['data']) ? [] : $this->data['data']),
        ];
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function getBest($flights)
    {
        return collect($flights)->sortBy(function($flight) {
            return [$flight['price']['total'], $flight['itineraries'][0]['duration']];
        })->first();
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function getFastest($flights)
    {
        return collect($flights)->sortBy(function($flight) {
            return $flight['itineraries'][0]['duration'];
            // $interval = new \DateInterval($flight['itineraries'][0]['duration']);
            // return ($interval->d * 24 * 60) + ($interval->h * 60) + $interval->i;
        })->first();
    }
}
