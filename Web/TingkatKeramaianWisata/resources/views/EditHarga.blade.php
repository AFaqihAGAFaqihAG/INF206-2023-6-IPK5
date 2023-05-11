<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARAWISATAKU - Harga Tiket</title>
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <h1>PARIWISATAKU.COM</h1>
        </div>
    </header>

    <div class="content">
        <h2 class="main-title">Harga Tiket {{ $tempatWisata->nama_tempat }}</h2>

        <div class="form-container">
            <h3 class="form-title">Edit Informasi Tempat Wisata</h3>
            <!-- form edit informasi tempat wisata -->
        </div>

        <div class="table-container">
            <h3 class="table-title">Harga Tiket</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID Harga Tiket</th>
                        <th>Jenis Tiket</th>
                        <th>Harga</th>
                        <th>Sisa Jumlah</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if($hargaTiket -> isEmpty())
                <tr>
                    <td colspan="4">Belum ada data harga tiket untuk tempat wisata ini.</td>
                </tr>
                    @else
                    @foreach ($hargaTiket as $tiket)
                        <tr>
                            <td>{{ $tiket->id_harga_tiket }}</td>
                            <td>{{ $tiket->jenis_tiket }}</td>
                            <td>{{ $tiket->harga }}</td>
                            <td>{{ $tiket->sisa_jumlah }}</td>
                            <td>
                            <div class="form-container">
                                <h3 class="form-title">Edit Harga Tiket</h3>
                                <form id="form-edit-harga" method="POST" action="{{ route('EditHarga.update', ['id_tempat' => $tempatWisata->id_tempat, 'id_harga_tiket' => $tiket->id_harga_tiket]) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id_tempat" value="{{ $tempatWisata->id_tempat }}">
                                    <input type="hidden" name="id_harga_tiket" value="{{ $tiket->id_harga_tiket }}">
                                    <label for="jenis-tiket">Jenis Tiket:</label>
                                    <input type="text" id="jenis-tiket" name="jenis_tiket" value="{{ $tiket->jenis_tiket }}" required>
                                    <label for="harga">Harga:</label>
                                    <input type="text" id="harga" name="harga" value="{{ $tiket->harga }}" required>
                                    <label for="sisa-jumlah">Sisa Jumlah:</label>
                                    <input type="number" id="sisa-jumlah" name="sisa_jumlah" value="{{ $tiket->sisa_jumlah }}" required>
                                    <button type="submit" class="btn btn-light">Simpan</button>
                                </form>
                                </div>
                                <form id="form-delete-harga" method="POST" action="{{ route('EditHarga.destroy', ['id_tempat' => $tempatWisata->id_tempat, 'id_harga_tiket' => $tiket->id_harga_tiket]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                                 
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

            <div class="form-container">
                <h3 class="form-title">Tambah Harga Tiket</h3>
                <form id="form-tambah-harga" method="POST" action="{{ route('EditHarga.store', ['id_tempat' => $tempatWisata->id_tempat]) }}">
                    @csrf
                    <input type="hidden" name="id_tempat_wisata" value="{{ $tempatWisata->id_tempat }}">
                    <label for="jenis-tiket">Jenis Tiket:</label>
                    <input type="text" id="jenis-tiket" name="jenis_tiket" required>
                    <label for="harga">Harga:</label>
                    <input type="text" id="harga" name="harga" required>
                    <label for="sisa-jumlah">Sisa Jumlah:</label>
                    <input type="number" id="sisa-jumlah" name="sisa_jumlah" required>
                    <button type="submit" class="btn btn-light">Tambah</button>
                </form>
            </div>


<button class="btn btn-light" onclick="location.href='{{ route('petugas.show', ['id_tempat' => $tempatWisata->id_tempat]) }}'">Kembali</button>


