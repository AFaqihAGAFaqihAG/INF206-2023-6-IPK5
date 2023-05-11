<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARAWISATAKU</title>
	<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<div class="background">
		<header class="header">
			<a href="/"><h1 style="font-weight: bold; text-decoration:none;">PARIWISATAKU</h1></a>
		</header>
	<h1>EDIT</h1>
	<form method="POST" action="{{ route('petugas.update', $tempatWisata->id_tempat) }}">
		@csrf
		@method('PUT')
		<label for="status">Status:</label>
		<select id="status" name="tingkat_keramaian">
			<option value="penuh" {{ $tempatWisata->tingkat_keramaian == 'penuh' ? 'selected' : '' }}>Penuh</option>
			<option value="ramai" {{ $tempatWisata->tingkat_keramaian == 'ramai' ? 'selected' : '' }}>Ramai</option>
			<option value="normal" {{ $tempatWisata->tingkat_keramaian == 'normal' ? 'selected' : '' }}>Normal</option>
			<option value="sepi" {{ $tempatWisata->tingkat_keramaian == 'sepi' ? 'selected' : '' }}>Sepi</option>
		</select>
		<br><br>
		<label for="deskripsi">Deskripsi:</label><br>
		<textarea id="deskripsi" name="note" rows="4" cols="50">{{ $tempatWisata->note }}</textarea>
		<br><br>
		<label for="jam-buka">Jam Buka:</label>
		<input type="time" id="jam-buka" name="jam_buka" value="{{ $tempatWisata->jam_buka }}"><br><br>
		<label for="jam-tutup">Jam Tutup:</label>
		<input type="time" id="jam-tutup" name="jam_tutup" value="{{ $tempatWisata->jam_tutup }}"><br><br>
		<label for="status-buka-tutup">Status Buka/Tutup:</label><br>
		<input type="radio" id="buka" name="status" value="buka" {{ $tempatWisata->status == 'buka' ? 'checked' : '' }}>
		<label for="buka">Buka</label><br>
		<input type="radio" id="tutup" name="status" value="tutup" {{ $tempatWisata->status == 'tutup' ? 'checked' : '' }}>
		<label for="tutup">Tutup</label><br><br>
		<label for="jumlah-pengunjung">Jumlah Pengunjung:</label>
		<input type="number" id="jumlah-pengunjung" name="jumlah_pengunjung" value="{{ $tempatWisata->jumlah_pengunjung}}"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
