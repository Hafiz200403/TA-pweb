<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('css/Daftar.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
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

    <div class="judul">
        <p>Daftarkan akun anda</p>
    </div>

    <div class="box">
        <div class="sub">
            <p>Daftar</p>
            <p><a href="{{ url('/login-form')}}" class="masuk">Masuk</a></p>
        </div>

        <form>
            <div class="form">
                <label for="">Nama Lengkap</label><br>
                <input type="text" placeholder="Nama Lengkap...">

                <label for="">Nomor Induk Kependudukan (NIK)</label><br>
                <input type="text" placeholder="Nomor Induk Kependudukan (NIK)...">

                <label for="">Nomor Telepon</label><br>
                <input type="text" placeholder="Nomor Telepon...">

                <label for="">Email</label><br>
                <input type="text" placeholder="Email...">

                <label for="">Alamat</label><br>
                <input type="text" placeholder="Alamat...">

                <label for="">Kata Sandi</label><br>
                <input type="password" placeholder="Kata Sandi...">

                <div class="submit">
                    <input type="submit" value="Daftar">
                </div>

            </div>
          </form>

    </div>
</body>
</html>
