<?php

use Illuminate\Support\Facades\Route;

Route::get('cards/options', 'CardsController@options');
Route::apiResource('composes', 'ComposesController')->only(['index', 'update']);
