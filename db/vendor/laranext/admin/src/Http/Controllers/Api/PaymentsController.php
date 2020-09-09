<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\Payment;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\PaymentFilters;
use Laranext\Admin\Fields\PaymentFields;
use Laranext\Admin\Requests\PaymentRequest;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\PaymentFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(PaymentFilters $filters)
    {
        return new IndexCollection(
            Payment::filter($filters)->simplePaginate(),
            PaymentFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function create(Payment $payment)
    {
        return new PaymentFields($payment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Payment $payment)
    {
        return new PaymentRequest($request, $payment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return $payment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return new PaymentFields($payment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        return new PaymentRequest($request, $payment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Payment::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Payments Deleted Successfully!'
                : 'Payment Deleted Successfully!'
        ];
    }
}
