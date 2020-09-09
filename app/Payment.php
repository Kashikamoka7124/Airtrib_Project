<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\PaymentFilters;

class Payment extends Model
{
    /**
     * Get the booking that owns the payment.
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    /**
     * Get the customer that owns the payment.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Apply all relevant organization filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\PaymentFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, PaymentFilters $filters)
    {
        return $filters->apply($query);
    }
}
