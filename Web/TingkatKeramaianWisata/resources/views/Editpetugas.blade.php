<!DOCTYPE html>
<html>
<head>
	<title>EDIT - Status</title>
	<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
</head>
<body>
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
