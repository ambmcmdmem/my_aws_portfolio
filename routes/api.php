<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resoure('productions', api\ProductionController::class);
// Route::post('productions', [api\ProductionController::class, 'index']);

// Route::post('chatContents/{production}', [api\ChatContentController::class, 'index']);
// Route::post('chatContents/{production}/create', [api\ChatContentController::class, 'create']);
