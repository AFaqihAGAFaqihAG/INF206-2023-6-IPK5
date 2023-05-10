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
			<a href="/"><h1 style="font-weight: bold;">PARIWISATAKU</h1></a>
		</header>

		<div class="search">
            <div class="search-container">
                <form action="#" method="get">
                <input type="text" placeholder="Search..." name="search">
                </form>
            </div>
        </div>

		<div class="pengunjung_layout">
			<!--informasi tempatWisata-->
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
			</div>
			<!--deskripsi-->
			<div class="deskripsi-box">
				<h3>Deskripsi:</h3>
				<p>{{ $tempatWisata->note }}</p>
			</div>
			<!--Review-->
			<div class="review_layout">
            <div class="masukan_review">
                <form action="/review-post" method="post">
                @csrf
					<input type="hidden" name="id_tempat" value="{{ $tempatWisata->id_tempat }}">
                    <div class="input_data">
                        <label for="R_nama">Masukan Nama</label>
                        <input class="input_nama @error('R_nama') is-invalid @enderror" type="text" name="R_nama" placeholder="NAMA">
                    </div>
                    <div class="input_data">
                        <label for="isi_review">Tulis review</label>
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

		<div>
		<button class="btn-tiket" type="button" onclick="window.location.href='{{ route('harga-tiket', ['id' => $tempatWisata->id_tempat]) }}'">Harga Tiket</button>
	</div>
		<div>
			<button class="btn-kembali" type="button" onclick="window.location.href='/'">Kembali</button>
		</div>
	</div>
</body>
</html>

