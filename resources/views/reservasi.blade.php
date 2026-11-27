@extends('layouts.admin.app')

@section('title', 'FRAMEO - Form Reservasi')

@section('content')
    <div class="page-header">
        <h1 class="page-title">RESERVASI SESI FOTO</h1>
        <p class="page-subtitle">Pilih paket favoritmu, tentukan jadwal kedatangan, dan pilih metode pembayaran.</p>
    </div>
    @if ($errors->has('jadwal'))
        <div
            style="background-color: #fee2e2; border: 1.5px solid #fca5a5; color: #991b1b; padding: 14px 18px; border-radius: 12px; font-size: 13.5px; font-weight: 600; margin-bottom: 20px;">
            {{ $errors->first('jadwal') }}
        </div>
    @endif


    <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data" class="booking-layout">
        @csrf

        <!-- Kolom Kiri: Pilihan Form -->
        <div class="card">
            <!-- Langkah 1: Nama -->
            <div class="form-group">
                <div class="step-title"><span class="step-badge">1</span> Data Pemesan</div>
                <input type="text" id="nama" name="nama" class="form-control"
                    placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <!-- Langkah 2: Pilih Paket -->
            <div class="form-group">
                <div class="step-title"><span class="step-badge">2</span> Pilih Paket Foto</div>
                <div class="paket-options">
                    <label class="paket-option">
                        <input type="radio" name="paket" value="Basic" data-harga="Rp75.000"
                            {{ request('paket', 'Basic') == 'Basic' ? 'checked' : '' }}>
                        <div class="paket-box">
                            <div>
                                <div class="paket-name">Basic</div>
                                <div class="paket-price">Rp75.000</div>
                            </div>
                            <div class="paket-meta">1-2 Orang • 15 Menit</div>
                        </div>
                    </label>

                    <label class="paket-option">
                        <input type="radio" name="paket" value="Couple" data-harga="Rp120.000"
                            {{ request('paket') == 'Couple' ? 'checked' : '' }}>
                        <div class="paket-box">
                            <div>
                                <div class="paket-name">Couple</div>
                                <div class="paket-price">Rp120.000</div>
                            </div>
                            <div class="paket-meta">2 Orang • 25 Menit</div>
                        </div>
                    </label>

                    <label class="paket-option">
                        <input type="radio" name="paket" value="Group" data-harga="Rp180.000"
                            {{ request('paket') == 'Group' ? 'checked' : '' }}>
                        <div class="paket-box">
                            <div>
                                <div class="paket-name">Group</div>
                                <div class="paket-price">Rp180.000</div>
                            </div>
                            <div class="paket-meta">3-6 Orang • 30 Menit</div>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Langkah 3: Tanggal -->
            <div class="form-group">
                <div class="step-title"><span class="step-badge">3</span> Tanggal Kedatangan</div>
                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>

            <!-- Langkah 4: Jam Sesi -->
            <div class="form-group">
                <div class="step-title"><span class="step-badge">4</span> Pilih Jam Sesi</div>
                <div class="time-grid">
                    @foreach (['10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '18:30', '19:30'] as $jam)
                        <label class="time-option">
                            <input type="radio" name="jam" value="{{ $jam }}"
                                {{ $loop->first ? 'checked' : '' }}>
                            <span class="time-slot">{{ $jam }}</span>
                        </label>
                    @endforeach
                </div>
            </div>


            <!-- Langkah 5: Metode Pembayaran -->
            <div class="form-group" style="margin-bottom: 0;">
                <div class="step-title"><span class="step-badge">5</span> Metode Pembayaran</div>
                <div class="paket-options">
                    <label class="paket-option">
                        <input type="radio" name="metode_pembayaran" value="QRIS" checked>
                        <div class="paket-box">
                            <div>
                                <div class="paket-name">QRIS</div>
                                <div class="paket-price">Otomatis</div>
                            </div>
                            <div class="paket-meta">Dana, OVO, GoPay, ShopeePay & M-Banking</div>
                        </div>
                    </label>

                    <label class="paket-option">
                        <input type="radio" name="metode_pembayaran" value="Transfer Bank">
                        <div class="paket-box">
                            <div>
                                <div class="paket-name">Transfer Bank</div>
                                <div class="paket-price">BCA</div>
                            </div>
                            <div class="paket-meta">Transfer manual ke rekening studio</div>
                        </div>
                    </label>

                    <label class="paket-option">
                        <input type="radio" name="metode_pembayaran" value="Bayar di Studio">
                        <div class="paket-box">
                            <div>
                                <div class="paket-name">Di Studio</div>
                                <div class="paket-price">On The Spot</div>
                            </div>
                            <div class="paket-meta">Tunai atau Debit saat tiba di kasir</div>
                        </div>
                    </label>
                </div>

                <!-- Panel 1: Gambar QRIS (Tampil saat QRIS dipilih) -->
                <div id="panel-qris" class="payment-detail-box">
                    <div class="qris-box" style="margin-bottom: 0;">
                        <img src="{{ asset('pembayaran.png') }}" onerror="this.onerror=null; this.src='/pembayaran.png';"
                            alt="QRIS FRAMEO" class="qris-img">
                        <div>
                            <strong style="font-size: 14px;">Scan QRIS FRAMEO STUDIO</strong>
                            <p style="margin-top: 4px; color: #78716c;">Scan menggunakan Dana, OVO, GoPay, ShopeePay,
                                atau Mobile Banking sesuai nominal total bayar.</p>
                        </div>
                    </div>
                </div>

                <!-- Panel 2: Rekening BCA (Tampil saat Transfer Bank dipilih) -->
                <div id="panel-transfer" class="payment-detail-box" style="display: none;">
                    <div class="rek-box" style="margin-bottom: 0;">
                        <div>
                            <div style="font-size: 12px; color: #78716c;">Bank Central Asia (BCA) • a.n. <strong>FRAMEO
                                    STUDIO</strong></div>
                            <div class="rek-number" id="no-rek">1234567890</div>
                        </div>
                        <button type="button" class="btn-copy" onclick="salinRekening()">Salin No. Rek</button>
                    </div>
                </div>

                <!-- Panel 3: Info Bayar di Studio -->
                <div id="panel-studio" class="payment-detail-box" style="display: none;">
                    <strong>Info Bayar di Studio:</strong> Tidak perlu upload bukti pembayaran. Silakan bayar tunai/debit di
                    meja kasir maksimal 10 menit sebelum sesi dimulai.
                </div>

                <!-- 1 Kotak Upload Bukti Pembayaran (Gabungan untuk QRIS & Transfer Bank) -->
                <div id="box-upload-bukti" class="upload-area" style="margin-top: 14px;">
                    <label>Upload Bukti Pembayaran (JPG/PNG):</label>
                    <div class="custom-file-wrapper">
                        <label for="bukti_pembayaran" class="btn-upload-custom">Pilih Bukti Pembayaran</label>
                        <span id="nama-file-bukti" class="file-name-text">Belum ada file dipilih</span>
                        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*"
                            style="display: none;"
                            onchange="document.getElementById('nama-file-bukti').textContent = this.files[0] ? this.files[0].name : 'Belum ada file dipilih'"
                            required>
                    </div>
                </div>
            </div>
            <!-- Panel 3: Tampil saat Di Studio dipilih -->
            <div id="panel-studio" class="payment-detail-box" style="display: none;">
                <strong>Info Bayar di Studio:</strong> Tidak perlu upload bukti transfer. Silakan bayar tunai/debit di
                meja kasir maksimal 10 menit sebelum sesi dimulai.
            </div>
        </div>
        </div>

        <!-- Kolom Kanan: Ringkasan Pesanan -->
        <div class="summary-card">
            <div class="summary-title">RINGKASAN RESERVASI</div>

            <div class="summary-row">
                <span>Pemesan</span>
                <strong id="sum-nama">-</strong>
            </div>
            <div class="summary-row">
                <span>Paket Foto</span>
                <strong id="sum-paket">{{ request('paket', 'Basic') }}</strong>
            </div>
            <div class="summary-row">
                <span>Tanggal</span>
                <strong id="sum-tanggal">-</strong>
            </div>
            <div class="summary-row">
                <span>Jam Sesi</span>
                <strong id="sum-jam">10:00</strong>
            </div>
            <div class="summary-row">
                <span>Pembayaran</span>
                <strong id="sum-payment">QRIS</strong>
            </div>

            <div class="summary-total">
                <span>Total Bayar</span>
                <div class="total-price" id="sum-harga">
                    @if (request('paket') == 'Couple')
                        Rp120.000
                    @elseif(request('paket') == 'Group')
                        Rp180.000
                    @else
                        Rp75.000
                    @endif
                </div>
            </div>

            <div class="info-note">
                Harap datang 10 menit sebelum jadwal sesi dimulai. Pembatalan atau ubah jadwal maksimal H-1.
            </div>

            <button type="submit" class="btn-submit">KONFIRMASI RESERVASI</button>
        </div>
    </form>
@endsection
