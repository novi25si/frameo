<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 01. Halaman Beranda
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 02. Halaman Daftar Paket Foto
Route::get('/paket-foto', function () {
    return view('paket');
})->name('paket.index');

// 03. Halaman Form Reservasi
Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');

// Proses Simpan Data Form ke Session lalu pindah ke Status
Route::post('/reservasi', function (Request $request) {
    $dataReservasi = [
        'kode'           => '#BK' . rand(100, 999),
        'nama'           => $request->nama,
        'paket'          => $request->paket,
        'tanggal'        => date('d/m/Y', strtotime($request->tanggal)),
        'jam'            => $request->jam,
        'payment_method' => $request->payment_method ?? 'Transfer Bank / QRIS',
        'catatan'        => $request->catatan,
    ];

    session(['reservasi_terbaru' => $dataReservasi]);

    return redirect()->route('status');
})->name('reservasi.store');

// 04. Halaman Status Reservasi
Route::get('/status', function () {
    $reservasi = session('reservasi_terbaru');
    return view('status', compact('reservasi'));
})->name('status');
