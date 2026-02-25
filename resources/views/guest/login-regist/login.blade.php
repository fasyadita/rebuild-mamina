@extends('guest.layouts.app')

@section('title', 'Login Membership Mamina')

@section('content')
<section class="login-page">
    <div class="login-wrapper">

        <div class="login-brand">
            <img src="{{ asset('img/logo-2.png') }}" alt="Mamina">
        </div>

        <div class="login-card">
            <h2 class="login-title">Masuk</h2>

            <form action="/member" method="GET"> <input type="text" placeholder="Telp" required>
                <input type="password" placeholder="Password" required>

                <div class="reset-password">
                    <a href="#">Reset Password</a>
                </div>

                <button type="submit" class="btn-login">Masuk</button>
            </form>

            <p class="register-text">
                Belum punya akun?
                <a href="/guest/regist">Daftar</a>
            </p>
        </div>

    </div>
</section>

<style>
    * {
        box-sizing: border-box;
    }

    @font-face {
        font-family: 'fredoka';
        src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'nunito';
        src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .login-page {
        min-height: 100vh;
        background: #FFFDEB;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        font-family: 'nunito', sans-serif;
        padding: 50px;
    }

    .login-wrapper {
        width: 100%;
        max-width: 900px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 60px;
        background: transparent;
    }

    /* AREA KIRI: LOGO */
    .login-brand {
        display: flex;
        justify-content: left;
        /* Memastikan logo selalu di tengah areanya */
    }

    .login-brand img {
        width: 80%;
        max-width: 200px;
        object-fit: contain;
    }

    /* AREA KANAN: CARD LOGIN */
    .login-card {
        background: rgba(180, 235, 230, 0.45);
        padding: 40px 30px;
        border-radius: 18px;
        box-shadow: 0 8px 18px rgba(0, 0, 0, .08);
        /* Shadow dihaluskan */
        width: 100%;
        max-width: 400px;
        /* Membatasi lebar kotak agar tidak mbleber */
        margin: 0 auto;
        /* Tengah-tengah di areanya */
    }

    .login-title {
        text-align: center;
        font-family: 'fredoka', sans-serif;
        color: #EE9F9B;
        margin-top: 0;
        margin-bottom: 24px;
        font-size: 28px;
    }

    .login-card form {
        display: flex;
        flex-direction: column;
        /* Memastikan input turun ke bawah */
    }

    .login-card input {
        width: 100%;
        border: none;
        padding: 14px 16px;
        /* Padding input sedikit ditebalkan agar enak diklik */
        border-radius: 30px;
        margin-bottom: 14px;
        outline: none;
        font-size: 14px;
        font-family: 'nunito', sans-serif;
    }

    .reset-password {
        text-align: right;
        margin-bottom: 20px;
        /* Jarak dengan tombol diperlebar sedikit */
    }

    .reset-password a {
        font-size: 12px;
        color: #EE9F9B;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .reset-password a:hover {
        opacity: 0.7;
    }

    .btn-login {
        width: 100%;
        background: #5DA5A4;
        border: none;
        padding: 14px;
        border-radius: 30px;
        color: #fff;
        font-size: 15px;
        font-family: 'nunito', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-login:hover {
        background: #4a8a89;
    }

    .register-text {
        text-align: center;
        font-size: 13px;
        margin-top: 20px;
        color: #555;
    }

    .register-text a {
        color: #EE9F9B;
        font-weight: 600;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .register-text a:hover {
        opacity: 0.7;
    }

    /* --- RESPONSIVE (TAMPILAN HP) --- */
    @media (max-width: 768px) {
        .login-page {
            align-items: flex-start;
            padding-top: 10px;
        }

        .login-wrapper {
            grid-template-columns: 1fr;
            gap: 15px;
            max-width: 450px;
        }

        .login-brand img {
            max-width: 100px;
            margin: 20px auto;
        }

        .login-card {
            padding: 25px 20px;
            /* Ruang dalam kotak dikurangi sedikit agar lebih ringkas */
        }

        .login-title {
            font-size: 22px;
            margin-bottom: 15px;
            /* Jarak bawah judul dikurangi */
        }
    }
</style>
@endsection