<!-- Navbar -->
<header class="navbar">
    <a href="{{ route('home') }}" class="logo">FRAMEO</a>
    <nav class="nav-links" style="align-items: center;">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ route('paket.index') }}" class="{{ request()->routeIs('paket.*') ? 'active' : '' }}">Paket Foto</a>
        <a href="{{ route('reservasi') }}" class="{{ request()->routeIs('reservasi') ? 'active' : '' }}">Reservasi</a>
        <a href="{{ route('status') }}" class="{{ request()->routeIs('status') ? 'active' : '' }}">Status</a>

        @auth
            <a href="{{ route('admin.reservasi') }}"
                class="{{ request()->routeIs('admin.reservasi') ? 'active' : '' }}">Kelola Pesanan</a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit"
                    style="background: transparent; border: 1px solid #fed7aa; color: #fed7aa; padding: 5px 12px; border-radius: 6px; font-size: 12px; cursor: pointer;">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}"
                style="background-color: #ff7300; color: #ffffff; padding: 7px 16px; border-radius: 6px; font-weight: 700;">Login
                Admin</a>
        @endauth
    </nav>
</header>
