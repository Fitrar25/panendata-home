<?php

use Illuminate\Support\Facades\Route;
use App\Models\package;
use App\http\controllers\ordercontroller;

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
    return view('landing.index');
})->name('home');

Route::post('/order', [OrderController::class, 'store'])->name('order.store');
