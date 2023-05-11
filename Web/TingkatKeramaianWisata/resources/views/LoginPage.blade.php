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
                <button class="btn_submit" type="submit">Login</button>
              </div>
              <p>Belum punya akun? <a href="daftar">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>

        <!-- <div class="overlay"></div>
        <div class="popup">
            <h2>Peringatan</h2>
            <p>Email atau password yang Anda masukkan salah</p>
            <button class="close-button">Tutup</button>
        </div>

        <script>
            const loginForm = document.getElementById('login-form');
            const popup = document.querySelector('.popup');
            const overlay = document.querySelector('.overlay');
            const closeButton = document.querySelector('.close-button');

            loginForm.addEventListener('submit', async (event) => {
                event.preventDefault();
                const formData = new FormData(loginForm);
                const response = await fetch(loginForm.action, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                if (result.status === 'success') {
                    loginForm.submit();
                } else {
                    popup.style.display = "block";
                    overlay.style.display = "block";
                    closeButton.addEventListener("click", () => {
                        popup.style.display = "none";
                        overlay.style.display = "none";
                    });
                }
            });
        </script> -->

    </div>
</body>
</html>
