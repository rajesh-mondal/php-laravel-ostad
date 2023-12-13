<?php

use App\Http\Controllers\DemoController;
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

Route::get( '/', [DemoController::class, 'DemoAction'] );
Route::get( '/singleRow', [DemoController::class, 'singleRow'] );
Route::get( '/aggregates', [DemoController::class, 'aggregates'] );
Route::get( '/selectClauses', [DemoController::class, 'selectClauses'] );
Route::get( '/innerJoin', [DemoController::class, 'innerJoin'] );
Route::get( '/leftJoin', [DemoController::class, 'leftJoin'] );
Route::get( '/crossJoin', [DemoController::class, 'crossJoin'] );
Route::get( '/advancedJoin', [DemoController::class, 'advancedJoin'] );
Route::get( '/union', [DemoController::class, 'union'] );
Route::get( '/whereClause', [DemoController::class, 'whereClause'] );
Route::get( '/advanceWhere', [DemoController::class, 'advanceWhere'] );
Route::get( '/whereNull', [DemoController::class, 'whereNull'] );
Route::get( '/whereIn', [DemoController::class, 'whereIn'] );
Route::get( '/whereDateTime', [DemoController::class, 'whereDateTime'] );
Route::get( '/whereColumn', [DemoController::class, 'whereColumn'] );
Route::get( '/orderBy', [DemoController::class, 'orderBy'] );
Route::get( '/latestOldest', [DemoController::class, 'latestOldest'] );
Route::get( '/skipTake', [DemoController::class, 'skipTake'] );
Route::get( '/having', [DemoController::class, 'having'] );