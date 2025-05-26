<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::post('/contact-us-send-mail', [\App\Http\Controllers\ContactUsController::class, 'sendMail'])->name('contact_us.send_mail');
