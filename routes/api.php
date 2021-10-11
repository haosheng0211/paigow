<?php

use Illuminate\Support\Facades\Route;

Route::get('cards/options', 'CardsController@options');
Route::post('compute', 'ComputeController');
Route::post('composes/export', 'ComposesController@export');
Route::post('composes/import', 'ComposesController@import');
Route::apiResource('composes', 'ComposesController')->only(['index', 'update']);
Route::delete('records', 'RecordsController@destroy');
Route::apiResource('records', 'RecordsController')->only(['index']);
