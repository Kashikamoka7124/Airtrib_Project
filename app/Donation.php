<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\DonationFilters;

class Donation extends Model
{
    /**
     * Get the customer that owns the donation.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // /**
    //  * Get the organization that owns the donation.
    //  */
    // public function organization($number = null)
    // {
    //     return $this->belongsTo(Organization::class, $number ? 'organization_'.$number : 'organization_id');
    // }

    /**
     * Get the organization that owns the donation.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Get the organization that owns the donation.
     */
    public function organization1()
    {
        return $this->belongsTo(Organization::class, 'organization_1');
    }

    /**
     * Get the organization that owns the donation.
     */
    public function organization2()
    {
        return $this->belongsTo(Organization::class, 'organization_2');
    }

    /**
     * Get the organization that owns the donation.
     */
    public function organization3()
    {
        return $this->belongsTo(Organization::class, 'organization_3');
    }

    /**
     * Apply all relevant organization filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\DonationFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, DonationFilters $filters)
    {
        return $filters->apply($query);
    }
}
