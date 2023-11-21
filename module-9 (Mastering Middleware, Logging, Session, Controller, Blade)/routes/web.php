<?php

use App\Http\Controllers\GreetingsController;
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
