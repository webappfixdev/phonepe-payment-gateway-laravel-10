<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonePecontroller;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('phonepe',[PhonePeController::class,'phonePe']);

Route::any('phonepe-response',[PhonePeController::class,'response'])->name('response');


Route::get('refund/{id}',[PhonePecontroller::class,'refundProcess']);