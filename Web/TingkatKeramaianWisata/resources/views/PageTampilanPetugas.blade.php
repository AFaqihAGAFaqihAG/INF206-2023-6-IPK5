<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARAWISATAKU - Petugas</title>
	<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header class="header">    
        <a href="/"><h1 style="font-weight: bold;">PARIWISATAKU</h1></a>
        <!-- if user is logged in, show user name -->
        @auth
            <p><a href="/">{{ Auth::user()->name }}</a></p>
        @else
            Petugas
        @endauth   
    </header> 
    <div class="card text-bg-light mb-3" style="margin-left: 30px; margin-right: 30px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('images/' . $tempatWisata->gambar) }}" class="img-fluid rounded-start h-100" alt="..." style="object-fit: cover; max-width: 100%;">
            </div>
            <div class="col-md-8">
                <div class="namaTempatWisata" style="text-align:center;">
                    <h3><b>{{ $tempatWisata->nama_tempat }}</b></h3><hr>
                </div>
                <div class="card-body" style="line-height: 0.8;">
                    <div style="display: flex; align-items: center;">
                        <!-- Indikator Penuh -->
                        <p class="indicatorPenuh" style="opacity: {{ $tempatWisata->tingkat_keramaian == 'penuh' ? '1' : '0.5' }}; color: {{ $tempatWisata->tingkat_keramaian == 'penuh' ? 'red' : 'black' }}; font-weight: {{ $tempatWisata->tingkat_keramaian == 'penuh' ? 'bolder' : 'lighter' }}">Penuh/</p>

                        <!-- Indikator Ramai -->
                        <p class="indicatorRamai" style="opacity: {{ $tempatWisata->tingkat_keramaian == 'ramai' ? '1' : '0.5' }}; color: {{ $tempatWisata->tingkat_keramaian == 'ramai' ? 'yellow' : 'black' }}; font-weight: {{ $tempatWisata->tingkat_keramaian == 'ramai' ? 'bolder' : 'lighter' }}">Ramai/</p>

                        <!-- Indikator Normal -->
                        <p class="indicatorNormal" style="opacity: {{ $tempatWisata->tingkat_keramaian == 'normal' ? '1' : '0.5' }}; color: {{ $tempatWisata->tingkat_keramaian == 'normal' ? 'green' : 'black' }}; font-weight: {{ $tempatWisata->tingkat_keramaian == 'normal' ? 'bolder' : 'lighter' }}">Normal/</p>

                        <!-- Indikator Sepi -->
                        <p class="indicatorSepi" style="opacity: {{ $tempatWisata->tingkat_keramaian == 'sepi' ? '1' : '0.5' }}; color: {{ $tempatWisata->tingkat_keramaian == 'sepi' ? 'gray' : 'black' }}; font-weight: {{ $tempatWisata->tingkat_keramaian == 'sepi' ? 'bolder' : 'lighter' }}">Sepi</p>
                    </div>

                    <p class="visitor", style="font-weight:">Pengunjung: {{ $tempatWisata->jumlah_pengunjung }}</p>
                    <p class="location">Lokasi: {{ $tempatWisata->alamat }}</p>
                    <p class="status">Status: {{$tempatWisata -> status}}</p>
                    <p class="hours">Jam Buka: {{ $tempatWisata->jam_buka }} - {{ $tempatWisata->jam_tutup }}</p>
                    <p class="indicator">Indikator: {{ $tempatWisata->tingkat_keramaian }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-bg-light mb-3" style="margin-left:30px; margin-right:30px;">
        <div class="card-body">
            <h5 class="card-title"><b>Deskripsi</b></h5>
            <p>{{ $tempatWisata->note }}</p>
        </div>
    </div>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <button class="btn btn-light" type="onclick">
                    <a class="button-link" href="{{ route('petugas.editPetugas', ['id_tempat' => $tempatWisata->id_tempat]) }}">Edit</a>
                </button>
            </div>
            <div class="col">
                <button class="btn btn-light" type="onclick">
                    <a class="button-link" href="{{ route('EditHarga', ['id_tempat' => $tempatWisata->id_tempat]) }}">Edit Harga Tiket</a>
                </button>
            </div>
            <div class="col">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-light button-link">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <button class="btn-edit" type="onclick"><a class="btn_klik" href="{{ route('petugas.editPetugas', ['id_tempat' => $tempatWisata->id_tempat]) }}">Edit</a></button>
    <button class="btn-harga" type="onclick"><a class="btn_klik" href="{{ route('EditHarga', ['id_tempat' => $tempatWisata->id_tempat]) }}">Edit Harga Tiket</a></button>
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn-logout">Logout</button>
    </form> -->
</body>
</html>