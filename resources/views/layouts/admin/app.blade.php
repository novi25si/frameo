<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FRAMEO')</title>
    @include('layouts.admin.css')
</head>

<body>

    @include('layouts.admin.header')
    @include('layouts.admin.sidebar')

    <!-- Konten Utama -->
    <main class="container">
        @yield('content')
    </main>

    @include('layouts.admin.footer')
    @include('layouts.admin.js')

</body>

</html>
