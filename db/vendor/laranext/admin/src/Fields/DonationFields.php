<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Link;
use Laranext\Fields\Text;
use Laranext\Fields\Fields;

class DonationFields extends Fields
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
        $organizations = optional($this->model->organization)->name ??
            optional($this->model->organization1)->name .', '. optional($this->model->organization2)->name .', '. optional($this->model->organization3)->name;

        // // $organizations = 'optional($this->model->organization)->name';
        // $organizations = 's';

        return [
            Text::make('ID')
                ->value($this->model->id),

            Link::make('Customer')
                ->value($this->model->customer->name)
                ->url('customers/' . $this->model->customer_id),

            Text::make('Organizations')
                ->value($organizations),

            Text::make('Amount')
                ->value('$'.$this->model->amount)
        ];
    }
}
