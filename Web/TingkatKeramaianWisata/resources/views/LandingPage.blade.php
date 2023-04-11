<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <style>
            body {
                background-image: url('images/bg.jpg');
                background-size: 100% 100%;
            }
            /* this is also not working for whatever reason
             .color-gray-dark {
                color:rgb(80, 80, 80);
            } */
            .bg-light-blue {
                background-color: rgb(198, 232, 244);
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- somehow not working idk <link rel="stylesheet" href="css/app.css"> -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-info bg-opacity-25 p-1">
            <div class="navbar-brand fw-bold fs-3" style="color: rgb(80, 80, 80);">PARAWISATAKU</div>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <button type="button" class="btn fw-bold fs-5 btn-sm" style="color:rgb(80, 80, 80); background-color: rgb(198, 232, 244);">Login</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </head>

    <body class="antialiased">

        <div class="container p-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border border-dark ">
                        <div class="card-body text-center bg-light-blue" style="color:rgb(80, 80, 80)">
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
                    <a href="/", style="text-decoration: none;">
                    <div class="card mb-4">
                        <img src="{{ asset('images/' . $t->gambar) }}" class="card-img-top" alt="{{ $t->gambar }}">
                        <div class="card-body bg-light-blue">
                            <h5 class="text-title text-center fw-bold fs-6" style="color:rgb(80, 80, 80);">
                                {{ $t->nama_tempat }}, {{ $t->alamat }}
                            </h5>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </body>
    
</html>