<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WeatherController;

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

Route::get('/hi', [MainController::class,'sayHi']);

Route::get('/hello', [MainController::class,'hello']);

Route::get('/greet/{name?}', [MainController::class,'greet']);

Route::post('/form', [MainController::class,'samplePostRequest']);
Route::get('/form', [MainController::class,'sampleGetRequest']);

Route::get("/location", [WeatherController::class,'location']);
Route::get('/weather/{location}', [WeatherController::class,'weather']);