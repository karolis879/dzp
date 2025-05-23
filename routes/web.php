<?php

use Illuminate\Support\Facades\Route;

Route::get('/dzp-index-text', function () {
    return view('welcome');
});

Route::get('/test', [\App\Http\Controllers\HomeController::class, 'index']);
