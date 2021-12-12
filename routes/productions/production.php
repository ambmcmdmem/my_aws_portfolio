<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductionController;

Route::get('/sell', [ProductionController::class, 'sell'])->name('production.sell');