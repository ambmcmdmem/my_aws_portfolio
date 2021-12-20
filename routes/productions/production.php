<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductionController;

Route::get('/sell', [ProductionController::class, 'sell'])->name('production.sell');
Route::get('/{production}', [ProductionController::class, 'show'])->name('production.show');
Route::get('/{production}/edit', [ProductionController::class, 'edit'])->name('production.edit');

Route::post('/sell', [ProductionController::class, 'post'])->name('production.post');
Route::get('/{production}/buy', [ProductionController::class, 'buy'])->name('production.buy');
