<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FRAMEO - Self Photo Studio</title>
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

    /* Navbar Cokelat Tua Gelap */
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

    /* Hero Banner Oranye Lembut */
    .hero-box {
      background-color: #ffedd5;
      border: 1px solid #fed7aa;
      border-radius: 16px;
      padding: 48px 44px;
      margin-bottom: 40px;
    }

    .hero-box h1 {
      font-size: 36px;
      font-weight: 800;
      color: #362614;
      line-height: 1.2;
      margin-bottom: 12px;
      text-transform: uppercase;
    }

    .hero-box p {
      font-size: 15px;
      color: #7c2d12;
      margin-bottom: 24px;
    }

    /* Tombol Oranye */
    .btn-orange {
      display: inline-block;
      background-color: #ff7300;
      color: #ffffff;
      border: none;
      border-radius: 8px;
      padding: 13px 28px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      transition: background-color 0.2s;
    }

    .btn-orange:hover {
      background-color: #ea580c;
    }

    /* Section Paket Favorit */
    .section-title {
      font-size: 18px;
      font-weight: 800;
      color: #c2410c;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .paket-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .paket-card {
      background-color: #ffffff;
      border: 1px solid #fed7aa;
      border-radius: 14px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .paket-badge {
      background-color: #ff7300;
      color: #ffffff;
      text-align: center;
      padding: 14px;
      border-radius: 8px;
      font-weight: 800;
      font-size: 15px;
      letter-spacing: 0.5px;
      margin-bottom: 18px;
    }

    .paket-price {
      font-size: 20px;
      font-weight: 800;
      color: #362614;
      margin-bottom: 6px;
    }

    .paket-desc {
      font-size: 13.5px;
      color: #78716c;
      margin-bottom: 20px;
    }

    .paket-card .btn-orange {
      width: 100%;
    }

    @media (max-width: 768px) {
      .paket-grid {
        grid-template-columns: 1fr;
      }
      .hero-box {
        padding: 32px 24px;
      }
      .hero-box h1 {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <a href="{{ route('home') }}" class="logo">FRAMEO</a>
    <nav class="nav-links">
      <a href="{{ route('home') }}" class="active">Beranda</a>
      <a href="{{ route('paket.index') }}">Paket Foto</a>
      <a href="{{ route('reservasi') }}">Reservasi</a>
      <a href="{{ route('status') }}">Status</a>
    </nav>
  </header>

  <!-- Konten Beranda -->
  <main class="container">
    <section class="hero-box">
      <h1>MOMEN TERBAIK,<br>DALAM SATU FRAME.</h1>
      <p>Self photo studio untuk mengabadikan cerita bersama.</p>
      <a href="{{ route('reservasi') }}" class="btn-orange">BOOKING SEKARANG</a>
    </section>

    <h2 class="section-title">PILIH PAKET FAVORITMU</h2>
    <div class="paket-grid">
      <!-- Basic -->
      <div class="paket-card">
        <div>
          <div class="paket-badge">BASIC</div>
          <div class="paket-price">Rp75.000</div>
          <div class="paket-desc">Sesi personal</div>
        </div>
        <a href="{{ route('reservasi', ['paket' => 'Basic']) }}" class="btn-orange">PILIH PAKET</a>
      </div>

      <!-- Couple -->
      <div class="paket-card">
        <div>
          <div class="paket-badge">COUPLE</div>
          <div class="paket-price">Rp120.000</div>
          <div class="paket-desc">Berdua lebih seru</div>
        </div>
        <a href="{{ route('reservasi', ['paket' => 'Couple']) }}" class="btn-orange">PILIH PAKET</a>
      </div>

      <!-- Group -->
      <div class="paket-card">
        <div>
          <div class="paket-badge">GROUP</div>
          <div class="paket-price">Rp150.000</div>
          <div class="paket-desc">Seru bersama teman</div>
        </div>
        <a href="{{ route('reservasi', ['paket' => 'Group']) }}" class="btn-orange">PILIH PAKET</a>
      </div>
    </div>
  </main>

</body>
</html>
