<?php

Route::get('summary', 'Summary');
Route::get('airports', 'SearchAirports');
Route::post('flights', 'SearchFlights');
Route::post('price-confirm', 'PriceConfirm');
Route::post('verify-travelers', 'VerifyTravelers');
Route::post('book', 'BookFlight');

Route::post('organizations', 'DonationsController@store');

Route::get('organizations', function () {
    return \App\Organization::limit(8)->get();
});

Route::post('save-organizations', function () {
    if (request('customer')) {
        $customer = \App\Customer::where('email', request('customer'))->first();

        $customer->organizations()->sync(request('organizations'));
    }

    return 'done';
});
