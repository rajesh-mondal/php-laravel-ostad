<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\GreetingsController;
use App\Http\Middleware\DemoMiddleware;
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

// Route::get( '/hello', [GreetingsController::class, 'hello'] )->middleware( ['simple'] );
// Route::get( '/hi', [GreetingsController::class, 'hi'] )->middleware( ['simple'] );

// group middleware
Route::middleware( ['simple','simple_response'] )->group( function () {
    Route::get( '/hello', [GreetingsController::class, 'hello'] );
    Route::get( '/hi', [GreetingsController::class, 'hi'] );
} );

Route::get( '/name/{name}', [GreetingsController::class, 'greet'] )->middleware( ['addtitle'] );

// Route::get('/hello', function () {
//     return 'Hello World';
// })->middleware('simple');

//->middleware('throttle:5,1');

Route::get( '/DemoAction/{num1}/{num2}', [DemoController::class, 'DemoAction'] );
Route::get( '/SessionPut/{email}', [DemoController::class, 'SessionPut'] );
Route::get( '/SessionPull', [DemoController::class, 'SessionPull'] );
Route::get( '/SessionGet', [DemoController::class, 'SessionGet'] );
Route::get( '/SessionForget', [DemoController::class, 'SessionForget'] );
Route::get( '/SessionFlush', [DemoController::class, 'SessionFlush'] );

// Request Verification
Route::get("hello",[DemoController::class, 'RequestVerification'])->middleware([DemoMiddleware::class]);

// Request Redirect
Route::get("hello1/{key}",[DemoController::class, 'Redirect1'])->middleware([DemoMiddleware::class]);
Route::get("hello2",[DemoController::class, 'Redirect2']);

// Group Middleware
Route::middleware(['demo'])->group(function(){
    Route::get("hello1/{key}",[DemoController::class, 'Route1']);
    Route::get("hello2/{key}",[DemoController::class, 'Route2']);
    Route::get("hello3/{key}",[DemoController::class, 'Route3']);
    Route::get("hello4/{key}",[DemoController::class, 'Route4']);
});

Route::get("hello-req",[DemoController::class, 'ManuRequest'])->middleware([DemoMiddleware::class]);

Route::get("rate-limit",[DemoController::class, 'RateLimit'])->middleware('throttle:5,1');