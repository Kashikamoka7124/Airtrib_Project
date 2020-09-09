<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class FiltersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  $resource
     * @return \Illuminate\Http\Response
     */
    public function index($resource)
    {
        $class = 'Laranext\Admin\Filters\\' . Str::singular(Str::studly($resource)) . 'Filters';

        return (new $class)->filters();
    }
}
