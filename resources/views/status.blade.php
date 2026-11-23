<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRAMEO - Status Reservasi</title>
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
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 24px;
    }

    .page-title {
      font-size: 26px;
      font-weight: 800;
      color: #362614;
      margin-bottom: 28px;
      text-transform: uppercase;
    }

    /* Kartu Status Booking */
    .status-card {
      background-color: #ffedd5;
      border: 1px solid #fed7aa;
      border-radius: 12px;
      padding: 24px 28px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .booking-code {
      font-size: 18px;
      font-weight: 700;
      color: #362614;
      margin-bottom: 6px;
    }

    .booking-meta {
      font-size: 14px;
      color: #78716c;
    }

    .badge-status {
      background-color: #f59e0b;
      color: #ffffff;
      padding: 10px 28px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    /* Kartu Informasi Pembayaran */
    .payment-card {
      background-color: #ffffff;
      border: 1px solid #fed7aa;
      border-radius: 12px;
      padding: 24px 28px;
      margin-bottom: 28px;
    }

    .payment-card h2 {
      font-size: 16px;
      font-weight: 700;
      color: #362614;
      margin-bottom: 12px;
    }

    .payment-card p {
      font-size: 14px;
      color: #78716c;
      margin-bottom: 8px;
    }

    .payment-card p:last-child {
      margin-bottom: 0;
    }

    /* Tombol Oranye */
    .btn-teal {
      display: inline-block;
      background-color: #ff7300;
      color: #ffffff;
      border: none;
      border-radius: 8px;
      padding: 13px 32px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      transition: background-color 0.2s;
    }

    .btn-teal:hover {
      background-color: #ea580c;
    }

    @media (max-width: 640px) {
      .status-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
      }
      .btn-teal {
        width: 100%;
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
      <a href="{{ route('reservasi') }}">Reservasi</a>
      <a href="{{ route('status') }}" class="active">Status</a>
    </nav>
  </header>

  <!-- Konten Status Reservasi -->
  <main class="container">
    <h1 class="page-title">STATUS RESERVASI</h1>

    @if(isset($reservasi))
      <!-- Kartu Booking Sesuai Inputan Terbaru -->
      <div class="status-card">
        <div>
          <div class="booking-code">Booking {{ $reservasi['kode'] }} — {{ $reservasi['nama'] }}</div>
          <div class="booking-meta">Paket {{ $reservasi['paket'] }} • {{ $reservasi['tanggal'] }} • {{ $reservasi['jam'] }} WIB</div>
          @if(!empty($reservasi['catatan']))
            <div class="booking-meta" style="margin-top: 4px; color: #ff7300;">Catatan: {{ $reservasi['catatan'] }}</div>
          @endif
        </div>
        <span class="badge-status">MENUNGGU</span>
      </div>

      <!-- Kartu Informasi Pembayaran -->
      <div class="payment-card">
        <h2>Informasi pembayaran</h2>
        <p>Metode: <strong>{{ $reservasi['payment_method'] }}</strong></p>
        @if($reservasi['payment_method'] == 'Transfer Bank / QRIS')
          <p>Rekening Studio: <strong>BCA 1234567890 a.n. FRAMEO Studio</strong></p>
        @endif
        <p>Status: <strong style="color: #d97706;">Belum dibayar</strong></p>
      </div>
    @else
      <!-- Tampilan Default Jika Belum Ada Reservasi Baru -->
      <div class="status-card">
        <div>
          <div class="booking-code">Booking #BK001</div>
          <div class="booking-meta">Paket Basic • 20/11/2026 • 14.00</div>
        </div>
        <span class="badge-status">MENUNGGU</span>
      </div>

      <div class="payment-card">
        <h2>Informasi pembayaran</h2>
        <p>Metode: Transfer / tunai di studio</p>
        <p>Status: <strong>Belum dibayar</strong></p>
      </div>
    @endif

    <a href="{{ route('home') }}" class="btn-teal">KEMBALI KE BERANDA</a>
  </main>

</body>
</html>
