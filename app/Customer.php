<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\CustomerFilters;

class Customer extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birth_date',
        'passport_expire',
    ];

    /**
     * Get the user that owns the customer.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the bookings for the customer.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * The organizations that belong to the customer.
     */
    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    /**
     * The country that belong to the customer.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * The corporate type that belong to the customer.
     */
    public function corporateType()
    {
        return $this->belongsTo(CorporateType::class, 'corporate_type');
    }

    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getStripeCardAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setStripeCardAttribute($value)
    {
        $this->attributes['stripe_card'] = serialize($value);
    }

    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getStripeCustomerAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setStripeCustomerAttribute($value)
    {
        $this->attributes['stripe_customer'] = serialize($value);
    }

    /**
     * Apply all relevant organization filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\CustomerFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, CustomerFilters $filters)
    {
        return $filters->apply($query);
    }
}
