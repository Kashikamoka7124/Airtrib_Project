<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Traveler;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\TravelerFilters;
use Laranext\Admin\Fields\TravelerFields;
use Laranext\Admin\Requests\TravelerRequest;

class TravelersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\TravelerFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(TravelerFilters $filters)
    {
        if (request('booking')) {
            return new IndexCollection(
                Traveler::whereBookingId(request('booking'))->filter($filters)->simplePaginate(),
                TravelerFields::class
            );
        }

        return new IndexCollection(
            Traveler::filter($filters)->simplePaginate(),
            TravelerFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function create(Traveler $traveler)
    {
        return new TravelerFields($traveler);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Traveler $traveler)
    {
        return new TravelerRequest($request, $traveler);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function show(Traveler $traveler)
    {
        return $traveler;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function edit(Traveler $traveler)
    {
        return new TravelerFields($traveler);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traveler $traveler)
    {
        return new TravelerRequest($request, $traveler);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Traveler::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Travelers Deleted Successfully!'
                : 'Traveler Deleted Successfully!'
        ];
    }
}
