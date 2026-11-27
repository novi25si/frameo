@extends('layouts.admin.app')

@section('title', 'FRAMEO - Daftar Paket Foto')

@section('content')
  <div class="page-header">
    <h1 class="page-title">PILIH PAKET FOTO</h1>
    <p class="page-subtitle">Semua sesi sudah termasuk bebas pilih warna background dan gratis properti studio.</p>
  </div>

  <div class="paket-list">
    <!-- Paket Basic -->
    <div class="paket-row">
      <div class="paket-thumb">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <circle cx="12" cy="13" r="4"/>
        </svg>
      </div>
      <div class="paket-detail">
        <div class="paket-header-info">
          <h2>Basic</h2>
          <span class="price">Rp75.000</span>
        </div>
        <div class="feature-tags">
          <span class="tag">1-2 Orang</span>
          <span class="tag">Durasi 15 Menit</span>
          <span class="tag">10 Softcopy</span>
          <span class="tag">1 Cetak 4R</span>
        </div>
      </div>
      <a href="{{ route('reservasi', ['paket' => 'Basic']) }}" class="btn-teal">PILIH</a>
    </div>

    <!-- Paket Couple (Highlighted) -->
    <div class="paket-row popular">
      <span class="badge-popular">Paling Laris</span>
      <div class="paket-thumb">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
        </svg>
      </div>
      <div class="paket-detail">
        <div class="paket-header-info">
          <h2>Couple</h2>
          <span class="price">Rp120.000</span>
        </div>
        <div class="feature-tags">
          <span class="tag">2 Orang</span>
          <span class="tag">Durasi 25 Menit</span>
          <span class="tag">Semua Softcopy</span>
          <span class="tag">2 Cetak 4R</span>
        </div>
      </div>
      <a href="{{ route('reservasi', ['paket' => 'Couple']) }}" class="btn-teal">PILIH</a>
    </div>

    <!-- Paket Group -->
    <div class="paket-row">
      <div class="paket-thumb">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
        </svg>
      </div>
      <div class="paket-detail">
        <div class="paket-header-info">
          <h2>Group</h2>
          <span class="price">Rp180.000</span>
        </div>
        <div class="feature-tags">
          <span class="tag">3-6 Orang</span>
          <span class="tag">Durasi 30 Menit</span>
          <span class="tag">Semua Softcopy</span>
          <span class="tag">4 Cetak 4R</span>
        </div>
      </div>
      <a href="{{ route('reservasi', ['paket' => 'Group']) }}" class="btn-teal">PILIH</a>
    </div>
  </div>

  <!-- Info Tambahan di Bawah -->
  <div class="addon-box">
    <span class="addon-title">Tambahan (Add-On)</span>
    <span class="addon-items">Tambah Orang: Rp20.000/orang • Tambah Cetak 4R: Rp10.000/lembar • Extra Time 10 Menit: Rp35.000</span>
  </div>
@endsection
