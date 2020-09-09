<?php

namespace Laranext\Exception;

use Illuminate\Database\Eloquent\Model;
use Laranext\Exception\Filters\ExceptionFilters;

class Exception extends Model
{
    /**
     * Apply all relevant exception filters.
     *
     * @param  Builder       $query
     * @param  Laranext\Exception\ExceptionFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, ExceptionFilters $filters)
    {
        return $filters->apply($query);
    }
}
