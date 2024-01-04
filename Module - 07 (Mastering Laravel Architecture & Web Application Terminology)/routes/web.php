<?php

use App\Http\Controllers\MainController;
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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( '/hi', [MainController::class, 'sayHi'] );

Route::get( '/hello', [MainController::class, 'hello'] );

Route::get( '/greet/{name?}', [MainController::class, 'greet'] );

Route::post( '/form', [MainController::class, 'samplePostRequest'] );
Route::get( '/form', [MainController::class, 'sampleGetRequest'] );

Route::get( "/location", [WeatherController::class, 'location'] );
Route::get( '/weather/{location}', [WeatherController::class, 'weather'] );

// Basic routing
Route::get( '/myroute', function () {
    return "Welcome to Our Application";
} );

Route::get( '/contact', function () {
    return "Welcome to Contact Page";
} );

// Route Redirection
// Route::redirect( '/myroute', '/contact', 301 );

// Route with view
Route::view( '/test', 'test', ['title' => 'My Title'] );

// Route with parameter
Route::get( '/user/{id}', function ( string $id ) {
    return "Welcome to User $id";
} );