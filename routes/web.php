<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');


Route::middleware(['check.admin'])->group(function () {

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Edit akun
    Route::get('/edit-akun', [AuthController::class, 'edit'])->name('edit.akun');
    Route::put('/user/update', [AuthController::class, 'update'])->name('user.update');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Generate Word
    Route::get('/surat/{id}/generate-word', [SuratController::class, 'generateWord'])
        ->name('surat.generateWord');

    // Generate Pdf
    // Route::get('/surat/{id}/pdf', [SuratController::class, 'generatePdf'])
    //     ->name('surat.generatePdf');

    // PEGAWAI
    Route::resource('pegawai', PegawaiController::class);

    // SURAT
    Route::resource('surat', SuratController::class);

    // KEGIATAN
    Route::resource('kegiatan', KegiatanController::class);
});
