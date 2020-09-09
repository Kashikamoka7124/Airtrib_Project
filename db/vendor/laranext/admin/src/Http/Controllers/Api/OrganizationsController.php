<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Organization;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\OrganizationFilters;
use Laranext\Admin\Fields\OrganizationFields;
use Laranext\Admin\Requests\OrganizationRequest;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\OrganizationFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(OrganizationFilters $filters)
    {
        return new IndexCollection(
            Organization::filter($filters)->simplePaginate(),
            OrganizationFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function create(Organization $organization)
    {
        return new OrganizationFields($organization);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Organization $organization)
    {
        return new OrganizationRequest($request, $organization);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        return $organization;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return new OrganizationFields($organization);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        return new OrganizationRequest($request, $organization);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Organization::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Organizations Deleted Successfully!'
                : 'Organization Deleted Successfully!'
        ];
    }
}
