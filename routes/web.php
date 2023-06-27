<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thanhtoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ChairController;
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


Route::get('/1', function () {
    return view('user.suatchieu');
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
Route::resource('/cinemas', CinemaController::class);
Route::resource('/rooms', RoomController::class);
Route::resource('/showtimes', ShowtimeController::class);
Route::resource('/tickets', TicketController::class);
Route::resource('/bills', BillController::class);
Route::resource('/chairs', ChairController::class);
Route::get('/s', function () {
    return view('admin.create_chair');
});
Route::post('/save-checkbox', [ChairController::class, 'save'])->name('save-checkbox');
Route::get('/ss', [ChairController::class,'index']);
Route::get('/phim', [FilmController::class,'allfilm']);
Route::get('/ctphim/{id}', [FilmController::class,'ct_film']);
