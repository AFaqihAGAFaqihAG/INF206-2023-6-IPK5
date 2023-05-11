<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARAWISATAKU</title>
	<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<div class="background">
		<header class="header">
			<a href="/"><h1 style="font-weight: bold;">PARIWISATAKU</h1></a>
		</header>

		<div class="search">
            <div class="search-container">
                <form action="#" method="get">
                <input type="text" placeholder="Search..." name="search">
                </form>
            </div>
        </div>

		<!-- <div class="pengunjung_layout">
			<div class="tempatWisata_isi">
				<div class="tempatWisata_gambar">
					<img src="{{ asset('images/' . $tempatWisata->gambar) }}" class="card-img-top" alt="{{ $tempatWisata->gambar }}">
				</div>
				<div class="keterangan">
					<div class="namaTempatWisata"><h2>{{ $tempatWisata->nama_tempat }}</h2><hr></div>
					<div class="informasi">
						<p class="visitor">Pengunjung: {{ $tempatWisata->jumlah_pengunjung }}</p>
						<p class="location">Lokasi: {{ $tempatWisata->alamat }}</p>
						<p class="status">Status: {{$tempatWisata -> status}}</p>
						<p class="hours">Jam Buka/Tutup: {{ $tempatWisata->jam_buka }} - {{ $tempatWisata->jam_tutup }}</p>
						<p class="indicator">Indikator: {{ $tempatWisata->tingkat_keramaian }}</p>
					</div>
				</div>
			</div> -->

		<div class="card text-bg-light mb-3" style="margin-left: 30px; margin-right: 30px;">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="{{ asset('images/' . $tempatWisata->gambar) }}" class="img-fluid rounded-start h-100" alt="..." style="object-fit: cover; max-width: 100%;">
				</div>
				<div class="col-md-8">
					<div class="namaTempatWisata">
						<h3><b>{{ $tempatWisata->nama_tempat }}</b></h3><hr>
					</div>
					<div class="card-body" style="line-height: 0.8;">
						<p class="visitor">Pengunjung: {{ $tempatWisata->jumlah_pengunjung }}</p>
						<p class="location">Lokasi: {{ $tempatWisata->alamat }}</p>
						<p class="status">Status: {{$tempatWisata -> status}}</p>
						<p class="hours">Jam Buka: {{ $tempatWisata->jam_buka }} - {{ $tempatWisata->jam_tutup }}</p>
						<p class="indicator">Indikator: {{ $tempatWisata->tingkat_keramaian }}</p>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="deskripsi-box">
			<h3>Deskripsi:</h3>
			<p>{{ $tempatWisata->note }}</p>
		</div> -->

		<div class="card text-bg-light mb-3" style="margin-left:30px; margin-right:30px;">
			<div class="card-body">
				<h5 class="card-title"><b>Deskripsi</b></h5>
				<p>{{ $tempatWisata->note }}</p>
			</div>
		</div>

		<div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Jenis Tiket</th>
                        <th>Harga</th>
                        <th>sisa</th>
                    </tr>
                </thead>
                <tbody>
                @if($hargaTiket -> isEmpty())
                <tr>
                    <td colspan="3">Belum ada data harga tiket untuk tempat wisata ini.</td>
                </tr>
                    @else
                    @foreach ($hargaTiket as $tiket)
                        <tr>
                            <td>{{ $tiket->jenis_tiket }}</td>
                            <td>{{ $tiket->harga }}</td>
                            <td>{{ $tiket->sisa_jumlah}}
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>

		<!--Review-->
		<div class="review_layout">
		<div class="masukan_review">
			<form action="/review-post" method="post">
			@csrf
				<input type="hidden" name="id_tempat" value="{{ $tempatWisata->id_tempat }}">
				<div class="input_data">
					<label for="R_nama" style="font-weight: bold; font-family: 'Times New Roman', serif;">Masukan Nama</label>
					<input class="input_nama @error('R_nama') is-invalid @enderror" type="text" name="R_nama" placeholder="NAMA">
				</div>
				<div class="input_data">
					<label for="isi_review" style="font-weight: bold; font-family: 'Times New Roman', serif;">Tulis review</label>
					<textarea class="input_review" type="text" name="isi_review" placeholder="Tulis..."></textarea>
				</div>
				<div class="button">
						<button type="submit" class="btn_submit">post</button>
					</div>
			</form>
		</div>
		<div style="margin-top: 30px;"><H3>Review</H3></div>
		<hr style="margin-bottom:5px;">
		<div class="review_tempatWisata">
			@foreach($reviews as $review)
				@if($review->id_tempat_wisata == $tempatWisata->id_tempat)
					<div class="reviews">
						<h3>{{ $review->R_nama }}<span style="color:gray;font-size:12px;">  | Created at: {{ $review->created_at->format('d M Y H:i:s') }}</span></h3>
						<p>"{{ $review->isi_review }}"</p>
					</div>
				@endif
			@endforeach
		</div>
	</div>
</div>
	</div>
</body>
</html>

