<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('composes', 'ComposesController')->only(['index', 'update']);
