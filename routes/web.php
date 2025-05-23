<?php

use Illuminate\Support\Facades\Route;

Route::get('/dzp-index-text', [\App\Http\Controllers\HomeController::class, 'index']);
