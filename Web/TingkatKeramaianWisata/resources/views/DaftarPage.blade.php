<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
    <div class="bg">
        <div class="daftar_layout">
            <div class="daftar">
                <form action="/daftar-petugas" method="post"> <!-- Menentukan URL dan metode HTTP untuk mengirimkan data form -->
                    @csrf <!-- Menambahkan CSRF token untuk melindungi dari serangan CSRF -->
                    <div class="daftar-teks">Petugas Baru</div>
                    <div class="input_data">
                        <input class="input_id" type="text" name="id_tempat_wisata" placeholder="ID TEMPAT WISATA">
                        <input class="input_id" type="text" name="name" placeholder="NAMA">
                        <input class="input_id" type="email" name="email" placeholder="EMAIL">
                        <input class="input_id" type="tel" name="nomor_hp" placeholder="NOMOR HP">
                        <input class="input_pass" type="password" name="password" placeholder="PASSWORD">
                        <div class="button">
                            <a href="login" class="btn_submit">Kembali</a>
                            <button type="submit" class="btn_submit">Daftar</button>
                        </div>
                        <p>Sudah punya akun? <a href="login">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>