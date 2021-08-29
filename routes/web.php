<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Payment\PaypalController;
use App\Http\Controllers\Payment\CreditController;
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
    return view('checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// paymob
Route::post('/credit', [CreditController::class, 'credit'])->name('credit');
Route::get('/callback', [CreditController::class, 'callback'])->name('callback');



