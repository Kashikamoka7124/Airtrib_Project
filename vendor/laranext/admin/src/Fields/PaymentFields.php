<?php

namespace Laranext\Admin\Fields;

use Laranext\Fields\Link;
use Laranext\Fields\Text;
use Laranext\Fields\Fields;

class PaymentFields extends Fields
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

            Link::make('Booking')
                ->value('Booking #' . $this->model->booking_id)
                ->url('bookings/' . $this->model->booking_id),

            Link::make('Customer')
                ->value($this->model->customer->name)
                ->url('customers/' . $this->model->customer_id),

            Text::make('Amount')
                ->value('$'.$this->model->amount),
        ];
    }
}
