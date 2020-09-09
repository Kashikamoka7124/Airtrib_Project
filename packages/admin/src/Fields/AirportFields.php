<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Text;
use Laranext\Fields\Fields;

class AirportFields extends Fields
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

            Text::make('Iata')
                ->value($this->model->iata),

            Text::make('City')
                ->value($this->model->city),

            Text::make('City Iata')
                ->value($this->model->city_iata),

            Text::make('Country')
                ->value($this->model->country),
        ];
    }

    /**
     * Get the index fields displayed by the resource.
     *
     * @return array
     */
    public function indexFields()
    {
        return [
            Text::make('Name')
                ->value($this->model->name)
                ->sortable(),
            Text::make('Iata')
                ->value($this->model->iata)
                ->sortable(),
            Text::make('City')
                ->value($this->model->city)
                ->sortable(),
            Text::make('City Iata')
                ->value($this->model->city_iata)
                ->sortable(),
            Text::make('Country')
                ->value($this->model->country)
                ->sortable(),
        ];
    }
}
