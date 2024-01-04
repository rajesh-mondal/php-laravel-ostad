<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;

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

// Route::get( "person/{name?}", [PersonController::class, "getPerson"] )->whereAlpha( "name" );
// // Route::get( "person/{name?}", [PersonController::class, "getPerson"] )->whereAlphaNumeric( "name" );
// Route::get( "personid/{id?}", [PersonController::class, "getPersonById"] )->whereNumber( "id" );

// Route::get( "person/{name}/account/{accountId}", [PersonController::class, "personAccount"] )->whereAlpha( "name" )->whereNumber( "accountId" );

// Route::get( "/persons", [PersonController::class, "personForm"] );
// Route::post("/persons", [PersonController::class,"createAPerson"] );

// Route::post("/api/persons", [ApiController::class,"createAPerson"] );

// Route::post("/hello", [DemoController::class,"demoAction"] );
Route::post("/hello", [DemoController::class,"jsonResponse"] );

//Response Riderect
Route::get("/hello1", [DemoController::class,"demoAction1"] );
Route::get("/hello2", [DemoController::class,"demoAction2"] );

Route::get("/file-binary", [DemoController::class,"fileBinary"] );
Route::get("/file-download", [DemoController::class,"fileDownload"] );

Route::get("/cookie-response", [DemoController::class,"cookieResponse"] );
Route::get("/response-header", [DemoController::class,"responseHeader"] );
Route::get("/response-view", [DemoController::class,"responseView"] );

Route::get('/user-agent', function(Request $request){

    $userAgent = $request->header('User-Agent');

    return $userAgent;
});