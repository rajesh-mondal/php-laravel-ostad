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

Route::post( '/create-brand', [DemoController::class, 'create'] );
Route::post( '/update-brand/{id}', [DemoController::class, 'update'] );
Route::post( '/create-update/{brandName}', [DemoController::class, 'updateOrCreate'] );
Route::get( '/delete-brand/{id}', [DemoController::class, 'delete'] );
Route::get( '/incre-decrement', [DemoController::class, 'increDecrement'] );
Route::get( '/get-all', [DemoController::class, 'getAll'] );
Route::get( '/single-row', [DemoController::class, 'singleRow'] );
Route::get( '/column-list', [DemoController::class, 'columnList'] );
Route::get( '/aggregate', [DemoController::class, 'aggregate'] );
Route::get( '/select', [DemoController::class, 'select'] );
Route::get( '/where', [DemoController::class, 'whereClause'] );
