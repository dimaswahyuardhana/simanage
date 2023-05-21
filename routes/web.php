<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BulananController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\FinancialStatementController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Auth;

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

Route::get('/manajemen', function () {
    return view('landingpage.section.manajemen');
});

Route::get('/absen', function () {
    return view('landingpage.section.absensi');
});
// Route::group(['middleware' => 'id_role:1'], function ()  {
// keuangan
Route::get('/keuangan', [FinanceController::class, 'index']);
// add keuangan
Route::get('/keuangan/add', [FinanceController::class, 'create']);
Route::post('/keuangan', [FinanceController::class, 'store']);
// edit keuangan
Route::get('/keuangan/{id_finance}/edit', [FinanceController::class, 'edit']);
Route::put('/keuangan/{id_finance}', [FinanceController::class, 'update']);
// delete keuangan
Route::get('keuangan/{id_finance}/delete', [FinanceController::class, 'destroy']);

Route::post('/keuangan/arsipkan', [FinanceController::class, 'arsipkan'])->name('keuangan.arsipkan');

// // pemasukan
// Route::get('/pemasukan', [PemasukanController::class, 'index']);
// // add pemasukan
// Route::get('/pemasukan/add', [PemasukanController::class, 'create']);
// Route::post('/pemasukan', [PemasukanController::class, 'store']);
// // edit pemasukan
// Route::get('/pemasukan/{id}/edit', [PemasukanController::class, 'edit']);
// Route::put('/pemasukan/{id}', [PemasukanController::class, 'update']);
// // delete pemasukan
// Route::get('pemasukan/{id}/delete', [PemasukanController::class, 'destroy']);

// // pengeluaran
// Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
// // add pengeluaran
// Route::get('/pengeluaran/add', [PengeluaranController::class, 'create']);
// Route::post('/pengeluaran', [PengeluaranController::class, 'store']);
// // edit pengeluaran
// Route::get('/pengeluaran/{id}/edit', [PengeluaranController::class, 'edit']);
// Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update']);
// // delete pengeluaran
// Route::get('pengeluaran/{id}/delete', [PengeluaranController::class, 'destroy']);

// // hutang
// Route::get('/hutang', [HutangController::class, 'index']);
// // add hutang
// Route::get('/hutang/add', [HutangController::class, 'create']);
// Route::post('/hutang', [HutangController::class, 'store']);
// // edit hutang
// Route::get('/hutang/{id}/edit', [HutangController::class, 'edit']);
// Route::put('/hutang/{id}', [HutangController::class, 'update']);
// // delete hutang
// Route::get('hutang/{id}/delete', [HutangController::class, 'destroy']);

// karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/add', [KaryawanController::class, 'create']);



// laporan keuangan
Route::get('/laporan', [FinancialStatementController::class, 'index']);
// });

// login
Route::get('/login', [LoginController::class, 'index']);



// register admin
Route::get('/register/admin', [LoginController::class, 'indexRegisAdmin']);
Route::post('/register/admin', [LoginController::class, 'registrasiAdmin']);

// register employee
Route::get('/register/Employee', [LoginController::class, 'indexRegisEmployee']);
Route::post('/register/Employee', [LoginController::class, 'registrasiEmployee']);

Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::middleware(['loginAs'])-> group(function (){
//     // Route::post('/logins', [LoginController::class, 'login'])->name('login');
//     Route::get('/keuangan', [FinanceController::class, 'index']);
// });
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



//Route::get('/login', [AuthController::class, 'login'])->name('login');
//Route::get('/register', [AuthController::class, 'register'])->name('register');
