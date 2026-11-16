<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRAMEO - Self Photo Studio</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body { background-color: #F8FAFC; color: #1E293B; }

        /* Navbar Oranye */
        .navbar { background-color: #F97316; color: #FFFFFF; padding: 16px 24px; }
        .nav-container { max-width: 900px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
        .brand { font-size: 20px; font-weight: bold; color: #FFFFFF; text-decoration: none; }
        .nav-links { display: flex; gap: 20px; }
        .nav-links a { color: #FFEDD5; text-decoration: none; font-size: 14px; }
        .nav-links a.active, .nav-links a:hover { color: #FFFFFF; font-weight: bold; text-decoration: underline; text-underline-offset: 6px; }

        /* Konten Utama */
        .main-container { max-width: 900px; margin: 0 auto; padding: 35px 24px; }
        h1 { font-size: 26px; font-weight: bold; color: #0F1E36; }
        .subtitle { color: #64748B; font-size: 14px; margin-top: 6px; }

        /* Kotak Banner Kamera Oranye */
        .banner-box { margin-top: 24px; background-color: #FFF7ED; border: 2px solid #FDBA74; border-radius: 12px; padding: 30px; text-align: center; }
        .btn-orange { display: inline-block; margin-top: 24px; background-color: #F97316; color: #FFFFFF; text-decoration: none; font-size: 13px; font-weight: bold; padding: 12px 28px; border-radius: 8px; }
        .btn-orange:hover { background-color: #EA580C; }

        /* Grid Kartu Paket */
        .paket-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 28px; }
        .paket-card { background-color: #F1F5F9; border: 1px solid #CBD5E1; border-radius: 10px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between; }
        .paket-card h2 { font-size: 16px; color: #0F1E36; }
        .paket-card .price { font-size: 15px; font-weight: bold; color: #EA580C; margin-top: 6px; }
        .paket-card .desc { font-size: 12px; color: #64748B; margin-top: 8px; line-height: 1.5; }
        .btn-card { display: inline-block; margin-top: 16px; background-color: #F97316; color: #FFFFFF; text-align: center; text-decoration: none; font-size: 12px; font-weight: bold; padding: 10px 14px; border-radius: 6px; }
        .btn-card:hover { background-color: #EA580C; }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="brand">FRAMEO</a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="active">Beranda</a>
                <a href="#paket">Paket Foto</a>
                <a href="{{ route('reservasi') }}">Reservasi</a>
                <a href="{{ route('status') }}">Status</a>
            </div>
        </div>
    </nav>

    <main class="main-container">
        <h1>SELF PHOTO STUDIO</h1>
        <p class="subtitle">Abadikan momenmu dengan cara yang lebih praktis.</p>

        <!-- Ilustrasi Kamera Studio -->
        <div class="banner-box">
            <svg width="90" height="90" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto;">
                <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/>
                <circle cx="12" cy="13" r="3"/>
            </svg>
            <p style="margin-top: 12px; font-weight: bold; color: #EA580C; font-size: 15px;">
                FRAMEO SELF PHOTO STUDIO
            </p>
            <p style="margin-top: 4px; color: #9A3412; font-size: 13px;">
                Studio Foto Privat &bull; Pencahayaan Profesional &bull; Remote Shutter
            </p>
        </div>

        <a href="#paket" class="btn-orange">LIHAT PAKET</a>

        <div id="paket" class="paket-grid">
            <div class="paket-card">
                <div>
                    <h2>Basic</h2>
                    <p class="price">Rp75.000</p>
                    <p class="desc">1-2 Orang &bull; 15 Menit Sesi &bull; 10 Softcopy &bull; 1 Cetak 4R</p>
                </div>
                <a href="{{ route('reservasi', ['paket' => 'Basic']) }}" class="btn-card">Pilih Paket</a>
            </div>

            <div class="paket-card">
                <div>
                    <h2>Couple</h2>
                    <p class="price">Rp120.000</p>
                    <p class="desc">2 Orang &bull; 25 Menit Sesi &bull; Semua Softcopy &bull; 2 Cetak 4R</p>
                </div>
                <a href="{{ route('reservasi', ['paket' => 'Couple']) }}" class="btn-card">Pilih Paket</a>
            </div>

            <div class="paket-card">
                <div>
                    <h2>Group</h2>
                    <p class="price">Rp150.000</p>
                    <p class="desc">Maks. 6 Orang &bull; 30 Menit Sesi &bull; Semua Softcopy &bull; 4 Cetak 4R</p>
                </div>
                <a href="{{ route('reservasi', ['paket' => 'Group']) }}" class="btn-card">Pilih Paket</a>
            </div>
        </div>
    </main>

</body>
