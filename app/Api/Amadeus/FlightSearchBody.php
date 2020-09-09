<?php

namespace App\Api\Amadeus;

use JsonSerializable;
use Illuminate\Http\Request;

class FlightSearchBody implements JsonSerializable
{
    /**
     * The displayable name of the filter.
     *
     * @var array
     */
    protected $request;

    /**
     * The displayable name of the filter.
     *
     * @var array
     */
    protected $body = [];

    /**
     * The displayable name of the filter.
     *
     * @var array
     */
    protected $traveler = 1;

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|callable|null  $attribute
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->initBody();
        $this->prepareBody();
    }

    /**
     * {@inheritdoc}
     */
    protected function initBody()
    {
        $this->body = [
            'currencyCode' => 'USD',
            'originDestinations' => [],
            'travelers' => [],
            'sources' => ['GDS'],
            'searchCriteria' => [
                'flightFilters' => [
                    'cabinRestrictions' => [
                        [
                            'cabin' => 'BUSINESS',
                            'coverage' => 'ALL_SEGMENTS',
                            'originDestinationIds' => ['1']
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareBody()
    {
        // $this->currency();
        $this->outbound();
        $this->adults();
        $this->children();

        if ($this->request->tripType == 'roundtrip') {
            $this->return();
        } elseif ($this->request->tripType == 'multicity') {
            $this->multiCity();
        }

        if ($this->request->flyoutSame) {
            $this->flyoutSame();
        }

        if (isset($this->request->stop) && $this->request->stop >= 0) {
            $this->stops($this->request->stop);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function currency($currency)
    {
        $this->body['currencyCode'] = $currency;
    }

    /**
     * {@inheritdoc}
     */
    protected function outbound()
    {
        $this->body['originDestinations'][] = [
            'id' => '1',
            'originLocationCode' => $this->request->from,
            'destinationLocationCode' => $this->request->to,
            'departureDateTimeRange' => [
                'date' => $this->request->departureDate,
                // 'time' => '10:00:00'
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function return()
    {
        $this->body['originDestinations'][] = [
            'id' => '2',
            'originLocationCode' => $this->request->to,
            'destinationLocationCode' => $this->request->from,
            'departureDateTimeRange' => [
                'date' => $this->request->returnDate,
                // 'time' => '10:00:00'
            ]
        ];

        $this->body['searchCriteria']['flightFilters']['cabinRestrictions'][0]['originDestinationIds'][] = '2';
    }

    /**
     * {@inheritdoc}
     */
    protected function multiCity()
    {
        if ($this->request->from2 && $this->request->to2 && $this->request->departureDate2) {
            $this->body['originDestinations'][] = [
                'id' => '2',
                'originLocationCode' => $this->request->from2,
                'destinationLocationCode' => $this->request->to2,
                'departureDateTimeRange' => [
                    'date' => $this->request->departureDate2,
                ]
            ];

            $this->body['searchCriteria']['flightFilters']['cabinRestrictions'][0]['originDestinationIds'][] = '2';
        }

        if ($this->request->from3 && $this->request->to3 && $this->request->departureDate3) {
            $this->body['originDestinations'][] = [
                'id' => '3',
                'originLocationCode' => $this->request->from3,
                'destinationLocationCode' => $this->request->to3,
                'departureDateTimeRange' => [
                    'date' => $this->request->departureDate3,
                ]
            ];

            $this->body['searchCriteria']['flightFilters']['cabinRestrictions'][0]['originDestinationIds'][] = '3';
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function adults()
    {
        for (; $this->traveler <= $this->request->adults; $this->traveler++) {
            $this->body['travelers'][] = [
                'id' => $this->traveler,
                'travelerType' => 'ADULT',
                'fareOptions' => ['STANDARD']
            ];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function children()
    {
        for ($i = 1; $i <= $this->request->children; $i++) {
            $this->body['travelers'][] = [
                'id' => $this->traveler,
                'travelerType' => 'CHILD',
                'fareOptions' => ['STANDARD']
            ];
            $this->traveler++;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function flyoutSame()
    {
        $this->body['searchCriteria']['flightFilters']['returnToDepartureAirport'] = 'true';
        $this->body['searchCriteria']['flightFilters']['connectionRestriction']['airportChangeAllowed'] = 'false';
    }

    /**
     * {@inheritdoc}
     */
    protected function stops($stops)
    {
        $this->body['searchCriteria']['flightFilters']['connectionRestriction']['maxNumberOfConnections'] = $stops;
    }

    /**
     * Prepare the body for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->body;
    }
}
