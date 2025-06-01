<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::prefix('/contact-us')->name('contact_us.')->group(function () {
    Route::post('/get-quote', [\App\Http\Controllers\ContactUsController::class, 'getQuote'])->name('get_quote');
    Route::post('/send-cv', [\App\Http\Controllers\ContactUsController::class, 'sendCV'])->name('send_cv');
    Route::post('/general-contacts', [\App\Http\Controllers\ContactUsController::class, 'generalContacts'])->name('general_contacts');
});
