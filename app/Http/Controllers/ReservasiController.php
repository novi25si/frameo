<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function create()
    {
        return view('reservasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required|string|max:255',
            'paket'             => 'required|string',
            'tanggal'           => 'required|date',
            'jam'               => 'required|string',
            'metode_pembayaran' => 'required|string',
            'bukti_pembayaran'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Cek otomatis apakah tanggal & jam sudah terisi
        $jadwalTerisi = Reservasi::where('tanggal', $request->tanggal)
            ->where('jam', $request->jam)
            ->where('status', '!=', 'Dibatalkan')
            ->exists();

        if ($jadwalTerisi) {
            return back()
                ->withInput()
                ->withErrors(['jadwal' => 'Maaf, jadwal tanggal ' . date('d/m/Y', strtotime($request->tanggal)) . ' jam ' . $request->jam . ' WIB sudah terisi. Silakan pilih jam lain.']);
        }

        $pathBukti = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $pathBukti = $request->file('bukti_pembayaran')->store('bukti-pembayaran', 'public');
        }

        // Jadwal kosong -> otomatis statusnya Terkonfirmasi
        $reservasi = Reservasi::create([
            'kode'              => '#BK' . rand(100, 999),
            'nama'              => $request->nama,
            'paket'             => $request->paket,
            'tanggal'           => $request->tanggal,
            'jam'               => $request->jam,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran'  => $pathBukti,
            'status'            => 'Terkonfirmasi',
        ]);

        session(['kode_booking_terbaru' => $reservasi->kode]);

        return redirect()->route('status');
    }

    // Halaman Status Pelanggan
    public function status(Request $request)
    {
        $kode = $request->kode ?? session('kode_booking_terbaru');
        $reservasi = $kode ? Reservasi::where('kode', $kode)->first() : null;

        return view('status', compact('reservasi'));
    }

    // Halaman Tabel Reservasi Khusus Admin
    public function adminIndex()
    {
        $semuaReservasi = Reservasi::orderBy('tanggal', 'desc')->orderBy('jam', 'asc')->get();
        return view('admin.reservasi', compact('semuaReservasi'));
    }

    // Ubah Status Pesanan oleh Admin
    public function updateStatus(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update(['status' => $request->status]);

        return back()->with('success', 'Status pesanan ' . $reservasi->kode . ' berhasil diperbarui.');
    }
}
