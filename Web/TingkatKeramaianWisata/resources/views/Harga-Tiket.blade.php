<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARAWISATAKU - Harga Tiket</title>
    <link rel="stylesheet" href="{{ asset('css/styleHarga.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <h1>PARIWISATAKU.COM</h1>
        </div>
    </header>

    <div class="content">
        <h2 class="main-title">Harga Tiket {{ $tempatWisata->nama_tempat }}</h2>

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

        <button class="btn-kembali" type="button" onclick="window.location.href='{{ url('pengunjung', ['id_tempat' => $tempatWisata->id_tempat]) }}'">Kembali</button>


    </div>

    <footer class="footer">
        <p>&copy; 2023 PARAWISATAKU.COM</p>
    </footer>

</body>
</html>
