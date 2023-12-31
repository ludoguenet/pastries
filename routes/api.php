<?php

declare(strict_types=1);

use App\Http\Controllers\Pastry\IndexController;
use App\Http\Controllers\Pastry\RefundController;
use App\Http\Controllers\Pastry\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    'treblle',
])
    ->group(function () {
        Route::as('pastries.')
            ->prefix('pastries')
            ->group(function (): void {
                Route::get('/', IndexController::class)->name('index');
                Route::get('/register', RegisterController::class)->name('register');
                Route::post('/refund/{pastry}', RefundController::class)->name('refund');
            });
    });
