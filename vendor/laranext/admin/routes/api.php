<?php

use Illuminate\Support\Facades\Route;

Route::get('{resource}/actions', 'ActionsController@index');
Route::post('{resource}/action', 'ActionsController@store');
Route::get('{resource}/filters', 'FiltersController@index');

Route::group([
    'prefix' => 'admin',
], function () {
    Route::resource('airports', AirportsController::class);
    Route::resource('organizations', OrganizationsController::class);
    Route::resource('customers', CustomersController::class);
    Route::resource('travelers', TravelersController::class);
    Route::resource('bookings', BookingsController::class);
    Route::resource('payments', PaymentsController::class);
    Route::resource('donations', DonationsController::class);
    Route::resource('users', UsersController::class);
    Route::resource('languages/{language}', LanguageSettingsController::class)->only(['create', 'store']);
});

