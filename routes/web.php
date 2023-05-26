<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thanhtoanController;
use App\Http\Controllers\UserController;
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
    return view('dangnhap');
});

Route::post('/momo_payment', [thanhtoanController::class,'momo_payment']);

Route::post('/trangchu',[UserController::class, 'login']);

Route::resource('/quanlytaikhoan', UserController::class);

