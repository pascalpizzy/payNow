<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserdashboardController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user_dashboard', [UserdashboardController::class, 'index'])->name('userDashboard');

Route::any('payment-page', [PaymentController::class, 'index'])->name('payment-page');
Route::post('/storeDetails', [PaymentController::class, 'storeFlutterPayment'])->name('storeDetails');
Route::post('/storePaystackDetails', [PaymentController::class, 'storePaystackDetails'])->name('storePaystackDetails');

Route::any('verify_payment', [PaymentController::class, 'verify'])->name('verify_payment');

Route::get('/paystack_payment', [PaymentController::class, 'paystackIndex'])->name('paystack_payment');

Route::get('/verify-paystack-payment/{reference}', [PaymentController::class, 'verify_paystack_payment'])->name('verify_paystackPayment');

Route::get('/adminIndex', [PaymentController::class, 'adminIndex'])->name('adminIndex');



Route::post('/flw-webhook', [PaymentController::class, 'webHookProcessor'])->name('flw-webhook');

