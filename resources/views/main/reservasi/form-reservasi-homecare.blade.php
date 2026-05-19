@extends('main.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

<style>

    html, body {
    margin: 0;
    padding: 0;
    background-color: #fffdeb !important;
}

    /* 2. Layout Utama (Grid 2 Kolom) */
    .main-layout {
        background-color: #FFFDEB;
        display: grid;
        grid-template-columns: 2fr 1fr;
        /* Kiri 2 bagian, Kanan 1 bagian */
        gap: 30px;
        width: 100%;
        max-width: 1100px;
        margin: 140px auto 80px auto;
    }


    /* 3. Styling Umum Card (Mint Green) */
    .card-panel {
        background-color: #CFF3EB;
        /* Hijau Mint */
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        /* Efek bayangan */
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* ----- KOLOM KIRI (FORM) ----- */
    .form-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-header h1 {
        color: #F09A9D;
        /* Warna Pink Judul */
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .form-header p {
        color: #555;
        font-size: 13px;
        line-height: 1.5;
    }

    /* Style Input Form */
    .form-group {
        margin-bottom: 15px;
    }

    .custom-input,
    .custom-select {
        width: 100%;
        padding: 12px 20px;
        border-radius: 50px;
        /* Membuat input bulat lonjong */
        border: none;
        outline: none;
        font-size: 14px;
        color: #555;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    /* Khusus Textarea (Alamat) */
    textarea.custom-input {
        border-radius: 20px;
        /* Sudut lebih kotak untuk area teks */
        resize: vertical;
        height: 120px;
    }

    /* Tombol Submit */
    .submit-btn {
        background-color: #4FA49A;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
        transition: background 0.3s;
    }

    .submit-btn:hover {
        background-color: #3d857d;
    }

    /* ----- KOLOM KANAN (SIDEBAR) ----- */
    .sidebar {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    /* Card Summary & Promo */
    .sidebar-title {
        color: #F09A9D;
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
        font-size: 18px;
    }

    /* List Harga */
    .price-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
        color: #555;
        font-size: 14px;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
    }

    .divider {
        height: 1px;
        background-color: rgba(0, 0, 0, 0.1);
        margin: 10px 0;
    }

    .total-row {
        display: flex;
        justify-content: space-between;
        font-weight: 700;
        color: #444;
        font-size: 16px;
    }

    /* Promo Code Input Group */
    .promo-group {
        display: flex;
        gap: 10px;
    }

    .promo-input {
        flex: 1;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 13px;
    }

    .apply-btn {
        background-color: #4FA49A;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }

    /* 4. Responsive Mobile */
    @media (max-width: 768px) {
        .main-layout {
            grid-template-columns: 1fr;
            padding: 20px;
        }

    }
</style>


<div class="main-layout">

    <div class="card-panel">
        <div class="form-header">
            <h1>Form Reservasi HomeCare</h1>
            <p>Buka Setiap Hari<br>Jam Operasional Mamina : 09.00 - 20.00 WIB</p>
            <p style="color:#555; font-size:14px; margin-top:8px;">Cabang: {{ $branches[$branch] ?? ucfirst($branch ?? 'malang') }}</p>
        </div>

        <form action="{{ route('reservasi.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="service" value="homecare">
            <input type="hidden" name="branch" value="{{ $branch ?? 'malang' }}">

            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" class="custom-input" placeholder="Nama Bunda" required>
            </div>

            <div class="form-group">
                <input type="text" name="pregnancy_age" value="{{ old('pregnancy_age') }}" class="custom-input" placeholder="Usia Kehamilan (jika bumil)">
            </div>

            <div class="form-group">
                <input type="text" name="baby_age" value="{{ old('baby_age') }}" class="custom-input" placeholder="Usia Bayi">
            </div>

            <div class="form-group">
                <textarea name="complaint" class="custom-input" placeholder="Keluhan (jika ada)">{{ old('complaint') }}</textarea>
            </div>

            <div class="form-group">
                <input type="date" name="date" value="{{ old('date') }}" class="custom-input" required>
            </div>

            <div class="form-group">
                <select name="payment_method" class="custom-select" required>
                    <option value="" disabled selected>Jenis Pembayaran</option>
                    <option value="Tunai" {{ old('payment_method') == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                    <option value="Transfer" {{ old('payment_method') == 'Transfer' ? 'selected' : '' }}>Transfer</option>
                </select>
            </div>

            <div class="form-group">
                <select name="previous_treatment" class="custom-select">
                    <option value="" disabled selected>Pernah Treatment atau Baru Pertama Kali</option>
                    <option value="Pernah" {{ old('previous_treatment') == 'Pernah' ? 'selected' : '' }}>Pernah</option>
                    <option value="Baru" {{ old('previous_treatment') == 'Baru' ? 'selected' : '' }}>Baru</option>
                </select>
            </div>

            <div class="form-group">
                <select name="is_member" class="custom-select">
                    <option value="" disabled selected>Sudah Mendaftar Member?</option>
                    <option value="Sudah" {{ old('is_member') == 'Sudah' ? 'selected' : '' }}>Sudah</option>
                    <option value="Belum" {{ old('is_member') == 'Belum' ? 'selected' : '' }}>Belum</option>
                </select>
            </div>

            <div class="form-group">
                <textarea name="address" class="custom-input" placeholder="Alamat domisili">{{ old('address') }}</textarea>
            </div>

            <div class="form-group">
                <input type="text" name="referral" value="{{ old('referral') }}" class="custom-input" placeholder="Kenal mamina dari?">
            </div>

            <button type="submit" class="submit-btn">Lanjutkan Pembayaran</button>
        </form>
    </div>

    <div class="sidebar">

        <div class="card-panel">
            <h3 class="sidebar-title">Kode Promo</h3>
            <div class="promo-group">
                <input type="text" class="promo-input" placeholder="Enter Code">
                <button class="apply-btn">Terapkan</button>
            </div>
        </div>

        <div class="card-panel">
            <h3 class="sidebar-title">Ringkasan Keranjang</h3>
            @php
                $cartItems = $cart ?? session('cart', []);
                $cartTotalDisplay = $cartTotal ?? 0;
            @endphp
            <div class="price-list">
                @forelse($cartItems as $item)
                    <div class="price-row">
                        <span>{{ $item['name'] }} x{{ $item['qty'] }}</span>
                        <span>Rp {{ number_format(($item['price'] ?? 0) * ($item['qty'] ?? 1), 0, ',', '.') }}</span>
                    </div>
                @empty
                    <div class="price-row">
                        <span>Keranjang kosong</span>
                    </div>
                @endforelse

                <div class="divider"></div>

                <div class="total-row">
                    <span>Total</span>
                    <span>Rp {{ number_format($cartTotalDisplay, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>

    </div>

</div>