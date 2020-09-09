<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laranext\Admin\Filters\OrganizationFilters;

class Organization extends Model
{
    /**
     * Apply all relevant organization filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Admin\OrganizationFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, OrganizationFilters $filters)
    {
        return $filters->apply($query);
    }
}
