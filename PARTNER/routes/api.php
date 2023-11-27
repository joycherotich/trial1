<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentCycleController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/payment-cycles', [PaymentCycleController::class, 'index']);
Route::get('/api/customers', [CustomerController::class, 'show']);
Route::post('/api/customers', [CustomerController::class, 'store']);
Route::post('/api/payment-cycles', [PaymentCycleController::class,'store']);
Route::get('/api/payment-cycles', [PaymentCycleController::class,'show']);