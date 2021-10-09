<?php

use Illuminate\Support\Facades\Route;

Route::get('card/options', 'CardsController@options');
Route::apiResource('composes', 'ComposesController')->only(['index', 'update']);
