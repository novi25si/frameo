@extends('layouts.admin.app')

@section('title', 'FRAMEO - Status Reservasi')

@section('content')
    <div class="page-header">
        <h1 class="page-title">STATUS RESERVASI</h1>
        <p class="page-subtitle">Pantau konfirmasi jadwal sesi foto dan status pembayaran Anda.</p>
    </div>

    <!-- Progress Stepper 3 Tahap -->
    <div class="progress-tracker">
        <div class="progress-step done">
            <span class="step-dot">✓</span>
            <span>1. Reservasi Terkirim</span>
        </div>
        <div class="progress-step done">
            <span class="step-dot">✓</span>
            <span>2. Jadwal Dicek Otomatis</span>
        </div>
        <div class="progress-step active">
            <span class="step-dot">3</span>
            <span>3. {{ isset($reservasi) ? $reservasi->status : 'Menunggu Jadwal' }}</span>
        </div>
    </div>

    @if (isset($reservasi))
        <!-- Kartu Booking dari Database -->
        <div class="status-card">
            <div>
                <div class="booking-code">Booking {{ $reservasi->kode }} — {{ $reservasi->nama }}</div>
                <div class="booking-meta">Paket {{ $reservasi->paket }} •
                    {{ date('d/m/Y', strtotime($reservasi->tanggal)) }} • {{ $reservasi->jam }} WIB</div>
            </div>

            <span class="badge-status"
                style="background-color: {{ $reservasi->status == 'Terkonfirmasi' ? '#16a34a' : ($reservasi->status == 'Selesai' ? '#2563eb' : '#dc2626') }};">
                {{ strtoupper($reservasi->status) }}
            </span>
        </div>

        <!-- Kartu Informasi Pembayaran + Bukti Bayar -->
        <div class="payment-card">
            <div>
                <h2>Informasi Pembayaran</h2>
                <p>Metode: <strong>{{ $reservasi->metode_pembayaran }}</strong></p>

                @if ($reservasi->metode_pembayaran == 'Transfer Bank')
                    <p>Rekening Studio: <strong>BCA 1234567890 a.n. FRAMEO Studio</strong></p>
                @endif

                @if (!empty($reservasi->bukti_pembayaran))
                    <p>Status Pembayaran: <strong style="color: #16a34a;">Bukti pembayaran terlampir</strong></p>
                @elseif($reservasi->metode_pembayaran == 'Bayar di Studio')
                    <p>Status Pembayaran: <strong style="color: #d97706;">Bayar tunai/debit di kasir studio</strong></p>
                @endif
            </div>

            @if (!empty($reservasi->bukti_pembayaran))
                <div class="proof-box">
                    <span>Bukti Pembayaran Terlampir</span>
                    <img src="{{ asset('storage/' . $reservasi->bukti_pembayaran) }}"
                        onerror="this.onerror=null; this.src='/storage/{{ $reservasi->bukti_pembayaran }}';"
                        alt="Bukti Pembayaran" class="proof-img">
                </div>
            @endif
        </div>
    @else
        <!-- Tampilan Default Jika Belum Ada Reservasi Baru -->
        <div class="status-card">
            <div>
                <div class="booking-code">Belum Ada Data Booking</div>
                <div class="booking-meta">Silakan lakukan reservasi terlebih dahulu untuk melihat status jadwalmu.</div>
            </div>
            <span class="badge-status">KOSONG</span>
        </div>
    @endif

    <div class="action-buttons">
        <a href="{{ route('home') }}" class="btn-teal">KEMBALI KE BERANDA</a>
        @if (isset($reservasi))
            <button type="button" onclick="window.print()" class="btn-outline">CETAK BUKTI BOOKING</button>
        @endif
    </div>
@endsection
