<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Mamina CMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #1A2535 0%, #2D3748 40%, #1a3a38 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Background decoration */
        body::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(90,169,163,.15) 0%, transparent 70%);
            top: -150px; right: -100px;
        }

        body::after {
            content: '';
            position: absolute;
            width: 400px; height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(242,154,160,.1) 0%, transparent 70%);
            bottom: -100px; left: -80px;
        }

        .login-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 100%;
            max-width: 900px;
            background: rgba(255,255,255,.04);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0,0,0,.4);
            position: relative;
            z-index: 1;
        }

        /* Left decorative panel */
        .login-panel {
            background: linear-gradient(160deg, #5AA9A3 0%, #3D8A85 60%, #2D6E6A 100%);
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .login-panel::before {
            content: '';
            position: absolute;
            width: 300px; height: 300px;
            background: rgba(255,255,255,.07);
            border-radius: 50%;
            top: -100px; right: -80px;
        }

        .panel-logo {
            font-family: 'Fredoka', sans-serif;
            font-size: 48px;
            color: #fff;
            line-height: 1;
        }

        .panel-logo .i-letter { color: #F29AA0; }

        .panel-tagline {
            font-size: 13px;
            color: rgba(255,255,255,.65);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 6px;
        }

        .panel-illustration {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 0;
        }

        .panel-illustration i {
            font-size: 100px;
            color: rgba(255,255,255,.15);
        }

        .panel-bottom p {
            font-size: 14px;
            color: rgba(255,255,255,.75);
            line-height: 1.7;
        }

        .panel-bottom .panel-title {
            font-size: 22px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 8px;
        }

        /* Right form */
        .login-form-wrap {
            padding: 48px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(255,255,255,.97);
        }

        .form-heading {
            margin-bottom: 32px;
        }

        .form-heading h1 {
            font-size: 26px;
            font-weight: 800;
            color: #1A2535;
            margin-bottom: 6px;
        }

        .form-heading p {
            font-size: 13.5px;
            color: #718096;
        }

        .form-group { margin-bottom: 18px; }

        .form-label {
            display: block;
            font-size: 12.5px;
            font-weight: 700;
            color: #2D3748;
            margin-bottom: 7px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #A0AEC0;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px 12px 40px;
            border: 1.5px solid #E2E8F0;
            border-radius: 10px;
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            color: #2D3748;
            background: #F7F8FC;
            outline: none;
            transition: all .2s;
        }

        .form-control:focus {
            border-color: #5AA9A3;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(90,169,163,.1);
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #5AA9A3, #3D8A85);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-family: 'Nunito', sans-serif;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
            transition: all .2s;
            box-shadow: 0 6px 20px rgba(90,169,163,.35);
            margin-top: 6px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(90,169,163,.45);
        }

        .alert-error {
            background: #FFF5F5;
            border: 1px solid #FED7D7;
            color: #C53030;
            border-radius: 9px;
            padding: 11px 14px;
            font-size: 13.5px;
            font-weight: 600;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-footer {
            margin-top: 24px;
            text-align: center;
            font-size: 12px;
            color: #A0AEC0;
        }

        .remember-wrap {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
        }

        .remember-wrap input[type="checkbox"] { accent-color: #5AA9A3; width: 15px; height: 15px; }
        .remember-wrap label { font-size: 13px; color: #4A5568; cursor: pointer; }

        @media (max-width: 640px) {
            .login-wrapper { grid-template-columns: 1fr; }
            .login-panel { display: none; }
            .login-form-wrap { padding: 36px 28px; }
        }
    </style>
</head>
<body>
<div class="login-wrapper">

    <!-- LEFT PANEL -->
    <div class="login-panel">
        <div>
            <div class="panel-logo">mam<span class="i-letter">i</span>na</div>
            <div class="panel-tagline">Content Management System</div>
        </div>

        <div class="panel-illustration">
            <i class="fas fa-shield-alt"></i>
        </div>

        <div class="panel-bottom">
            <div class="panel-title">Kelola konten<br>landing page</div>
            <p>Panel admin terpisah dari login member. Hanya admin yang dapat mengakses halaman ini.</p>
        </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="login-form-wrap">
        <div class="form-heading">
            <h1>Selamat Datang <i class="fas fa-hand" style="font-size: 22px; color: #5AA9A3;"></i></h1>
            <p>Masuk ke panel admin Mamina CMS</p>
        </div>

        @if($errors->has('username'))
            <div class="alert-error">
                <i class="fas fa-exclamation-circle"></i>
                {{ $errors->first('username') }}
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <div class="input-wrap">
                    <i class="fas fa-user"></i>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username..."
                        value="{{ old('username') }}"
                        required
                        autocomplete="username">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="input-wrap">
                    <i class="fas fa-lock"></i>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password..."
                        required
                        autocomplete="current-password">
                </div>
            </div>

            <div class="remember-wrap">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ingat saya</label>
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt" style="margin-right:6px"></i>
                Masuk ke CMS
            </button>
        </form>

        <div class="form-footer">
            Halaman ini hanya untuk administrator Mamina.
        </div>
    </div>

</div>
</body>
</html>
