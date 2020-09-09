<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Donation;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\DonationFilters;
use Laranext\Admin\Fields\DonationFields;
use Laranext\Admin\Requests\DonationRequest;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\DonationFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(DonationFilters $filters)
    {
        return new IndexCollection(
            Donation::with('organization', 'organization1', 'organization2', 'organization3')->filter($filters)->simplePaginate(),
            DonationFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function create(Donation $donation)
    {
        return new DonationFields($donation);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Donation $donation)
    {
        return new DonationRequest($request, $donation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return $donation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return new DonationFields($donation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        return new DonationRequest($request, $donation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Donation::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Donations Deleted Successfully!'
                : 'Donation Deleted Successfully!'
        ];
    }
}
