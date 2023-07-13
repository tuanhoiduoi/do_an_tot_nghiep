<?php
use Illuminate\Support\Facades\Auth;
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
    return view('user.trangchu_user');
})->name('/');

Route::get('/trangchu', function () {
    return view('user.trangchu_user');
})->name('trangchu');

Route::get('/dangnhap', function () {
    if (!Auth::guard('web')->check()) {
        if(!Session::get('sdt')){
            return redirect()->route('/');
        }
        return view('dangnhap');
    }
    return redirect()->route('/');
})->name('login');

Route::post('/',[AuthController::class, 'login'])->name('dangnhap');
Route::post('/dangnhap', [AuthController::class, 'register'])->name('dangky');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');// thac mac


//------------------------------------------------------------------------------------

// xu ly thanh toan
Route::post('/vnpay_payment', [thanhtoanController::class, 'vnpay_payment']);
Route::get('/thanhtoan/{id}', [thanhtoanController::class, 'returnUrl']);

// ------------------------------------------------------------------------------------
// bat buoc dang nhap neu /tren url
Route::middleware('auth')->group(function () {
    Route::resource('/accounts', AccountController::class);
    Route::resource('/films', FilmController::class);
    Route::resource('/cinemas', CinemaController::class);
    Route::resource('/rooms', RoomController::class);
    Route::resource('/showtimes', ShowtimeController::class);
    Route::resource('/tickets', TicketController::class);
    Route::resource('/bills', BillController::class);
    Route::resource('/chairs', ChairController::class);
});




// Route::get('/6', function () {
//     return view('user.thongtinve');
// });
Route::get('/1', function () {
    return view('user.suatchieu');
});
Route::get('/2', function () {
    return view('user.gioithieu');
});
 Route::get('/3', function () {
     return view('user.trangchu_user');
});
Route::get('/5', function () {
    return view('admin.doanhthu_index');
});
Route::get('/4', function () {
    return view('user.gdich');
});


// Route::post('/momo_payment', [thanhtoanController::class,'momo_payment']);




Route::get('/tke', [ChairController::class,'tke']);


// Route::post('/save-checkbox', [ChairController::class, 'save'])->name('save-checkbox');
Route::get('/ss', [ChairController::class,'index']);
Route::get('/phim', [FilmController::class,'allfilm']);
Route::get('/phim2', [FilmController::class,'allfilm2']);
Route::get('/ctphim/{id}', [FilmController::class,'ct_film']);

// Route::get('/flights', function () {
//     // Only authenticated users may access this route...
// })->middleware('auth');

Route::get('/suatchieu/{id}', [ShowtimeController::class,'schieu'])->name('back');

Route::get('/timkiem', [ShowtimeController::class,'timkiem']);
Route::get('/ghe/{id}', [ChairController::class,'show']);
// Route::get('/timkiem2', [ShowtimeController::class,'timkiem2']);
Route::get('/tke', [ChairController::class,'tke']);
// Route::get('/gd', [BillController::class,'gdich']);


Route::get('/giaodich/{id}', [BillController::class,'gdich']);


