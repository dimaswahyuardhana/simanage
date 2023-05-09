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

Route::get('/', function () {
    return view('dashboardlanding');
});

Route::get('/about', function () {
    return view('landingpage.section.about');
});

//pemasukan
Route::get('/pemasukan', [PemasukanController::class, 'index']);
// add pemasukan
Route::get('/pemasukan/add', [PemasukanController::class, 'create']);
Route::post('/pemasukan', [PemasukanController::class, 'store']);
// edit pemasukan
Route::get('/pemasukan/{id}/edit', [PemasukanController::class, 'edit']);
Route::put('/pemasukan/{id}', [PemasukanController::class, 'update']);
// delete pemasukan
Route::get('pemasukan/{id}/delete', [PemasukanController::class, 'destroy']);

//pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
// add pengeluaran
Route::get('/pengeluaran/add', [PengeluaranController::class, 'create']);
Route::post('/pengeluaran', [PengeluaranController::class, 'store']);
// edit pengeluaran
Route::get('/pengeluaran/{id}/edit', [PengeluaranController::class, 'edit']);
Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update']);
// delete pengeluaran
Route::get('pengeluaran/{id}/delete', [PengeluaranController::class, 'destroy']);

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
