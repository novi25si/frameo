<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRAMEO - Form Reservasi</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    body {
      background-color: #fffaf5;
      color: #362614;
    }

    /* Navbar Cokelat Gelap */
    .navbar {
      background-color: #362614;
      padding: 18px 10%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #ffffff;
    }

    .logo {
      font-size: 20px;
      font-weight: 800;
      letter-spacing: 0.5px;
      text-decoration: none;
      color: #ffffff;
    }

    .nav-links {
      display: flex;
      gap: 28px;
    }

    .nav-links a {
      color: #e2d5c8;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      transition: 0.2s;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: #ff7300;
      font-weight: 700;
    }

    /* Kontainer Utama */
    .container {
      max-width: 1060px;
      margin: 36px auto;
      padding: 0 24px;
    }

    .page-header {
      margin-bottom: 24px;
    }

    .page-title {
      font-size: 26px;
      font-weight: 800;
      color: #362614;
      margin-bottom: 4px;
    }

    .page-subtitle {
      font-size: 14px;
      color: #78716c;
    }

    /* Layout 2 Kolom: Form Kiri + Ringkasan Kanan */
    .booking-layout {
      display: grid;
      grid-template-columns: 1.6fr 1fr;
      gap: 24px;
      align-items: start;
    }

    .card {
      background-color: #ffffff;
      border: 1px solid #fed7aa;
      border-radius: 16px;
      padding: 28px;
      box-shadow: 0 4px 12px rgba(54, 38, 20, 0.04);
    }

    .step-title {
      font-size: 14px;
      font-weight: 700;
      color: #362614;
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .step-badge {
      background-color: #ffedd5;
      color: #ff7300;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      font-weight: 800;
    }

    .form-group {
      margin-bottom: 22px;
    }

    .form-control {
      width: 100%;
      padding: 12px 14px;
      border: 1.5px solid #fed7aa;
      border-radius: 10px;
      font-size: 14px;
      color: #362614;
      transition: 0.2s;
    }

    .form-control:focus {
      outline: none;
      border-color: #ff7300;
      box-shadow: 0 0 0 3px rgba(255, 115, 0, 0.14);
    }

    /* Pilihan Paket Model Kartu */
    .paket-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .paket-option input[type="radio"] {
      display: none;
    }

    .paket-box {
      border: 1.5px solid #fed7aa;
      border-radius: 12px;
      padding: 14px;
      cursor: pointer;
      transition: all 0.2s;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .paket-box:hover {
      border-color: #ff7300;
      background-color: #fffaf5;
    }

    .paket-option input[type="radio"]:checked + .paket-box {
      border-color: #ff7300;
      background-color: #ffedd5;
    }

    .paket-name {
      font-weight: 800;
      font-size: 15px;
      color: #362614;
      margin-bottom: 4px;
    }

    .paket-price {
      font-weight: 700;
      font-size: 13.5px;
      color: #ff7300;
      margin-bottom: 6px;
    }

    .paket-meta {
      font-size: 11.5px;
      color: #78716c;
    }

    /* Pilihan Jam Model Tombol Grid */
    .time-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }

    .time-option input[type="radio"] {
      display: none;
    }

    .time-slot {
      display: block;
      text-align: center;
      padding: 10px 8px;
      border: 1.5px solid #fed7aa;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 600;
      color: #362614;
      cursor: pointer;
      transition: 0.2s;
    }

    .time-slot:hover {
      border-color: #ff7300;
    }

    .time-option input[type="radio"]:checked + .time-slot {
      background-color: #ff7300;
      border-color: #ff7300;
      color: #ffffff;
    }

    /* Ringkasan Pesanan (Kanan) */
    .summary-card {
      background-color: #362614;
      color: #ffffff;
      border-radius: 16px;
      padding: 26px;
      position: sticky;
      top: 24px;
    }

    .summary-title {
      font-size: 16px;
      font-weight: 800;
      letter-spacing: 0.5px;
      padding-bottom: 14px;
      border-bottom: 1px solid #573d20;
      margin-bottom: 18px;
    }

    .summary-row {
      display: flex;
      justify-content: space-between;
      font-size: 13.5px;
      margin-bottom: 12px;
      color: #e2d5c8;
    }

    .summary-row strong {
      color: #ffffff;
      font-weight: 600;
    }

    .summary-total {
      margin-top: 18px;
      padding-top: 16px;
      border-top: 1px dashed #75532c;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .summary-total span {
      font-size: 13px;
      color: #e2d5c8;
    }

    .summary-total .total-price {
      font-size: 22px;
      font-weight: 800;
      color: #ff7300;
    }

    .info-note {
      background-color: rgba(255, 115, 0, 0.15);
      border: 1px solid rgba(255, 115, 0, 0.4);
      color: #fed7aa;
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 12px;
      line-height: 1.5;
      margin: 20px 0;
    }

    .btn-submit {
      width: 100%;
      background-color: #ff7300;
      color: #ffffff;
      border: none;
      border-radius: 10px;
      padding: 14px;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .btn-submit:hover {
      background-color: #ea580c;
    }

    @media (max-width: 820px) {
      .booking-layout {
        grid-template-columns: 1fr;
      }
      .paket-options {
        grid-template-columns: 1fr;
      }
      .time-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <a href="{{ route('home') }}" class="logo">FRAMEO</a>
    <nav class="nav-links">
      <a href="{{ route('home') }}">Beranda</a>
      <a href="{{ route('paket.index') }}">Paket Foto</a>
      <a href="{{ route('reservasi') }}" class="active">Reservasi</a>
      <a href="{{ route('status') }}">Status</a>
    </nav>
  </header>

  <main class="container">
    <div class="page-header">
      <h1 class="page-title">RESERVASI SESI FOTO</h1>
      <p class="page-subtitle">Pilih paket favoritmu dan tentukan jadwal kedatangan di studio.</p>
    </div>

    <form action="{{ route('reservasi.store') }}" method="POST" class="booking-layout">
      @csrf

      <!-- Kolom Kiri: Pilihan Form -->
      <div class="card">
        <!-- Langkah 1: Nama -->
        <div class="form-group">
          <div class="step-title"><span class="step-badge">1</span> Data Pemesan</div>
          <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <!-- Langkah 2: Pilih Paket -->
        <div class="form-group">
          <div class="step-title"><span class="step-badge">2</span> Pilih Paket Foto</div>
          <div class="paket-options">
            <label class="paket-option">
              <input type="radio" name="paket" value="Basic" data-harga="Rp75.000" {{ request('paket', 'Basic') == 'Basic' ? 'checked' : '' }}>
              <div class="paket-box">
                <div>
                  <div class="paket-name">Basic</div>
                  <div class="paket-price">Rp75.000</div>
                </div>
                <div class="paket-meta">1-2 Orang • 15 Menit</div>
              </div>
            </label>

            <label class="paket-option">
              <input type="radio" name="paket" value="Couple" data-harga="Rp120.000" {{ request('paket') == 'Couple' ? 'checked' : '' }}>
              <div class="paket-box">
                <div>
                  <div class="paket-name">Couple</div>
                  <div class="paket-price">Rp120.000</div>
                </div>
                <div class="paket-meta">2 Orang • 25 Menit</div>
              </div>
            </label>

            <label class="paket-option">
              <input type="radio" name="paket" value="Group" data-harga="Rp150.000" {{ request('paket') == 'Group' ? 'checked' : '' }}>
              <div class="paket-box">
                <div>
                  <div class="paket-name">Group</div>
                  <div class="paket-price">Rp150.000</div>
                </div>
                <div class="paket-meta">Maks. 6 Orang • 30 Menit</div>
              </div>
            </label>
          </div>
        </div>

        <!-- Langkah 3: Pilih Tanggal -->
        <div class="form-group">
          <div class="step-title"><span class="step-badge">3</span> Pilih Tanggal</div>
          <input type="date" id="tanggal" name="tanggal" class="form-control" required>
        </div>

        <!-- Langkah 4: Pilih Jam -->
        <div class="form-group">
          <div class="step-title"><span class="step-badge">4</span> Pilih Jam Sesi</div>
          <div class="time-grid">
            @foreach(['10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00', '19:00'] as $jam)
              <label class="time-option">
                <input type="radio" name="jam" value="{{ $jam }}" {{ $loop->first ? 'checked' : '' }}>
                <span class="time-slot">{{ $jam }} WIB</span>
              </label>
            @endforeach
          </div>
        </div>

        <!-- Langkah 5: Catatan -->
        <div class="form-group" style="margin-bottom: 0;">
          <div class="step-title"><span class="step-badge">5</span> Catatan Tambahan (Opsional)</div>
          <input type="text" id="catatan" name="catatan" class="form-control" placeholder="Contoh: Request background putih / bawa properti">
        </div>
      </div>

      <!-- Kolom Kanan: Ringkasan Live -->
      <aside class="summary-card">
        <div class="summary-title">RINGKASAN RESERVASI</div>

        <div class="summary-row">
          <span>Nama Pemesan</span>
          <strong id="sum-nama">-</strong>
        </div>
        <div class="summary-row">
          <span>Paket Dipilih</span>
          <strong id="sum-paket">Basic</strong>
        </div>
        <div class="summary-row">
          <span>Tanggal</span>
          <strong id="sum-tanggal">Belum dipilih</strong>
        </div>
        <div class="summary-row">
          <span>Jam Sesi</span>
          <strong id="sum-jam">10:00 WIB</strong>
        </div>

        <div class="summary-total">
          <span>Estimasi Total</span>
          <div class="total-price" id="sum-harga">Rp75.000</div>
        </div>

        <div class="info-note">
          Periksa kembali tanggal dan jam sebelum mengirim. Satu slot hanya untuk satu reservasi.
        </div>

        <button type="submit" class="btn-submit">KIRIM RESERVASI</button>
      </aside>
    </form>
  </main>

  <!-- Script Ringkasan Otomatis -->
  <script>
    const inputNama = document.getElementById('nama');
    const inputTanggal = document.getElementById('tanggal');
    const paketRadios = document.querySelectorAll('input[name="paket"]');
    const jamRadios = document.querySelectorAll('input[name="jam"]');

    function updateSummary() {
      document.getElementById('sum-nama').textContent = inputNama.value.trim() || '-';
      document.getElementById('sum-tanggal').textContent = inputTanggal.value || 'Belum dipilih';

      const selectedPaket = document.querySelector('input[name="paket"]:checked');
      if (selectedPaket) {
        document.getElementById('sum-paket').textContent = selectedPaket.value;
        document.getElementById('sum-harga').textContent = selectedPaket.dataset.harga;
      }

      const selectedJam = document.querySelector('input[name="jam"]:checked');
      if (selectedJam) {
        document.getElementById('sum-jam').textContent = selectedJam.value + ' WIB';
      }
    }

    inputNama.addEventListener('input', updateSummary);
    inputTanggal.addEventListener('change', updateSummary);
    paketRadios.forEach(r => r.addEventListener('change', updateSummary));
    jamRadios.forEach(r => r.addEventListener('change', updateSummary));

    updateSummary();
  </script>

</body>
</html>
