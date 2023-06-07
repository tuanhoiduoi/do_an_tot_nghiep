<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thanhtoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FilmController;
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
    return view('index_film');
});

Route::get('/dangnhap', function () {
    return view('dangnhap');
});

Route::get('/trangchu', function () {
    return view('trangchu_admin');
});

Route::post('/momo_payment', [thanhtoanController::class,'momo_payment']);

Route::post('/trangchu',[UserController::class, 'login']);

Route::resource('/accounts', AccountController::class);
Route::resource('/films', FilmController::class);
