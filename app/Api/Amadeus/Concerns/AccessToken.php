<?php

namespace App\Api\Amadeus\Concerns;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

trait AccessToken
{
    /**
     * Get access token.
     *
     * @return string
     */
    protected function getAccessToken()
    {
        return Cache::remember('amadeus:access_token', now()->addMinutes(1), function () {
            $response = (new Client)->post(config('services.amadeus.base_url') . '/v1/security/oauth2/token', [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => config('services.amadeus.key'),
                    'client_secret' => config('services.amadeus.secret')
                ]
            ]);

            return json_decode($response->getBody(), true)['access_token'];
        });
    }
}
