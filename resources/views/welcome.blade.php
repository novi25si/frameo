<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRAMEO - Self Photo Studio</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body { background-color: #F8FAFC; color: #1E293B; }
        .navbar { background-color: #0F1E36; color: #FFFFFF; padding: 16px 24px; }
        .nav-container { max-width: 900px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
        .brand { font-size: 20px; font-weight: bold; color: #FFFFFF; text-decoration: none; }
        .nav-links { display: flex; gap: 20px; }
        .nav-links a { color: #CBD5E1; text-decoration: none; font-size: 14px; }
        .nav-links a.active { color: #14B8A6; font-weight: bold; }
        .main-container { max-width: 900px; margin: 0 auto; padding: 35px 24px; }
        h1 { font-size: 26px; font-weight: bold; color: #0F1E36; }
        .subtitle { color: #64748B; font-size: 14px; margin-top: 6px; }
        .banner-box { margin-top: 24px; background-color: #E6F7F5; border: 2px solid #99F6E4; border-radius: 12px; padding: 30px; text-align: center; }
        .btn-teal { display: inline-block; margin-top: 24px; background-color: #14B8A6; color: #FFFFFF; text-decoration: none; font-size: 13px; font-weight: bold; padding: 12px 28px; border-radius: 8px; }
        .paket-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 28px; }
        .paket-card { background-color: #F1F5F9; border: 1px solid #CBD5E1; border-radius: 10px; padding: 20px; }
        .paket-card h2 { font-size: 16px; color: #0F1E36; }
        .paket-card p { font-size: 14px; font-weight: bold; color: #475569; margin-top: 6px; }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="brand">FRAMEO</a>
            <div class="nav-links">
                <a href="/" class="active">Beranda</a>
                <a href="#paket">Paket Foto</a>
                <a href="#">Reservasi</a>
                <a href="#">Status</a>
            </div>
        </div>
    </nav>

    <main class="main-container">
        <h1>SELF PHOTO STUDIO</h1>
        <p class="subtitle">Abadikan momenmu dengan cara yang lebih praktis.</p>

        <!-- Ilustrasi Kamera Studio -->
        <div class="banner-box">
            <svg width="90" height="90" viewBox="0 0 24 24" fill="none" stroke="#0F766E" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto;">
                <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/>
                <circle cx="12" cy="13" r="3"/>
            </svg>
            <p style="margin-top: 12px; font-weight: bold; color: #0F766E; font-size: 15px;">
                FRAMEO SELF PHOTO STUDIO
            </p>
            <p style="margin-top: 4px; color: #115E59; font-size: 13px;">
                Studio Foto Privat &bull; Pencahayaan Profesional &bull; Remote Shutter
            </p>
        </div>

        <a href="#paket" class="btn-teal">LIHAT PAKET</a>

        <div id="paket" class="paket-grid">
            <div class="paket-card">
                <h2>Basic</h2>
                <p>Rp75.000</p>
            </div>
            <div class="paket-card">
                <h2>Couple</h2>
                <p>Rp120.000</p>
            </div>
            <div class="paket-card">
                <h2>Group</h2>
                <p>Rp150.000</p>
            </div>
        </div>
    </main>

</body>
</html>
