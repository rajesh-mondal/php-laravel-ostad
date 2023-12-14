<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post( '/insert-request', [DemoController::class, 'insertRequest'] );
Route::post( '/update/{id}', [DemoController::class, 'update'] );
Route::post( '/upsert/{brandName}', [DemoController::class, 'updateOrInsert'] );
Route::post( '/increment/{id}', [DemoController::class, 'incrementDecrement'] );
Route::post( '/delete/{id}', [DemoController::class, 'delete'] );
