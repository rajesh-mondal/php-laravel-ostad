<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\DemoController;

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

// Route::get( '/', function () {
//     return view( 'welcome' );
// } );

// Route::get( "person/{name?}", [PersonController::class, "getPerson"] )->whereAlpha( "name" );
// // Route::get( "person/{name?}", [PersonController::class, "getPerson"] )->whereAlphaNumeric( "name" );
// Route::get( "personid/{id?}", [PersonController::class, "getPersonById"] )->whereNumber( "id" );

// Route::get( "person/{name}/account/{accountId}", [PersonController::class, "personAccount"] )->whereAlpha( "name" )->whereNumber( "accountId" );

// Route::get( "/persons", [PersonController::class, "personForm"] );
// Route::post("/persons", [PersonController::class,"createAPerson"] );

// Route::post("/api/persons", [ApiController::class,"createAPerson"] );

Route::post("/hello/{name}/{age}", [DemoController::class,"demoAction"] );