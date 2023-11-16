<?php

declare(strict_types=1);

use App\Http\Controllers\Pastry\IndexController;
use App\Http\Controllers\Pastry\RefundController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['treblle'])
    ->as('pastries.')
    ->prefix('pastries')
    ->group(function (): void {
        Route::get('/', IndexController::class)->name('index');
        Route::post('/refund/{pastry}', RefundController::class)->name('refund');
    });
