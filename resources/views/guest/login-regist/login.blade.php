@extends('guest.layouts.app')

@section('title', 'Login Membership Mamina')

@section('content')
<section class="login-page">
    <div class="login-wrapper">

        {{-- LOGO --}}
        <div class="login-brand">
            <img src="{{ asset('img/logo-2.png') }}" alt="Mamina">
        </div>

        {{-- CARD --}}
        <div class="login-card">
            <h2 class="login-title">Masuk</h2>

            <form>
                <input type="text" placeholder="Telp">
                <input type="password" placeholder="Password">

                <div class="reset-password">
                    <a href="#">Reset Password</a>
                </div>

                <a href="/member" class="btn-login">Masuk</a>
            </form>

            <p class="register-text">
                Belum punya akun?
                <a href="#">Daftar</a>
            </p>
        </div>

    </div>
</section>

<style>
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
    align-items: center;
    justify-content: center;
    font-family: 'Nunito', sans-serif;
}

.login-wrapper {
    width: 100%;
    max-width: 1000px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 40px;
    padding: 40px;
}

/* LOGO */
.login-brand img {
    max-width: 260px;
}

/* CARD */
.login-card {
    background: rgba(180, 235, 230, 0.45); /* B4EBE6 45% */
    padding: 40px 30px;
    border-radius: 18px;
    box-shadow: 0 8px 18px rgba(0,0,0,.15);
}

.login-title {
    text-align: center;
    font-family: 'Fredoka', sans-serif;
    color: #EE9F9B;
    margin-bottom: 24px;
}

/* INPUT */
.login-card input {
    width: 100%;
    border: none;
    padding: 12px 16px;
    border-radius: 30px;
    margin-bottom: 14px;
    outline: none;
    font-size: 13px;
}

/* RESET */
.reset-password {
    text-align: right;
    margin-bottom: 16px;
}

.reset-password a {
    font-size: 11px;
    color: #EE9F9B;
    text-decoration: none;
}

/* BUTTON */
.btn-login {
    width: 100%;
    background: #5DA5A4;
    border: none;
    padding: 12px;
    border-radius: 30px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
}

/* REGISTER */
.register-text {
    text-align: center;
    font-size: 12px;
    margin-top: 14px;
}

.register-text a {
    color: #EE9F9B;
    font-weight: 600;
    text-decoration: none;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .login-wrapper {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .login-brand {
        margin-bottom: 20px;
    }
}

</style>
@endsection
