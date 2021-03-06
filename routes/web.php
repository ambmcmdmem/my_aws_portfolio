<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\api;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Auth::routes();
Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});



Route::post('productions', [api\ProductionController::class, 'index']);

Route::post('api/chatContents/{production}', [api\ChatContentController::class, 'index']);
Route::post('api/chatContents/{production}/create', [api\ChatContentController::class, 'create']);
