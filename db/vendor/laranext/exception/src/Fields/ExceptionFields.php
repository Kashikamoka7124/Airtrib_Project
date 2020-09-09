<?php

namespace Laranext\Exception\Fields;

use Laranext\Fields\Link;
use Laranext\Fields\Text;
use Laranext\Fields\Fields;

class ExceptionFields extends Fields
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
            Text::make('ID')
                ->value($this->model->id),
            Text::make('Date')
                ->value($this->model->created_at->toDayDateTimeString()),
            Text::make('Message')
                ->value($this->model->message),
            Link::make('JSON')
                ->value('View As JSON')
                ->url('/exceptions/'.$this->model->id.'/json'),
            // Text::make('Line')
            //     ->value($this->model->line),
            // Text::make('File')
            //     ->value($this->model->file),
        ];
    }
}
