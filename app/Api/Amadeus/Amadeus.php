<?php

namespace App\Api\Amadeus;

use GuzzleHttp\Client;

class Amadeus
{
    use Concerns\AccessToken;

    /**
     * The HTTP Client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * The custom Guzzle configuration options.
     *
     * @var array
     */
    protected $guzzle = [];

    /**
     * Instantiate Amadeus.
     *
     * @return Void
     */
    function __construct()
    {
        $this->guzzle = [
            'base_uri' => config('services.amadeus.base_url'),
            'headers'  => [
                'Authorization' => 'Bearer ' . $this->getAccessToken()
            ]
        ];
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    protected function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new Client($this->guzzle);
        }

        return $this->httpClient;
    }

    /**
     * Advanced Flights Search.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchFlights($body)
    {
        $response = $this->getHttpClient()->post('/v2/shopping/flight-offers', [
            'http_errors' => false,
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($body)
        ]);

        $data = json_decode($response->getBody(), true);

        $data['status_code'] = $response->getStatusCode();

        return $data;
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function flightSearch($params)
    {
        $response = $this->getHttpClient()->get(
            '/v2/shopping/flight-offers?' . http_build_query($params)
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function flightSearchPost($body)
    {
        $response = $this->getHttpClient()->post('/v2/shopping/flight-offers', [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($body)
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function lowFareSearch($params)
    {
        $response = $this->getHttpClient()->get(
            '/v1/shopping/flight-offers?' . http_build_query($params)
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function offersSearch()
    {
        $response = $this->getHttpClient()->get(
            '/v1/shopping/flight-offers?'
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function citySearch($params)
    {
        $response = $this->getHttpClient()->get(
            '/v1/reference-data/locations?' . http_build_query($params)
        );

        return json_decode($response->getBody(), true);
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function confirmPrice($params, $body)
    {
        $response = $this->getHttpClient()->post(
            '/v1/shopping/flight-offers/pricing?' . http_build_query($params), [
            'http_errors' => false,
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($body)
        ]);

        $data = json_decode($response->getBody(), true);

        $data['status_code'] = $response->getStatusCode();

        return $data;
    }

    /**
     * Get a instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client
     */
    public function bookFlight($body)
    {
        $response = $this->getHttpClient()->post('/v1/booking/flight-orders', [
            'http_errors' => false,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode($body)
        ]);

        $data = json_decode($response->getBody(), true);

        $data['status_code'] = $response->getStatusCode();

        return $data;
    }
}
