<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\AirportFilters;

class Airport extends Model
{
    /**
     * Apply all relevant airport filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\AirportFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, AirportFilters $filters)
    {
        return $filters->apply($query);
    }
}
