<?php

use App\Http\Controllers\RahimController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [RahimController::class, 'show']);
Route::get('/first/{id}', [RahimController::class, 'getData']);
Route::get('/we', [RahimController::class, 'displayWeather']);