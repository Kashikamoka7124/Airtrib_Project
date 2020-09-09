<?php

use Illuminate\Support\Facades\Route;

Route::get('{resource}/actions', 'ActionsController@index');
Route::post('{resource}/action', 'ActionsController@store');
Route::get('{resource}/filters', 'FiltersController@index');

Route::group([
    'prefix' => 'exceptions',
], function () {

});

Route::resource('exceptions', ExceptionsController::class);