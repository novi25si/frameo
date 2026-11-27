<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservasiController;

// Halaman Publik (Pelanggan)
Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/paket-foto', fn () => view('paket'))->name('paket.index');
Route::get('/reservasi', [ReservasiController::class, 'create'])->name('reservasi');
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');
Route::get('/status', [ReservasiController::class, 'status'])->name('status');

// Login & Logout Admin (Tanpa Register)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Khusus Admin (Wajib Login)
Route::middleware('auth')->group(function () {
    Route::get('/admin/reservasi', [ReservasiController::class, 'adminIndex'])->name('admin.reservasi');
    Route::patch('/admin/reservasi/{id}', [ReservasiController::class, 'updateStatus'])->name('admin.reservasi.update');
});
