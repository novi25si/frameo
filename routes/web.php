<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController; // Pastikan controller ini dibuat jika pakai database

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman Form Reservasi
Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');

// Proses Simpan Reservasi (akan dihubungkan ke Controller & Database)
Route::post('/reservasi', [BookingController::class, 'store'])->name('reservasi.store');

// Halaman Cek Status Reservasi
Route::get('/status', function () {
    return view('status');
})->name('status');
