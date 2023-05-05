<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="bg">
     <div class="login_layout">
          <div class="login">
          <form action="{{ route('login') }}" method="post">
              @csrf <!-- Menambahkan token CSRF di dalam form -->
            <div class="login-teks">Masukan EMAIL & Password</div>
            <div class="input_data">
              <input class="input_id" type="email" name="email" placeholder="EMAIL">
              <input class="input_pass" type="password" name="password" placeholder="PASSWORD">
            <div class="button">
                <button class="btn_submit" type="button" onclick="window.location.href='/'">Kembali</button>
                <button class="btn_submit" type="submit" onclick="window.location.href='/tampilPetugas'">Login</button>
              </div>
              <p>Belum punya akun? <a href="daftar">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
