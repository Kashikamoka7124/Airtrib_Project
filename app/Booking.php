<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\BookingFilters;

class Booking extends Model
{
    /**
     * Get the booking's summary.
     *
     * @param  string  $value
     * @return string
     */
    public function getSummaryAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * Set the booking's summary.
     *
     * @param  string  $value
     * @return void
     */
    public function setSummaryAttribute($value)
    {
        $this->attributes['summary'] = serialize($value);
    }

    /**
     * Get the travelers for the booking.
     */
    public function travelers()
    {
        return $this->hasMany(Traveler::class);
    }

    /**
     * Get the payment associated with the booking.
     */
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    /**
     * Get the customer that owns the booking.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Apply all relevant organization filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\BookingFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, BookingFilters $filters)
    {
        return $filters->apply($query);
    }
}
