<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrasi - Mamina</title>

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
           REGISTRATION PAGE
        ========================================= */
        .login-page {
            width: 100%;
            min-height: 100vh;

            display: flex;

            overflow: hidden;

            background: #fffdf0;
        }

        /* =========================================
           LEFT PANEL
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
           RIGHT PANEL
        ========================================= */
        .login-right {
            width: 48%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px 70px;

            background: #ffffff;

            box-shadow:
                -10px 0 30px rgba(0, 0, 0, 0.03);

            overflow-y: auto;
        }

        .login-form-container {
            width: 100%;
            max-width: 510px;

            padding: 20px 0;

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
            margin: 8px 0 35px;

            text-align: center;

            color: #9ba5b6;

            font-size: 16px;
            font-weight: 500;
        }

        /* =========================================
           FORM
        ========================================= */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 8px;
        }

        .form-label {
            margin: 0;

            color: #4d5868;

            font-size: 15px;
            font-weight: 700;
        }

        /* =========================================
           INPUT & SELECT
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
            height: 56px;

            padding: 0 48px;

            border: 1px solid #edf0f3;
            border-radius: 16px;

            background: #fafbfc;

            color: #59616d;

            font-family: 'Nunito', sans-serif;

            font-size: 15px;

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

        /* SELECT SPECIFIC STYLING */
        select.form-input {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg fill='%233da5a5' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
            background-repeat: no-repeat;
            background-position: right 18px center;
            background-size: 20px;
            cursor: pointer;
        }

        /* =========================================
           PASSWORD TOGGLE
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
           CHECKBOX
        ========================================= */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 22px 0;
        }

        .checkbox-input {
            margin-top: 3px;
            width: 16px;
            height: 16px;
            accent-color: #3da5a5;
            cursor: pointer;
        }

        .checkbox-label {
            color: #59616d;
            font-size: 14px;
            line-height: 1.4;
            user-select: none;
            cursor: pointer;
        }

        .checkbox-label a {
            color: #ee9d99;
            text-decoration: none;
            font-weight: 700;
        }

        .checkbox-label a:hover {
            text-decoration: underline;
        }

        /* =========================================
           BUTTON
        ========================================= */
        .login-button {
            width: 100%;
            height: 60px;

            margin-top: 5px;

            border: none;
            border-radius: 30px;

            background: #3da5a5;

            color: #ffffff;

            font-family: 'Nunito', sans-serif;

            font-size: 17px;
            font-weight: 800;

            cursor: pointer;

            transition: 0.2s;
        }

        .login-button:hover {
            background: #329292;

            transform: translateY(-1px);
        }

        /* =========================================
           FOOTER LINK
        ========================================= */
        .register-text {
            margin: 30px 0 0;

            text-align: center;

            color: #737d8d;

            font-size: 15px;
        }

        .register-link {
            color: #ee9d99;

            font-weight: 800;

            text-decoration: underline;
        }

        /* =========================================
           ERROR STATE
        ========================================= */
        .error-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 6px;
            font-weight: 600;
        }

        /* =========================================
           RESPONSIVE MOBILE
        ========================================= */
        @media (max-width: 992px) {
            .login-page {
                flex-direction: column;
                overflow-y: auto;
            }

            .login-left {
                width: 100%;
                min-height: 380px;
                padding: 40px 20px;
            }

            .login-left-content {
                margin-top: 0;
            }

            .login-logo {
                width: 170px;
                margin-bottom: 20px;
            }

            .login-left-title {
                font-size: 26px;
            }

            .login-left-description {
                font-size: 15px;
            }

            .login-right {
                width: 100%;
                min-height: auto;
                padding: 40px 25px;
                box-shadow: none;
            }

            .login-form-container {
                max-width: 100%;
            }
        }
    </style>
</head>


