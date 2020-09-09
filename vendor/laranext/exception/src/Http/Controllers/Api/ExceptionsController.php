<?php

namespace Laranext\Exception\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use Laranext\Exception\Exception;
use App\Http\Controllers\Controller;
use Laranext\Exception\Filters\ExceptionFilters;
use Laranext\Exception\Fields\ExceptionFields;
use Laranext\Exception\Requests\ExceptionRequest;

class ExceptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Exception\Filters\ExceptionFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(ExceptionFilters $filters)
    {
        return new IndexCollection(
            Exception::filter($filters)->simplePaginate(),
            ExceptionFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function create(Exception $exception)
    {
        return new ExceptionFields($exception);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laranext\Exception\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Exception $exception)
    {
        return new ExceptionRequest($request, $exception);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function show(Exception $exception)
    {
        return $exception;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function edit(Exception $exception)
    {
        return new ExceptionFields($exception);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laranext\Exception\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exception $exception)
    {
        return new ExceptionRequest($request, $exception);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Exception::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Exceptions Deleted Successfully!'
                : 'Exception Deleted Successfully!'
        ];
    }
}
