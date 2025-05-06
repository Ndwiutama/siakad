<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Dosen\DashboardController as DosenDashboardController;
use App\Http\Controllers\Praja\DashboardController as PrajaDashboardController;
use App\Http\Controllers\UserController;

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
    return redirect()->route('login');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names('admin.users');
    Route::get('/dosen', [App\Http\Controllers\Admin\DashboardController::class, 'indexDosen'])->name('admin.dosen');
    Route::get('/praja', [App\Http\Controllers\Admin\DashboardController::class, 'indexPraja'])->name('admin.praja');
    Route::get('/matkul', function () { return view('admin.matkul'); })->name('admin.matkul');
    Route::get('/laporan', function () { return view('admin.laporan'); })->name('admin.laporan');
    Route::get('/krs', function () { return view('admin.krs'); })->name('admin.krs');
    Route::get('/khs', function () { return view('admin.khs'); })->name('admin.khs');
    Route::get('/presensi', function () { return view('admin.presensi'); })->name('admin.presensi');
});

// Dosen Routes
Route::prefix('dosen')->middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dashboard', [DosenDashboardController::class, 'index'])->name('dosen.dashboard');
    Route::get('/profile', function () { return view('dosen.profile'); })->name('dosen.profile');
    Route::get('/data-praja', [\App\Http\Controllers\Dosen\DataPrajaController::class, 'index'])->name('dosen.data_praja');
    Route::resource('nilai-kehadiran', \App\Http\Controllers\Dosen\NilaiKehadiranResourceController::class, ['as' => 'dosen']);
    Route::get('/jadwal-mengajar', function () { return view('dosen.jadwal_mengajar'); })->name('dosen.jadwal_mengajar');
    Route::get('/elearning', function () { return view('dosen.elearning'); })->name('dosen.elearning');
    Route::resource('jadwal-matkul', \App\Http\Controllers\Dosen\JadwalMatkulController::class, ['as' => 'dosen']);
});

// Praja Routes
Route::middleware(['auth', 'role:praja'])->name('praja.')->prefix('praja')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Praja\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/jadwal', [App\Http\Controllers\Praja\JadwalController::class, 'index'])->name('jadwal');
    Route::get('/profile', function () { return view('praja.profile'); })->name('profile');
    Route::get('/krs', [\App\Http\Controllers\Praja\KrsController::class, 'index'])->name('krs');
    Route::get('/krs/pdf', [\App\Http\Controllers\Praja\KrsController::class, 'exportPdf'])->name('krs.pdf');
    Route::get('/khs', [\App\Http\Controllers\Praja\KhsController::class, 'index'])->name('khs');
    Route::get('/khs/pdf', [\App\Http\Controllers\Praja\KhsController::class, 'exportPdf'])->name('khs.pdf');
    Route::get('/kuesioner', function () { return view('praja.kuesioner'); })->name('kuesioner');
    Route::get('/tugas-akhir', function () { return view('praja.tugas_akhir'); })->name('tugas_akhir');
    Route::get('/kontak', function () { return view('praja.kontak'); })->name('kontak');
    Route::get('/informasi', function () { return view('praja.informasi'); })->name('informasi');
    Route::get('/elearning', function () { return view('praja.elearning'); })->name('elearning');
});





