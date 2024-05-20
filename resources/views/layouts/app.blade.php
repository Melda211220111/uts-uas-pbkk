<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kendaraan')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS */

        /* Navbar */
        .navbar {
            background-color: #f8f9fa; /* Warna latar belakang navbar */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #000 !important; /* Warna teks hitam*/
        }

        .navbar-toggler-icon {
            background-color: #007bff; /* Warna ikon toggler */
        }

        /* Content */
        .content {
            background-color: #ffffff; /* Warna latar belakang konten putih */
            padding: 20px; /* Padding untuk konten */
            border-radius: 5px; /* Border radius untuk konten */
            margin-top: 20px; /* Margin atas untuk konten */
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1); /* Bayangan pada konten */
            text-align: center;
        }

        .alert-success {
            background-color: #d4edda; /* Warna latar belakang alert sukses */
            border-color: #c3e6cb; /* Warna border alert sukses */
            color: #155724; /* Warna teks alert sukses */
        }

    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid"> <!-- Gunakan container-fluid agar navbar memiliki lebar penuh -->
                <a class="navbar-brand" href="{{ route('kendaraan.index') }}">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto"> <!-- Gunakan ml-auto untuk memindahkan daftar navigasi ke kanan -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kendaraan.index') }}">Kendaraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kwitansi.index') }}">Kwitansi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('penyewa.index') }}">Penyewa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content mt-3">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
    </div>
    <!-- Tambahkan script JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>