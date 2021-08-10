<?php

use Illuminate\Support\Facades\Route;

Route::get('/{path?}', 'ViewController@index')->where('path', '^(?!api|storage).*$');