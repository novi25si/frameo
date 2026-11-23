<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRAMEO - Daftar Paket Foto</title>
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

    /* Daftar Kartu Horizontal */
    .paket-list {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }

    .paket-row {
      background-color: #ffffff;
      border: 1px solid #fed7aa;
      border-radius: 12px;
      padding: 20px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }

    .paket-thumb {
      width: 100px;
      height: 100px;
      background-color: #ffedd5;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ff7300;
      flex-shrink: 0;
    }

    .paket-detail {
      flex: 1;
    }

    .paket-detail h2 {
      font-size: 18px;
      font-weight: 700;
      color: #362614;
      margin-bottom: 4px;
    }

    .paket-detail .price {
      font-size: 16px;
      font-weight: 700;
      color: #ff7300;
      margin-bottom: 6px;
    }

    .paket-detail .desc {
      font-size: 13.5px;
      color: #78716c;
    }

    .btn-teal {
      display: inline-block;
      background-color: #ff7300;
      color: #ffffff;
      border: none;
      border-radius: 8px;
      padding: 12px 36px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      flex-shrink: 0;
      transition: background-color 0.2s;
    }

    .btn-teal:hover {
      background-color: #ea580c;
    }

    @media (max-width: 640px) {
      .paket-row {
        flex-direction: column;
        align-items: flex-start;
      }
      .paket-thumb,
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
      <a href="{{ route('paket.index') }}" class="active">Paket Foto</a>
      <a href="{{ route('reservasi') }}">Reservasi</a>
      <a href="{{ route('status') }}">Status</a>
    </nav>
  </header>

  <!-- Konten Daftar Paket -->
  <main class="container">
    <h1 class="page-title">PILIH PAKET FOTO</h1>

    <div class="paket-list">
      <!-- Paket Basic -->
      <div class="paket-row">
        <div class="paket-thumb">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
            <circle cx="12" cy="13" r="4"/>
          </svg>
        </div>
        <div class="paket-detail">
          <h2>Basic</h2>
          <div class="price">Rp75.000</div>
          <div class="desc">1-2 Orang • Durasi 15 Menit • 10 Softcopy • 1 Cetak 4R</div>
        </div>
        <a href="{{ route('reservasi', ['paket' => 'Basic']) }}" class="btn-teal">PILIH</a>
      </div>

      <!-- Paket Couple -->
      <div class="paket-row">
        <div class="paket-thumb">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <div class="paket-detail">
          <h2>Couple</h2>
          <div class="price">Rp120.000</div>
          <div class="desc">2 Orang • Durasi 25 Menit • Semua Softcopy • 2 Cetak 4R</div>
        </div>
        <a href="{{ route('reservasi', ['paket' => 'Couple']) }}" class="btn-teal">PILIH</a>
      </div>

      <!-- Paket Group -->
      <div class="paket-row">
        <div class="paket-thumb">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>
        <div class="paket-detail">
          <h2>Group</h2>
          <div class="price">Rp150.000</div>
          <div class="desc">Maks. 6 Orang • Durasi 30 Menit • Semua Softcopy • 4 Cetak 4R</div>
        </div>
        <a href="{{ route('reservasi', ['paket' => 'Group']) }}" class="btn-teal">PILIH</a>
      </div>
    </div>
  </main>

</body>
</html>
