<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Text;
use Laranext\Fields\Fields;
use Laranext\Fields\Password;

class UserFields extends Fields
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

            Text::make('Email')
                ->value($this->model->email),

            Password::make('Password'),
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
        ];
    }
}
