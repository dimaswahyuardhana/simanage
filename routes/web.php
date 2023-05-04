<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/admin', function () {
    return view('dashboardadmin');
});

//pemasukan
Route::get('/pemasukan', [PemasukanController::class, 'index']);
Route::get('/pemasukan/add', [PemasukanController::class, 'create']);

//pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
Route::get('/pengeluaran/add', [PengeluaranController::class, 'create']);

//karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/add', [KaryawanController::class, 'create']);

//hutang
Route::get('/hutang', [HutangController::class, 'index']);
Route::get('/hutang/add', [HutangController::class, 'create']);

//laporan
Route::get('/laporan', [LaporanController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
