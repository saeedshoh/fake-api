<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransferController;

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


Route::get('services', ServiceController::class);
Route::get('home', HomeController::class);
Route::get('histories', HistoryController::class);
Route::get('transfers', TransferController::class);
Route::get('payment-methods', PaymentMethodController::class);


Route::post('/pay', function () {
    return response()->json([
        "status" => 'Success',
        "message" => "",
        "response" => 'Payment was successful'
    ]);
});

