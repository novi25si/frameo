@extends('layouts.admin.app')

@section('title', 'FRAMEO - Masuk Pengguna')

@section('content')
  <div class="card" style="max-width: 440px; margin: 20px auto;">
    <div style="text-align: center; margin-bottom: 24px;">
      <h1 class="page-title" style="font-size: 22px;">MASUK KE FRAMEO</h1>
      <p class="page-subtitle">Login untuk melakukan reservasi dan cek status sesi fotomu.</p>
    </div>

    @if ($errors->any())
      <div style="background: #fee2e2; color: #b91c1c; padding: 12px; border-radius: 8px; font-size: 13px; margin-bottom: 16px;">
        {{ $errors->first() }}
      </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
      @csrf
      <div class="form-group">
        <label style="display:block; font-size:13px; font-weight:700; margin-bottom:6px;">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="nama@email.com" required>
      </div>

      <div class="form-group">
        <label style="display:block; font-size:13px; font-weight:700; margin-bottom:6px;">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn-submit">MASUK</button>
    </form>
  </div>
@endsection
