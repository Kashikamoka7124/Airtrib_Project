<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'exceptions',
], function () {
    Route::get('{exception}/json', 'ExceptionsController@json');
});

Route::resource('exceptions', ExceptionsController::class)->except(['store', 'update', 'destroy']);
