<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <style>
            body {
                background-image: url('images/bg.jpg');
                background-size: cover;
            }
            .color-gray-dark {
                color: black !important;
            }
            .bg-gray {
                background-color: whitesmoke !important;
            }
            .card.hovering:hover{
                transform: scale(1.03);
                transition: transform 0.2s ease-in-out;
            }

            .search-container {
                display: flex;
                justify-content: center;
                position: relative;
                margin: 0 auto;
                min-width: 85%;
                height: 53px;
            }

            .search-container input[type="text"] {
                position: center;
                float: center;
                width: 800px;
                height: 45px;
                border-radius: 40px;
                border-color: #989898;
                background-color: #ffffff;
                right: 0;
                text-indent: 5px;
                opacity: 0.8;
            }

            form {
                display: flex;
                align-items: center;
            }

            .card-container{
                overflow: hidden;
                background-color:#ffffff;
                padding-top:10px;
                border-radius: 10px;
                opacity: 0.8;
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- somehow not working idk <link rel="stylesheet" href="css/app.css"> -->


    </head>

    <body class="antialiased">

    <div class="login" style="text-align:right;margin-top:10px;margin-right:30px;opacity:0.5;">
        @auth
            <a class="nav-link" href="{{ route('petugas.show', ['id_tempat' => Auth::user()->id_tempat_wisata]) }}">
                <button type="button" class="btn fw-bold fs-5 btn-sm color-gray-dark bg-gray">{{ Auth::user()->name }}</button>
            </a>
        @else
            <a class="nav-link" href="login">
                    <button type="button" class="btn fw-bold fs-5 btn-sm color-gray-dark bg-gray">Login</button>
            </a>
        @endauth
    </div>

        <h1 style="text-align: center;color:black;font-size:96px;font-weight:bold;">PARIWISATAKU</h1>
        <div class="search mb-3">
            <div class="search-container">
                <form action="/search" method="get">
                <input type="text" placeholder="Search..." name="search">
                </form>
            </div>
        </div>

        <!-- Card to display tempatWisata (images with its name) -->
        <div class="container card-container" >
            <h1 class="fw-bold fs-1 m-0" style="text-align: center;">Hasil pencarian</h1>
            <hr class="m-1 mb-3">
            @if($tempatWisata -> isEmpty())
                <h4 style="text-align: center;color: gray;margin-bottom: 500px;">Hasil Pencarian Tidak ditemukan</h4>
            @else
            <div class="row">
                @foreach($tempatWisata as $t)
                <div class="col-md-4">
                <a href="{{ url('pengunjung', ['id_tempat' => $t->id_tempat]) }}">
                    <div class="card mb-4 hovering" style=" box-shadow: 1px 1px 1px 1px lightgray;">
                        <img src="{{ asset('images/' . $t->gambar) }}" class="card-img-top" alt="{{ $t->gambar }}" height="200px">
                        <div class="card-body bg-gray">
                            <h5 class="text-title text-center fw-bold fs-6 color-gray-dark">
                                <P>{{ $t->nama_tempat }}</P>
                                <P>{{ $t->alamat }}</P>
                            </h5>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            @endif
            </div>
        </div>

    </body>
    
</html>
