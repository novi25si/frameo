@extends('layouts.admin.app')

@section('title', 'FRAMEO - Kelola Reservasi Admin')

@section('content')
  <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
    <div>
      <h1 class="page-title">DATA RESERVASI STUDIO</h1>
      <p class="page-subtitle">Pantau jadwal masuk, cek bukti pembayaran, dan kelola status sesi foto.</p>
    </div>
  </div>

  @if(session('success'))
    <div style="background: #dcfce7; border: 1px solid #86efac; color: #166534; padding: 12px 16px; border-radius: 10px; font-size: 13.5px; margin-bottom: 20px;">
      {{ session('success') }}
    </div>
  @endif

  <div class="card" style="overflow-x: auto; padding: 20px;">
    <table style="width: 100%; border-collapse: collapse; font-size: 13.5px; text-align: left;">
      <thead>
        <tr style="border-bottom: 2px solid #fed7aa; color: #362614;">
          <th style="padding: 12px 10px;">Kode</th>
          <th style="padding: 12px 10px;">Pelanggan</th>
          <th style="padding: 12px 10px;">Paket</th>
          <th style="padding: 12px 10px;">Jadwal Sesi</th>
          <th style="padding: 12px 10px;">Pembayaran</th>
          <th style="padding: 12px 10px;">Bukti</th>
          <th style="padding: 12px 10px;">Status</th>
          <th style="padding: 12px 10px;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($semuaReservasi as $item)
          <tr style="border-bottom: 1px solid #ffedd5;">
            <td style="padding: 12px 10px; font-weight: 800; color: #ff7300;">{{ $item->kode }}</td>
            <td style="padding: 12px 10px; font-weight: 700;">{{ $item->nama }}</td>
            <td style="padding: 12px 10px;">{{ $item->paket }}</td>
            <td style="padding: 12px 10px;">{{ date('d/m/Y', strtotime($item->tanggal)) }} • {{ $item->jam }} WIB</td>
            <td style="padding: 12px 10px;">{{ $item->metode_pembayaran }}</td>
            <td style="padding: 12px 10px;">
              @if($item->bukti_pembayaran)
                <a href="{{ asset('storage/' . $item->bukti_pembayaran) }}" target="_blank" style="color: #ff7300; font-weight: 700; text-decoration: underline;">Lihat Foto</a>
              @else
                <span style="color: #78716c;">-</span>
              @endif
            </td>
            <td style="padding: 12px 10px;">
              <span style="padding: 4px 10px; border-radius: 6px; font-size: 11.5px; font-weight: 700;
                background: {{ $item->status == 'Terkonfirmasi' ? '#dcfce7' : ($item->status == 'Selesai' ? '#e0e7ff' : '#fee2e2') }};
                color: {{ $item->status == 'Terkonfirmasi' ? '#166534' : ($item->status == 'Selesai' ? '#3730a3' : '#991b1b') }};">
                {{ $item->status }}
              </span>
            </td>
            <td style="padding: 12px 10px;">
              <form action="{{ route('admin.reservasi.update', $item->id) }}" method="POST" style="display: flex; gap: 6px;">
                @csrf
                @method('PATCH')
                <select name="status" class="form-control" style="padding: 6px 8px; font-size: 12px; width: auto;">
                  <option value="Terkonfirmasi" {{ $item->status == 'Terkonfirmasi' ? 'selected' : '' }}>Terkonfirmasi</option>
                  <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                  <option value="Dibatalkan" {{ $item->status == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
                <button type="submit" style="background: #362614; color: #fff; border: none; border-radius: 6px; padding: 6px 10px; font-size: 12px; font-weight: 700; cursor: pointer;">Simpan</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8" style="padding: 24px; text-align: center; color: #78716c;">Belum ada data reservasi masuk.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
