<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARAWISATAKU</title>
	<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
	<div class="background">
		<header class="header">
			<h1>PARIWISATAKU.COM</h1>
		</header>
		
		<main class="main">
			<div class="search-container">
				<form action="#" method="get">
				  <input type="text" placeholder="Search..." name="search">
				</form>
			</div>
			<div>
			<img src="{{ asset('images/' . $tempatWisata->gambar) }}" class="card-img-top" alt="{{ $tempatWisata->gambar }}">
			</div>
			<div class="keterangan">
				<h2>{{ $tempatWisata->nama_tempat }}</h2>
				<p class="visitor">Pengunjung: {{ $tempatWisata->jumlah_pengunjung }}</p>
				<p class="location">Lokasi: {{ $tempatWisata->alamat }}</p>
				<p class="status">Status: {{$tempatWisata -> status}}</p>
				<p class="hours">Jam Buka/Tutup: {{ $tempatWisata->jam_buka }} - {{ $tempatWisata->jam_tutup }}</p>
				<p class="indicator">Indikator: {{ $tempatWisata->tingkat_keramaian }}</p>
			</div>
			<div>
				<h3>Deskripsi:</h3>
			</div>
			<div class="deskripsi-box">
				<p class="deskripsi">{{ $tempatWisata->note }}</p>
			</div>
		</main>
	
		<div>
		<button class="btn-tiket" type="button" onclick="window.location.href='{{ route('harga-tiket', ['id' => $tempatWisata->id_tempat]) }}'">Harga Tiket</button>
	</div>
		<div>
			<button class="btn-kembali" type="button" onclick="window.location.href='/'">Kembali</button>
		</div>
	</div>
	
</body>
</html>