<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentCycleController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('/home');});
Route::get('login', function () {  return view('/login');});

Route::get('topmenu', function () {  return view('/topmenu');});
Route::get('side_nav', function () {  return view('/side_nav');});

/*--------------Dashboad------------------------------------*/

Route::get('/dashboard', 'DashboardController');
// Route::get('dashboard1', function () {  return view('/dashboard1');});
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

/*--------------------------------------------------*/


/*-----------------------Billers---------------------------*/

Route::get('biller_statement', function () {  return view('/biller.biller_statement');});
Route::get('biller_account', function () {  return view('/biller.biller_account');});
/*--------------------------------------------------*/
    
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{customer}', [CustomerController::class, 'show']);


/*-----------------------customer---------------------------*/
Route::get('customer_statement', function () {  return view('/customers.customers_statement');});
Route::get('/customers/statement', [CustomerController::class, 'index']);



Route::get('/payment-cycles', [PaymentCycleController::class, 'index']);
Route::get('/payment-cycles/{paymentCycle}', [PaymentCycleController::class, 'show']);

// routes/web.php





// Route::get('/api/payment-cycles', [PaymentCycleController::class, 'index']);
// Route::get('/api/customers', [CustomerController::class, 'show']);
// Route::post('/api/customers', [CustomerController::class, 'store']);
// Route::post('/api/payment-cycles', [PaymentCycleController::class,'store']);
// Route::get('/api/payment-cycles', [PaymentCycleController::class,'show']);

