<?php

use App\Http\Controllers\RahimController;
use App\Http\Controllers\WeatherController;
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

Route::get('/form', [RahimController::class, 'displayGetRequest']);
Route::post('/form', [RahimController::class, 'displayPostRequest']);



Route::get('/weather', [WeatherController::class, 'displayWeatherData']);
Route::get('/wea/{location}', [WeatherController::class, 'weatherDetails']);



