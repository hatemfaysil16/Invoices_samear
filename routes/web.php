<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        Route::get('/dashboard', function () {
            return view('backend.dashboard');
        })->middleware(['auth'])->name('dashboard');
        require __DIR__.'/auth.php';

    });




