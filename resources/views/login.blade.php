<!-- Extend ini digunakan untuk memanggil data dari template -->
@extends('template/loginNav')
<!-- Section ini adalah halaman yang akan ditampilkan ke web -->
@section('main-content')
    <div class="judul">
        <p>Selamat Datang!</p>
        <p>Masukkan Akun Anda</p>
    </div>

    <div class="box">
        <div class="sub">
            <p>Masuk</p>
            <p><a href="{{ url('/daftar-form')}}" class="daftar">Daftar</a></p>
        </div>

        <form action="{{ url('/login-submit') }}" method="POST">
            @csrf
            <div class="form">
                <label for="">Email</label><br>
                <input type="email" name="email" value="{{Session::get('email')}}" class="form-control" placeholder="Email...">

                <label for="">Kata Sandi</label><br>
                <input type="password" name="password" class="form-control" placeholder="Kata Sandi...">

                <div class="submit">
                    <input type="submit" value="Masuk">
                </div>

            </div>
          </form>

    </div>
</body>
</html>

@endsection


