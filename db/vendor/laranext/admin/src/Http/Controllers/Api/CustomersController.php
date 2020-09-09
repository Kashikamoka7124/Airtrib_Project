<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Customer;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\CustomerFilters;
use Laranext\Admin\Fields\CustomerFields;
use Laranext\Admin\Requests\CustomerRequest;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\CustomerFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(CustomerFilters $filters)
    {
        return new IndexCollection(
            Customer::filter($filters)->simplePaginate(),
            CustomerFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function create(Customer $customer)
    {
        return new CustomerFields($customer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
        return new CustomerRequest($request, $customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return new CustomerFields($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        return new CustomerRequest($request, $customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Customer::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Customers Deleted Successfully!'
                : 'Customer Deleted Successfully!'
        ];
    }
}
