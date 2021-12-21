<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductionController;

Route::get('/sell', [ProductionController::class, 'sell'])->name('production.sell');
Route::get('/{production}', [ProductionController::class, 'show'])->name('production.show');
Route::get('/{production}/edit', [ProductionController::class, 'edit'])->name('production.edit');
Route::get('/{production}/chat', [ProductionController::class, 'chat'])->name('production.chat');

Route::post('/{production}/buy', [ProductionController::class, 'buy'])->name('production.buy');
Route::post('/sell', [ProductionController::class, 'post'])->name('production.post');
Route::put('/update', [ProductionController::class, 'update'])->name('production.update');