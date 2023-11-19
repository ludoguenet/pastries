<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/pastries', fn () => view('pastries.index'));
