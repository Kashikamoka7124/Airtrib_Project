<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Link;
use Laranext\Fields\Text;
use Laranext\Fields\Fields;

class BookingFields extends Fields
{
    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Name')
                ->value($this->model->name),
        ];
    }

    /**
     * Get the index fields displayed by the resource.
     *
     * @return array
     */
    public function indexFields()
    {
        // $response = unserialize($this->model->response);
        $flight = $this->model->summary;

        // if (count($response['data']['flightOffers'][0]['itineraries']) > 1) {
        //     $to = end($response['data']['flightOffers'][0]['itineraries'][1]['segments'])['arrival']['iataCode'];
        // }
        // else {
        //     $to = end($response['data']['flightOffers'][0]['itineraries'][0]['segments'])['arrival']['iataCode'];
        // }

        return [
            Text::make('ID')
                ->value($this->model->id),

            Link::make('Customer')
                ->value($this->model->customer->name)
                ->url('customers/' . $this->model->customer_id),

            Text::make('From')
                ->value($flight['from']['name']),

            Text::make('To')
                ->value($flight['to']['name']),

            Text::make('Departure Date')
                ->value($flight['departureDate']),
        ];
    }
}
