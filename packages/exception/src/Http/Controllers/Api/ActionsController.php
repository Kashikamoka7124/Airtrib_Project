<?php

namespace Laranext\Exception\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  $resource
     * @return \Illuminate\Http\Response
     */
    public function index($resource)
    {
        $class = 'Laranext\Exception\Actions\\' . Str::singular(Str::studly($resource)) . 'Actions';

        return (new $class)->actions();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $resource
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $resource)
    {
        $class = 'Laranext\Exception\Actions\\' . Str::singular(Str::studly($resource)) . 'Actions';

        return (new $class)->performAction($request);
    }
}