<body>

    <div class="login-page">

        {{-- =========================================
             LEFT PANEL
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

                {{-- TITLE --}}
                <h1 class="login-left-title">
                    Mendampingi Ibu &amp; Si Kecil
                </h1>

                {{-- DESCRIPTION --}}
                <p class="login-left-description">
                    Nikmati kemudahan berkonsultasi dan memantau tumbuh kembang
                    <br>
                    si kecil bersama Mamina.
                </p>

            </div>

        </section>


        {{-- =========================================
             RIGHT PANEL
        ========================================== --}}
        <section class="login-right">

            <div class="login-form-container">

                {{-- TITLE --}}
                <h2 class="login-title">
                    Registrasi
                </h2>

                <p class="login-subtitle">
                    Daftar akun baru Mamina
                </p>


                {{-- FORM --}}
                <form
                    action="{{ route('guest.register.post') }}"
                    method="POST"
                >

                    @csrf

                    {{-- CABANG TERDEKAT --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="branch_id" class="form-label">
                                Cabang Terdekat
                            </label>
                        </div>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-location-dot input-icon"></i>
                            <select
                                id="branch_id"
                                name="branch_id"
                                class="form-input"
                                required
                            >
                                <option value="" disabled {{ old('branch_id') ? '' : 'selected' }}>Pilih Cabang Terdekat</option>
                                <option value="1" {{ old('branch_id') == '1' ? 'selected' : '' }}>Malang</option>
                                <option value="2" {{ old('branch_id') == '2' ? 'selected' : '' }}>Kediri</option>
                            </select>
                        </div>
                        @error('branch_id')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NAMA --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="name" class="form-label">
                                Nama Lengkap
                            </label>
                        </div>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-user input-icon"></i>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-input"
                                placeholder="Masukkan nama lengkap Anda"
                                value="{{ old('name') }}"
                                required
                            >
                        </div>
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NOMOR TELEPON --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="phone" class="form-label">
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
                                value="{{ old('phone') }}"
                                required
                                autocomplete="tel"
                            >
                        </div>
                        @error('phone')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- EMAIL --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="email" class="form-label">
                                Email
                            </label>
                        </div>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-envelope input-icon"></i>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-input"
                                placeholder="Contoh: email@anda.com"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                            >
                        </div>
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- PASSWORD --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="password" class="form-label">
                                Password
                            </label>
                        </div>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock input-icon"></i>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-input"
                                placeholder="Minimal 6 karakter"
                                required
                            >
                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePasswordVisibility('password', 'password-icon')"
                            >
                                <i
                                    class="fa-regular fa-eye-slash"
                                    id="password-icon"
                                ></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- KONFIRMASI PASSWORD --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="password_confirmation" class="form-label">
                                Konfirmasi Password
                            </label>
                        </div>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock input-icon"></i>
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="form-input"
                                placeholder="Ulangi password Anda"
                                required
                            >
                            <button
                                type="button"
                                class="password-toggle"
                                onclick="togglePasswordVisibility('password_confirmation', 'password-confirmation-icon')"
                            >
                                <i
                                    class="fa-regular fa-eye-slash"
                                    id="password-confirmation-icon"
                                ></i>
                            </button>
                        </div>
                    </div>

                    {{-- KODE REFERRAL --}}
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="referrer" class="form-label">
                                Kode Referral <span style="font-weight: 500; color: #9ba5b6;">(Opsional)</span>
                            </label>
                        </div>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-gift input-icon"></i>
                            <input
                                type="text"
                                id="referrer"
                                name="referrer"
                                class="form-input"
                                placeholder="Masukkan kode referral jika ada"
                                value="{{ old('referrer') }}"
                            >
                        </div>
                        @error('referrer')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- PRIVACY POLICY CHECKBOX --}}
                    <div class="checkbox-group">
                        <input
                            type="checkbox"
                            id="terms"
                            name="terms"
                            class="checkbox-input"
                            required
                        >
                        <label for="terms" class="checkbox-label">
                            Saya menyetujui <a href="#">Kebijakan Privasi</a>
                        </label>
                    </div>
                    @error('terms')
                        <div class="error-message" style="margin-top: -15px; margin-bottom: 15px;">{{ $message }}</div>
                    @enderror

                    {{-- BUTTON DAFTAR --}}
                    <button
                        type="submit"
                        class="login-button"
                    >
                        Daftar
                    </button>

                </form>


                {{-- FOOTER LINK --}}
                <p class="register-text">
                    Sudah punya akun?
                    <a
                        href="{{ route('guest.login') }}"
                        class="register-link"
                    >
                        Login
                    </a>
                </p>

            </div>

        </section>

    </div>


    {{-- PASSWORD SHOW / HIDE --}}
    <script>
        function togglePasswordVisibility(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const passwordIcon = document.getElementById(iconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

</body>

</html>