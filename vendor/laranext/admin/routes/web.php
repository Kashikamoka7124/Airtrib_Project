<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
], function () {
    Route::get('/', Dashboard::class);
    Route::resource('airports', AirportsController::class)->except(['store', 'update', 'destroy']);
    Route::resource('organizations', OrganizationsController::class)->except(['store', 'update', 'destroy']);
    Route::resource('customers', CustomersController::class)->except(['store', 'update', 'destroy']);
    Route::resource('travelers', TravelersController::class)->except(['store', 'update', 'destroy']);
    Route::resource('bookings', BookingsController::class)->except(['store', 'update', 'destroy']);
    Route::resource('payments', PaymentsController::class)->except(['store', 'update', 'destroy']);
    Route::resource('donations', DonationsController::class)->except(['store', 'update', 'destroy']);
    Route::resource('users', UsersController::class)->except(['store', 'update', 'destroy']);
    Route::get('languages/{language}', LanguageSettings::class);
});

