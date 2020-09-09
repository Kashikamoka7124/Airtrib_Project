<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Text;
use Laranext\Fields\Fields;

class TravelerFields extends Fields
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
        return [
            Text::make('Name')
                ->value($this->model->name)
                ->sortable(),
            Text::make('Email')
                ->value($this->model->email)
                ->sortable(),
            Text::make('Phone')
                ->value($this->model->phone),
        ];
    }
}
