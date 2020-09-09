<?php

use Illuminate\Support\Facades\Cache;

Auth::routes(['verify' => true]);

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', ShowHomepage::class);

Route::get('flights/{view?}', function () {
    return view('router');
})->where('view', '.*');

Route::get('language/{language}', function ($language) {
    $cookie = cookie()->forever('airtrib_locale', $language);

    return back()->withCookie($cookie);
});

Route::get('temp', function () {
    return Cache::get('multicity_flight_results');

    $booking = \App\Booking::first();
    $customer = \App\Customer::first();
// dd($customer->stripe_customer);
    // $booking->summary = unserialize($booking->summary);
    // $booking->response = unserialize($booking->response);
    $customer->stripe_customer = 'unserialize($booking->response)';
    // \App\Customer::find(1)->update([
    //     'stripe_customer' => Cache::get('test_stripe_customer')
    // ]);
    // $booking->save();
    $customer->save();

    // return $booking;
    return $customer;
    return $customer->stripe_customer;
});

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'namespace' => '\App\Http\Controllers\Client',
    'middleware' => ['web', 'auth', 'verified', 'client'],
    'prefix' => 'client',
], function () {
    Route::get('profile', 'ProfileController@index');
    Route::put('profile/information', 'ProfileController@information');
    Route::put('profile/details', 'ProfileController@details');
    Route::put('profile/contact', 'ProfileController@contact');

    Route::get('travels/{booking?}', 'TravelsController@index');
    Route::get('tribes', 'TribesController@index');
    Route::get('settings', 'SettingsController@index');
    Route::put('settings', 'SettingsController@update');
    Route::post('update-organizations', 'UpdateOganizationsController@update');
});


/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'namespace' => '\App\Http\Controllers\Api',
    'middleware' => ['web', 'auth'],
    'prefix' => 'api',
], function () {
    Route::post('donate', 'DonationsController@store');
});
Route::get('flight', 'FlightsController@index');
Route::post('add_corporate', 'FlightsController@create');
Route::get('donation', 'FlightsController@show');
Route::post('add_donate', 'FlightsController@store_donate');
Route::get('change-flight', 'FlightsController@change');
Route::post('flight-change', 'FlightsController@sendChangeFlight');
