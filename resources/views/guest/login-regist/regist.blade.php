@extends('guest.layouts.app')

@section('title', 'Registrasi Member')

@section('content')

<div class="auth-wrapper">
    <div class="auth-card">

        <h2 class="auth-title">Registrasi Member</h2>

        <form action="{{ route('guest.regist.post') }}" method="POST">
            @csrf

            <select name="branch_id" class="auth-input" required>
                <option selected disabled>Cabang Terdekat</option>
                <option value="1" {{ old('branch_id') == '1' ? 'selected' : '' }}>Malang</option>
                <option value="2" {{ old('branch_id') == '2' ? 'selected' : '' }}>Kediri</option>
            </select>
            @error('branch_id')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -8px; margin-bottom: 8px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <input type="text" name="name" class="auth-input" placeholder="Nama" value="{{ old('name') }}" required>
            @error('name')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -8px; margin-bottom: 8px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <input type="text" name="phone" class="auth-input" placeholder="Telp" value="{{ old('phone') }}" required>
            @error('phone')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -8px; margin-bottom: 8px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <input type="email" name="email" class="auth-input" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -8px; margin-bottom: 8px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <input type="password" name="password" class="auth-input" placeholder="Password (minimal 6 karakter)" required>
            @error('password')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -8px; margin-bottom: 8px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <input type="password" name="password_confirmation" class="auth-input" placeholder="Konfirmasi Password" required>

            <input type="text" name="referrer" class="auth-input" placeholder="Kode Referral (opsional)" value="{{ old('referrer') }}">
            @error('referrer')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -8px; margin-bottom: 8px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <label class="auth-checkbox">
                <input type="checkbox" name="terms" required>
                <span>Saya menyetujui <a href="#">Kebijakan Privasi</a></span>
            </label>
            @error('terms')
                <div style="color: #e74c3c; font-size: 11px; margin-top: -14px; margin-bottom: 12px; text-align: left; padding-left: 10px;">{{ $message }}</div>
            @enderror

            <button type="submit" class="auth-btn">Daftar</button>

            <p class="auth-footer">
                Sudah punya akun? <a href="{{ route('guest.login') }}">Login</a>
            </p>

        </form>

    </div>
</div>

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

    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #FFFDEB;
        font-family: 'nunito', sans-serif;
    }

    .auth-card {
        width: 380px;
        background: #D8F3EE;
        padding: 28px 26px 32px;
        border-radius: 14px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12);
    }

    .auth-title {
        font-family: 'fredoka', sans-serif;
        text-align: center;
        color: #EE9F9B;
        font-size: 18px;
        margin-bottom: 22px;
    }

    .auth-input {
        width: 100%;
        border: none;
        padding: 11px 14px;
        margin-bottom: 12px;
        border-radius: 20px;
        font-size: 12px;
        outline: none;
    }

    .auth-input::placeholder {
        color: #9a9a9a;
    }

    .auth-checkbox {
        display: flex;
        align-items: center;
        font-size: 11px;
        gap: 8px;
        margin: 8px 0 18px;
        color: #303030;
    }

    .auth-checkbox a {
        color: #EE9F9B;
        text-decoration: none;
    }

    .auth-btn {
        width: 100%;
        border: none;
        background: #5FA7A3;
        color: #fff;
        padding: 11px;
        border-radius: 24px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }

    .auth-btn:hover {
        background: #4a918e;
    }

    .auth-footer {
        margin-top: 14px;
        font-size: 12px;
        text-align: center;
    }

    .auth-footer a {
        color: #EE9F9B;
        text-decoration: none;
    }
</style>
@endsection