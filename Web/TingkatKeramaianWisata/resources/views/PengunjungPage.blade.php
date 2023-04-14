<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARAWISATAKU</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div class="background">
		<header class="header">
			<h1>PARIWISATAKU.COM</h1>
		</header>
		
		<main class="main">
			<!-- <div class="search">
				<input type="text" placeholder="Search...">
			</div> -->

			<div class="search-container">
				<form action="#" method="get">
				  <input type="text" placeholder="Search..." name="search">
				</form>
			  </div>
			<div>
			<div>
				<img src="images/gambarWisata.jpg" alt="Foto">
			</div>
			<!-- @foreach($tempatWisata as $t) -->
			<div class="keterangan">
				<h2>Nama Tempat Wisata</h2>
				<p class="visitor">Pengunjung: </p>
				<p class="location">Lokasi: </p>
				<p class="hours">Jam Buka/Tutup: </p>
				<p class="indicator">Indikator: </p>
				<!-- <h2>{{ $t->nama_tempat }}</h2>
				<p class="visitor">Pengunjung: {{ $t->jumlah_pengunjung }}</p>
				<p class="location">Lokasi: {{ $t->alamat }}</p>
				<p class="hours">Jam Buka/Tutup: {{ $t->jam_buka }} - {{ $t->jam_tutup }}</p>
				<p class="indicator">Indikator: {{ $t->tingkat_keramaian }}</p> -->
			</div>
			<!-- @endforeach -->
			<div>
				<h3>Deskripsi:</h3>
			</div>
			<div class="deskripsi-box">
				<p class="deskripsi">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, molestias?</p>
			</div>
		</main>
	
		<div>
			<button class="btn-kembali" type="onclick"> <a class="btn_klik" href="/">Kembali </button>
		</div>
	</div>
	
</body>
</html>