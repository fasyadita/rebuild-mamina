<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Mamina CMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fredoka:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #FFFDEB;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            color: #2D3748;
        }

        .login-card {
            display: grid;
            grid-template-columns: 44% 56%;
            width: 100%;
            max-width: 860px;
            min-height: 520px;
            background: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 25px 60px -15px rgba(179, 113, 109, 0.12), 
                        0 10px 30px -10px rgba(0, 0, 0, 0.04),
                        0 0 0 1px rgba(0, 0, 0, 0.02);
        }

        /* LEFT SIDE - TERRACOTTA / DUSTY ROSE */
        .card-banner {
            background-color: #B3716D;
            position: relative;
            padding: 44px 38px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #ffffff;
            overflow: hidden;
        }

        /* Abstract soft curved overlays */
        .card-banner::before {
            content: '';
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.05);
            top: -100px;
            left: -100px;
            pointer-events: none;
        }

        .card-banner::after {
            content: '';
            position: absolute;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.04);
            top: 40px;
            left: -140px;
            pointer-events: none;
        }

        .banner-header {
            position: relative;
            z-index: 2;
        }

        .brand-logo {
            display: inline-flex;
            align-items: baseline;
            font-family: 'Fredoka', 'Plus Jakarta Sans', sans-serif;
            font-size: 32px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.5px;
            line-height: 1;
        }

        .brand-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #55BCB6;
            border-radius: 50%;
            margin-left: 4px;
        }

        .brand-subtitle {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.72);
            margin-top: 6px;
        }

        /* Shield watermark decoration */
        .banner-center {
            position: relative;
            z-index: 1;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .shield-icon {
            width: 88px;
            height: 104px;
            opacity: 0.22;
        }

        .banner-footer {
            position: relative;
            z-index: 2;
        }

        .banner-title {
            font-size: 26px;
            font-weight: 800;
            line-height: 1.25;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .banner-desc {
            font-size: 12.5px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.85);
            max-width: 290px;
            font-weight: 400;
        }

        /* RIGHT SIDE - FORM */
        .card-form {
            padding: 48px 46px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }

        .form-header {
            margin-bottom: 26px;
        }

        .form-title {
            font-size: 24px;
            font-weight: 800;
            color: #1F2937;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
            letter-spacing: -0.3px;
        }

        .form-title .wave-emoji {
            font-size: 22px;
            display: inline-block;
        }

        .form-subtitle {
            font-size: 13.5px;
            color: #6B7280;
            font-weight: 500;
        }

        .alert-error {
            background-color: #FEF2F2;
            border: 1px solid #FEE2E2;
            color: #DC2626;
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #4B5563;
            margin-bottom: 6px;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon-left {
            position: absolute;
            left: 14px;
            color: #9CA3AF;
            font-size: 14px;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 18px;
        }

        .input-toggle-password {
            position: absolute;
            right: 14px;
            color: #9CA3AF;
            font-size: 14px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.15s;
        }

        .input-toggle-password:hover {
            color: #4B5563;
        }

        .form-input {
            width: 100%;
            height: 46px;
            background-color: #F8F9FA;
            border: 1px solid #E5E7EB;
            border-radius: 11px;
            padding: 0 40px 0 40px;
            font-size: 13.5px;
            color: #1F2937;
            font-family: inherit;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input::placeholder {
            color: #9CA3AF;
        }

        .form-input:focus {
            background-color: #ffffff;
            border-color: #3D9F9E;
            box-shadow: 0 0 0 3px rgba(61, 159, 158, 0.12);
        }

        .form-options {
            display: flex;
            align-items: center;
            margin: 14px 0 20px;
        }

        .checkbox-container {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            user-select: none;
        }

        .checkbox-container input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 16px;
            height: 16px;
            border: 1.5px solid #D1D5DB;
            border-radius: 5px;
            outline: none;
            background-color: #fff;
            cursor: pointer;
            position: relative;
            transition: all 0.15s ease;
        }

        .checkbox-container input[type="checkbox"]:checked {
            background-color: #3D9F9E;
            border-color: #3D9F9E;
        }

        .checkbox-container input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            left: 4.5px;
            top: 1.5px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-label {
            font-size: 13px;
            color: #6B7280;
            font-weight: 500;
        }

        .btn-submit {
            width: 100%;
            height: 46px;
            background-color: #3D9F9E;
            color: #ffffff;
            border: none;
            border-radius: 11px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(61, 159, 158, 0.2);
        }

        .btn-submit:hover {
            background-color: #348E8D;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(61, 159, 158, 0.28);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .footer-note {
            margin-top: 32px;
            text-align: center;
            font-size: 11.5px;
            color: #9CA3AF;
            line-height: 1.7;
        }

        .footer-note a {
            color: #B3716D;
            font-weight: 700;
            text-decoration: none;
            display: block;
            margin-top: 2px;
            transition: color 0.15s;
        }

        .footer-note a:hover {
            color: #965A56;
            text-decoration: underline;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .login-card {
                grid-template-columns: 1fr;
                max-width: 440px;
                border-radius: 22px;
            }

            .card-banner {
                padding: 32px 28px;
            }

            .banner-center {
                display: none;
            }

            .card-form {
                padding: 36px 28px;
            }
        }
    </style>
</head>
<body>

<div class="login-card">

    <!-- LEFT PANEL -->
    <div class="card-banner">
        <div class="banner-header">
            <div class="brand-logo">
                mamina<span class="brand-dot"></span>
            </div>
            <div class="brand-subtitle">CONTENT MANAGEMENT SYSTEM</div>
        </div>

        <div class="banner-center">
            <!-- Smooth shield icon watermark -->
            <svg class="shield-icon" viewBox="0 0 100 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 0C50 0 88 14 96 26C98 56 86 98 50 120C14 98 2 56 4 26C12 14 50 0 50 0Z" fill="white" fill-opacity="0.3"/>
                <path d="M50 8C50 8 82 20 89 30C91 55 80 90 50 110C20 90 9 55 11 30C18 20 50 8 50 8Z" fill="white" fill-opacity="0.4"/>
                <path d="M50 16V102C74 84 83 54 81 34C75 26 50 16 50 16Z" fill="white" fill-opacity="0.2"/>
            </svg>
        </div>

        <div class="banner-footer">
            <h1 class="banner-title">Kelola konten<br>landing page</h1>
            <p class="banner-desc">Panel admin terpisah dari login member. Hanya admin yang dapat mengakses halaman ini.</p>
        </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="card-form">
        <div class="form-header">
            <h2 class="form-title">
                Selamat Datang <span class="wave-emoji">👋</span>
            </h2>
            <p class="form-subtitle">Masuk ke panel admin Mamina CMS</p>
        </div>

        @if($errors->any())
            <div class="alert-error">
                <i class="fas fa-circle-exclamation"></i>
                <span>{{ $errors->first() }}</span>
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf

            <!-- USERNAME -->
            <div class="form-group">
                <label class="form-label" for="username">USERNAME</label>
                <div class="input-group">
                    <span class="input-icon-left">
                        <i class="fa-regular fa-user"></i>
                    </span>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-input"
                        placeholder="admin@mamina.id"
                        value="{{ old('username') }}"
                        required
                        autocomplete="username">
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-group">
                <label class="form-label" for="password">PASSWORD</label>
                <div class="input-group">
                    <span class="input-icon-left">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input"
                        placeholder="password123"
                        required
                        autocomplete="current-password">
                    <button type="button" class="input-toggle-password" id="togglePasswordBtn" aria-label="Lihat password">
                        <i class="fa-regular fa-eye-slash" id="togglePasswordIcon"></i>
                    </button>
                </div>
            </div>

            <!-- REMEMBER ME -->
            <div class="form-options">
                <label class="checkbox-container">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkbox-label">Ingat saya</span>
                </label>
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" class="btn-submit">
                <span>Masuk ke CMS</span>
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </button>
        </form>

        <!-- FOOTER -->
        <div class="footer-note">
            Halaman ini hanya untuk administrator Mamina.
            <a href="mailto:support@mamina.id">Bantuan &amp; Dukungan</a>
        </div>
    </div>

</div>

<script>
    const toggleBtn = document.getElementById('togglePasswordBtn');
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePasswordIcon');

    if (toggleBtn && passwordInput && toggleIcon) {
        toggleBtn.addEventListener('click', function () {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            toggleIcon.className = isPassword ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash';
        });
    }
</script>

</body>
</html>
