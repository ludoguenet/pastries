<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/pastries', function () {

    return view('pastries.index');
});

// Route::get('/home', fn () => 'coucou')->name('home');
