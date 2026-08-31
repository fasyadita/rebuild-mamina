<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk - Mamina</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #fffdf0;
        }

        /* =========================================
           LOGIN PAGE
        ========================================= */
        .login-page {
            width: 100%;
            min-height: 100vh;

            display: flex;

            overflow: hidden;

            background: #fffdf0;
        }

        /* =========================================
           LEFT
        ========================================= */
        .login-left {
            width: 52%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px;

            text-align: center;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(214, 247, 232, 0.95),
                    transparent 38%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(255, 218, 209, 0.70),
                    transparent 38%
                ),
                #fffdf0;
        }

        .login-left-content {
            width: 100%;
            max-width: 600px;

            margin-top: -20px;
        }

        /* LOGO */
        .login-logo {
            width: 210px;

            margin: 0 auto 28px;
        }

        .login-logo img {
            width: 100%;
            height: auto;

            display: block;
        }

        /* TITLE */
        .login-left-title {
            margin: 0 0 12px;

            color: #3da5a5;

            font-size: 32px;
            font-weight: 800;

            line-height: 1.25;
        }

        /* DESCRIPTION */
        .login-left-description {
            margin: 0 auto;

            color: #59616d;

            font-size: 17px;
            font-weight: 500;

            line-height: 1.55;
        }

        /* =========================================
           RIGHT
        ========================================= */
        .login-right {
            width: 48%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px 70px;

            background: #ffffff;

            /* border-radius: 55px 0 0 55px; */

            box-shadow:
                -10px 0 30px rgba(0, 0, 0, 0.03);
        }

        .login-form-container {
            width: 100%;
            max-width: 510px;

            min-height: 620px;

            display: flex;
            flex-direction: column;
        }

        /* =========================================
           HEADER
        ========================================= */
        .login-title {
            margin: 0;

            text-align: center;

            color: #ee9d99;

            font-size: 38px;
            font-weight: 800;
        }

        .login-subtitle {
            margin: 8px 0 45px;

            text-align: center;

            color: #9ba5b6;

            font-size: 16px;
            font-weight: 500;
        }

        /* =========================================
           FORM
        ========================================= */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 10px;
        }

        .form-label {
            margin: 0;

            color: #4d5868;

            font-size: 15px;
            font-weight: 700;
        }

        .forgot-password {
            color: #ee9d99;

            font-size: 13px;
            font-weight: 600;

            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* =========================================
           INPUT
        ========================================= */
        .input-wrapper {
            position: relative;

            width: 100%;
        }

        .input-icon {
            position: absolute;

            left: 18px;
            top: 50%;

            transform: translateY(-50%);

            color: #3da5a5;

            font-size: 17px;

            z-index: 2;
        }

        .form-input {
            width: 100%;
            height: 60px;

            padding: 0 48px;

            border: 1px solid #edf0f3;
            border-radius: 16px;

            background: #fafbfc;

            color: #59616d;

            font-family: 'Nunito', sans-serif;

            font-size: 16px;

            outline: none;

            box-shadow:
                0 3px 10px rgba(0, 0, 0, 0.025);

            transition: 0.2s;
        }

        .form-input::placeholder {
            color: #aab2c0;
        }

        .form-input:focus {
            border-color: #3da5a5;

            background: #ffffff;

            box-shadow:
                0 0 0 3px rgba(61, 165, 165, 0.10);
        }

        /* =========================================
           PASSWORD
        ========================================= */
        .password-toggle {
            position: absolute;

            right: 18px;
            top: 50%;

            transform: translateY(-50%);

            padding: 4px;

            border: none;

            background: transparent;

            color: #a3acba;

            font-size: 16px;

            cursor: pointer;
        }

        .password-toggle:hover {
            color: #3da5a5;
        }

        /* =========================================
           BUTTON
        ========================================= */
        .login-button {
            width: 100%;
            height: 64px;

            margin-top: 15px;

            border: none;
            border-radius: 32px;

            background: #3da5a5;

            color: #ffffff;

            font-family: 'Nunito', sans-serif;

            font-size: 18px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .login-button:hover {
            background: #329292;

            transform: translateY(-1px);
        }

        /* =========================================
           REGISTER
        ========================================= */
        .register-text {
            margin: 48px 0 0;

            text-align: center;

            color: #737d8d;

            font-size: 16px;
        }

        .register-link {
            color: #ee9d99;

            font-weight: 800;

            text-decoration: underline;
        }

        /* =========================================
           MOBILE
        ========================================= */
        @media (max-width: 768px) {

            .login-page {
                flex-direction: column;

                overflow-y: auto;
            }

            .login-left {
                width: 100%;
                min-height: 420px;

                padding: 45px 25px 55px;
            }

            .login-left-content {
                margin-top: 0;
            }

            .login-logo {
                width: 170px;

                margin-bottom: 22px;
            }

            .login-left-title {
                font-size: 25px;
            }

            .login-left-description {
                font-size: 14px;
            }

            .login-right {
                width: 100%;
                min-height: auto;

                margin-top: -30px;

                padding: 45px 25px 50px;

                border-radius: 40px 40px 0 0;
            }

            .login-form-container {
                min-height: auto;
            }

            .login-title {
                font-size: 32px;
            }

            .login-subtitle {
                margin-bottom: 35px;
            }
        }

        @media (max-width: 480px) {

            .login-left {
                min-height: 370px;

                padding: 40px 20px 50px;
            }

            .login-logo {
                width: 145px;
            }

            .login-left-title {
                font-size: 22px;
            }

            .login-left-description {
                font-size: 13px;
            }

            .login-right {
                padding: 40px 20px 45px;
            }

            .login-title {
                font-size: 29px;
            }

            .login-subtitle {
                font-size: 14px;
            }

            .form-input {
                height: 56px;

                font-size: 14px;
            }

            .login-button {
                height: 58px;

                font-size: 16px;
            }

            .register-text {
                font-size: 14px;
            }
        }
    </style>
</head>


<body>

    <div class="login-page">

        {{-- =========================================
             BAGIAN KIRI
        ========================================== --}}
        <section class="login-left">

            <div class="login-left-content">

                {{-- LOGO --}}
                <div class="login-logo">
                    <img
                        src="{{ asset('img/logo-2.png') }}"
                        alt="Mamina"
                    >
                </div>

                {{-- JUDUL --}}
                <h1 class="login-left-title">
                    Mendampingi Ibu &amp; Si Kecil
                </h1>

                {{-- DESKRIPSI --}}
                <p class="login-left-description">
                    Nikmati kemudahan berkonsultasi dan memantau tumbuh kembang
                    <br>
                    si kecil bersama Mamina.
                </p>

            </div>

        </section>


        {{-- =========================================
             BAGIAN KANAN
        ========================================== --}}
        <section class="login-right">

            <div class="login-form-container">

                {{-- JUDUL --}}
                <h2 class="login-title">
                    Masuk
                </h2>

                <p class="login-subtitle">
                    Silakan masuk ke akun Anda
                </p>


                {{-- FORM --}}
                <form
                    action="#"
                    method="POST"
                >

                    @csrf

                    {{-- NOMOR TELEPON --}}
                    <div class="form-group">

                        <div class="form-label-row">

                            <label
                                for="phone"
                                class="form-label"
                            >
                                Nomor Telepon
                            </label>

                        </div>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-phone input-icon"></i>

                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                class="form-input"
                                placeholder="Contoh: 08123456789"
                                autocomplete="tel"
                            >

                        </div>

                    </div>


                    {{-- PASSWORD --}}
                    <div class="form-group">

                        <div class="form-label-row">

                            <label
                                for="password"
                                class="form-label"
                            >
                                Password
                            </label>

                            <a
                                href="#"
                                class="forgot-password"
                            >
                                Lupa Password?
                            </a>

                        </div>

                        <div class="input-wrapper">

                            <i class="fa-solid fa-lock input-icon"></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-input"
                                placeholder="••••••••"
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePassword()"
                            >
                                <i
                                    class="fa-regular fa-eye-slash"
                                    id="password-icon"
                                ></i>
                            </button>

                        </div>

                    </div>


                    {{-- BUTTON --}}
                    <a
                        href="{{ route('guest.home') }}"
                        class="login-button"
                        style="display: flex; align-items: center; justify-content: center; text-decoration: none;"
                    >
                        Masuk
                    </a>

                </form>


                {{-- REGISTER --}}
                <p class="register-text">

                    Belum punya akun?

                    <a
                        href="#"
                        class="register-link"
                    >
                        Daftar Sekarang
                    </a>

                </p>

            </div>

        </section>

    </div>


    {{-- PASSWORD SHOW / HIDE --}}
    <script>
        function togglePassword() {

            const passwordInput =
                document.getElementById('password');

            const passwordIcon =
                document.getElementById('password-icon');

            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';

                passwordIcon.classList.remove(
                    'fa-eye-slash'
                );

                passwordIcon.classList.add(
                    'fa-eye'
                );

            } else {

                passwordInput.type = 'password';

                passwordIcon.classList.remove(
                    'fa-eye'
                );

                passwordIcon.classList.add(
                    'fa-eye-slash'
                );
            }
        }
    </script>

</body>

</html>