<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARAWISATAKU - Petugas</title>
	<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
</head>
<body>
<header class="header">    
    <h1>PARIWISATAKU.COM</h1>
    <!-- if user is logged in, show user name -->
    @auth
        <p><a href="/">{{ Auth::user()->name }}</p>
    @else
        Petugas
    @endauth   
    <hr>
</header> 

<div class="background">
    <main class="main">    
        <div>
            <img src="{{ asset('images/' . $tempatWisata->gambar) }}" alt="Foto">
        </div>
        <div class="keterangan">
            <p class="indicatorPenuh">Penuh/</p>
            <p class="indicatorRamai">Ramai/</p>
            <p class="indicatorNormal">Normal/</p>
            <p class="indicatorSepi">Sepi</p>
            <p class="name">Nama: {{ $tempatWisata->nama_tempat }}</p>
            <p class="location">Lokasi: {{ $tempatWisata->alamat }}</p>
            <p class="hours">Jam Buka/Tutup: {{ $tempatWisata->jam_buka }} - {{ $tempatWisata->jam_tutup }}</p>
        </div>
        <div>
            <h3>Deskripsi:</h3>
        </div>
        <div class="deskripsi-box">
            <p class="deskripsi">{{ $tempatWisata->note}}</p>
        </div>
    </main>

    <div>
        <button class="btn-edit" type="onclick"> <a class="btn_klik" href="/Edit">Edit </button>
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>    
        </form>
    </div>
</div>
</body>
</html>