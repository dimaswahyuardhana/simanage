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

// register admin
Route::get('/register/admin', [LoginController::class, 'indexRegisAdmin']);
Route::post('/register/admin', [LoginController::class, 'registrasiAdmin']);

// register employee
Route::get('/register/Employee', [LoginController::class, 'indexRegisEmployee']);
Route::post('/register/Employee', [LoginController::class, 'registrasiEmployee']);

// login
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

// admin
Route::middleware(['loginAs'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboardadmin');
    });
    // karyawan
    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::get('/karyawan/add', [KaryawanController::class, 'create']);

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
    // arsipkan keuangan
    Route::post('/keuangan/arsipkan', [FinanceController::class, 'arsipkan'])->name('keuangan.arsipkan');

    // laporan keuangan
    Route::get('/laporan', [FinancialStatementController::class, 'index']);
});

// employee
Route::middleware(['loginAsEmployee'])->group(function () {
    Route::get('/manajemen', function () {
        return view('landingpage.section.manajemen');
    });

    Route::get('/absen', function () {
        return view('landingpage.section.absensi');
    });
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
