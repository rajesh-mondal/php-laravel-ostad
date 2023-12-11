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