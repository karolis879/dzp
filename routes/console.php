<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('linkedin:fetch')->everyDay('12:00')->timezone('Europe/Vilnius')->onSuccess(function () {;
    $this->comment('LinkedIn posts fetched successfully.');
})->onFailure(function () {
    $this->error('Failed to fetch LinkedIn posts.');
});
