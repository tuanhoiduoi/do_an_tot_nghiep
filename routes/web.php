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
use App\Http\Controllers\AuthController;
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


Route::post('/',[AuthController::class, 'login'])->name('/');

Route::post('logout',[AuthController::class, 'logout']);

//------------------------------------------------------------------------------------


// xu ly thanh toan

Route::post('/vnpay_payment', [thanhtoanController::class, 'vnpay_payment']);
Route::get('/thanhtoan/{id}', [thanhtoanController::class, 'returnUrl']);


// ------------------------------------------------------------------------------------


Route::get('/log-out',[UserController::class, 'login']); // k xai




Route::get('/1', function () {
    return view('user.suatchieu');
});
Route::get('/3', function () {
    return view('user.trangchu_user');
});

Route::get('/dangnhap', function () {
    return view('dangnhap');
});

Route::get('/trangchu', function () {
    return view('trangchu_admin');
});

// Route::post('/momo_payment', [thanhtoanController::class,'momo_payment']);



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
// Route::post('/save-checkbox', [ChairController::class, 'save'])->name('save-checkbox');
Route::get('/ss', [ChairController::class,'index']);
Route::get('/phim', [FilmController::class,'allfilm']);
Route::get('/phim2', [FilmController::class,'allfilm2']);
Route::get('/ctphim/{id}', [FilmController::class,'ct_film']);
Route::get('/suatchieu/{id}', [ShowtimeController::class,'schieu']);
Route::get('/timkiem', [ShowtimeController::class,'timkiem']);
Route::get('/ghe/{id}', [ChairController::class,'show']);
Route::get('/timkiem2', [ShowtimeController::class,'timkiem2']);
