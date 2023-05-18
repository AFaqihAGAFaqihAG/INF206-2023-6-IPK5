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
                @if (session('success'))
                    <div class="alert-daftar">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->has('email'))
                    <div class="alert-login">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post" id="login-form">
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


        <div class="overlay"></div>

        <div class="popup" id="popup">
            <h2>Gagal Login</h2>
            <p id="popup-message">username/password salah</p>
            <button class="close-button" id="close-button">&times;</button>
        </div>

        <script>
            const loginForm = document.getElementById('login-form');
            const popup = document.getElementById('popup');
            const popupMessage = document.getElementById('popup-message');
            const closeButton = document.getElementById('close-button');

            loginForm.addEventListener('submit', async (event) => {
                event.preventDefault();
                const formData = new FormData(loginForm);
                const response = await fetch(loginForm.action, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                if (result.status === 'success') {
                    window.location.href = result.url;
                } else {
                    popupMessage.innerText = result.message;
                    popup.style.display = "block";
                }
            });

            closeButton.addEventListener('click', () => {
                popup.style.display = "none";
            });

            window.addEventListener('click', (event) => {
                if (event.target === popup) {
                    popup.style.display = "none";
                }
            });

        </script>

    </div>
</body>
</html>
