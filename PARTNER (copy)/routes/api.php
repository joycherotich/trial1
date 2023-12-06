<?php

use App\Models\CustomerPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentCycleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerPaymentController;

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

Route::get('/payment-cycles', [PaymentCycleController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'show']);
Route::post('/customers', [CustomerController::class, 'store']);


Route::get('/customers', [CustomerController::class, 'index']);


// --------------------------------------

Route::post('/payment-cycles', [PaymentCycleController::class,'store']);
Route::get('/payment-cycles', [PaymentCycleController::class,'show']);
Route::get('/payment-cycles', [PaymentCycleController::class, 'index']);

// --------------------------------------
Route::get('/customer_payments', [CustomerPaymentController::class,'show']);
Route::get('/customer_payments', [CustomerPaymentController::class, 'index']);
Route::post('/customer_payments', [CustomerPaymentController::class,'store']);
// routes/web.php or routes/api.php


Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customer_payments', [CustomerPaymentController::class, 'index']);
Route::get('/customer_payments/{customerPayment}', [CustomerPaymentController::class, 'show']);
// Route::post('/customer_payments', [CustomerPaymentController::class, 'store']);
Route::put('/customer_payments/{customerPayment}', [CustomerPaymentController::class, 'update']);
Route::delete('/customer_payments/{customerPayment}', [CustomerPaymentController::class, 'destroy']);


