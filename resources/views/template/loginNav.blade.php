<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/Login.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="head">
        <a href="">
            <img src="{{ asset('gambar/PosDig.png')}}" height="60px" alt="logo" class="logo">
        </a>

        <nav class="nav2">
            <ul>
                <li><a href="{{ url('/login-form')}}">Masuk</a></li>
                <li>|</li>
                <li><a href="{{ url('/daftar-form')}}">Daftar</a></li>
            </ul>
        </nav>
    </header>

  <!-- Yield disini untuk menampilkan halaman yang berada di @section('main-content') pada pasien maupun obat -->
  @yield('main-content')
