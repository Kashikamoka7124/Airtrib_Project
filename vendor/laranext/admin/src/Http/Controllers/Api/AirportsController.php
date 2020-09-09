<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Airport;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\AirportFilters;
use Laranext\Admin\Fields\AirportFields;
use Laranext\Admin\Requests\AirportRequest;

class AirportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\AirportFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(AirportFilters $filters)
    {
        return new IndexCollection(
            Airport::filter($filters)->simplePaginate(),
            AirportFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function create(Airport $airport)
    {
        return new AirportFields($airport);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Airport $airport)
    {
        return new AirportRequest($request, $airport);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        return $airport;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(Airport $airport)
    {
        return new AirportFields($airport);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {
        return new AirportRequest($request, $airport);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Airport::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Airports Deleted Successfully!'
                : 'Airport Deleted Successfully!'
        ];
    }
}
