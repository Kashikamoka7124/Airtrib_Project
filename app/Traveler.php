<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\TravelerFilters;

class Traveler extends Model
{
    /**
     * Get the traveler's phone.
     */
    public function getPhoneAttribute($value): string
    {
        return $this->country_code .' '. $value;
    }

    /**
     * Get the traveler's birth date.
     */
    public function getBirthDateAttribute($date): string
    {
        return Carbon::parse($date)->toFormattedDateString();
    }

    /**
     * Apply all relevant organization filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\TravelerFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, TravelerFilters $filters)
    {
        return $filters->apply($query);
    }
}
