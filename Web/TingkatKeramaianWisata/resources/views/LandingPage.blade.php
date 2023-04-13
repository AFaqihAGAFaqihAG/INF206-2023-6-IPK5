<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                background-image: url('images/bg.jpg');
                background-size: 100% 100%;
            }
        </style>

        <nav class="navbar navbar-expand-lg navbar-dark bg-info bg-opacity-25">
            <a class="navbar-brand fw-bold fs-2" href="#" style="color: rgb(80, 80, 80);">PARAWISATAKU</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-3" href="login", style="color: rgb(80, 80, 80);">Login</a>
                </li>
            </ul>
        </div>
        </nav>

    </head>

    <body class="antialiased">

        <div class="container p-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body text-center">
                        <p class="card-text fw-bold fs-4">Rekomendasi Tempat Wisata</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card to display tempatWisata (images with its name) -->
        <div class="container">
            <div class="row">
                @foreach($tempatWisata as $t)
                <div class="col-md-4">
                    <a href="/">
                    <div class="card mb-4">
                        <img src="{{ asset('images/' . $t->gambar) }}" class="card-img-top" alt="{{ $t->gambar }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $t->nama_tempat }}</h5>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </body>
    
</html>