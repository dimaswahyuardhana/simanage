<?php

use App\Http\Controllers\AbsentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DataAbsensiController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\FinancialStatementController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/absent', [AbsentController::class, 'index']);
    Route::put('/absent', [AbsentController::class, 'absent'])->name('absent');

    Route::get('/data_absensi', [DataAbsensiController::class, 'index']);


    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
