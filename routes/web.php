<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect()->route('login');
});

// Xử lý đăng nhập / đăng xuất
Route::get('/', [AdminController::class, 'index'])->name('login');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::post('/register', [AdminController::class, 'register'])->name('register');
Route::post('/logon', [AdminController::class, 'logon'])->name('logon');

// Bảo vệ bởi authentication => phải đăng nhập mới có quyền truy cập
Route::middleware('auth')->prefix('/admin')->group(function(){    
    Route::get('/index', [HomeController::class, 'index'])->name('admin.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});