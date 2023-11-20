<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/persons",[ApiController::class,"createAPersons"]);

// Route::post("/hello", [DemoController::class,"demoAction"] );
Route::post("/hello", [DemoController::class,"jsonResponse"] );

Route::get("/cookie-response", [DemoController::class,"cookieResponse"] );
Route::get("/response-header", [DemoController::class,"responseHeader"] );
Route::get("/response-view", [DemoController::class,"responseView"] );

Route::post('/form-submit', function (Request $request) {

    $email = $request->input('email');

    if ($email) {
        return response()->json([
            'status'  => 'success',
            'message' => 'Form submitted successfully.',
            'email'   => $email,
        ]);
    } else {
        return response()->json([
            'status'  => 'failed',
            'message' => 'Form submission failed.',
        ]);
    }
});