@extends('main.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

<style>

    body {
        background-color: #FFFDEB;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding-top: 100px;
        padding-bottom: 60px;
    }

    /* Header "Keranjang Kamu" */
    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h1 {
        color: #F09A9D;
        font-size: 28px;
        font-weight: 700;
        margin: 0;
    }

    /* Area Konten Hijau Mint */
    .cart-content {
        background-color: #CFF3EB;
        /* Warna hijau mint background */
        padding: 40px;
        min-height: 400px;
        border-radius: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        /* Sedikit bayangan agar tidak flat */
    }

    /* Kartu Produk (Item) */
    .product-card {
        background-color: #FFDACF;
        /* Warna pink salem kartu */
        border-radius: 20px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .product-left {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .product-img {
        width: 80px;
        height: 80px;
        border-radius: 15px;
        object-fit: cover;
        background-color: #ddd;
        /* Placeholder jika gambar loading */
    }

    .product-info h3 {
        color: #444;
        font-size: 18px;
        margin: 0 0 5px 0;
        /* Reset margin atas */
        font-weight: 700;
    }

    .product-info .duration {
        color: #777;
        font-size: 14px;
        margin: 0 0 5px 0;
    }

    .product-info .price {
        color: #4FA49A;
        /* Warna teal untuk harga */
        font-weight: 700;
        font-size: 16px;
        margin: 0;
    }

    /* Kontrol Kuantitas (Kanan) */
    .product-controls {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .delete-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: #888;
        font-size: 18px;
        transition: color 0.3s;
    }

    .delete-btn:hover {
        color: #e74c3c;
        /* Berubah merah saat di-hover */
    }

    .qty-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .qty-btn {
        background-color: #fffdeb;
        border: none;
        width: 28px;
        height: 28px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        color: #555;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .qty-btn:hover {
        background-color: #f0f0f0;
    }

    .qty-display {
        background-color: #F48FB1;
        /* Pink tua untuk kotak angka */
        color: white;
        width: 28px;
        height: 28px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: bold;
    }

    /* Baris Total Belanja (Pill Shape) */
    .summary-bar {
        background-color: #D1EFE9;
        /* Sedikit lebih terang dari bg utama */
        border: 1px solid #4FA49A;
        border-radius: 50px;
        padding: 8px 8px 8px 8px;
        /* Padding sedikit diatur ulang */
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 40px;
    }

    .total-label-btn {
        background-color: #4FA49A;
        color: white;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
    }

    .total-items {
        color: #333;
        font-weight: 600;
        font-size: 15px;
    }

    .total-price {
        color: #333;
        font-weight: 700;
        font-size: 18px;
        margin-right: 20px;
    }

    /* Tombol Lanjutkan (Floating Bottom Right) */
    .action-area {
        display: flex;
        justify-content: flex-end;
        margin-top: 25px;
    }

    .checkout-btn {
        background-color: #4FA49A;
        color: white;
        text-decoration: none;
        /* Karena ini tag <a> */
        padding: 12px 30px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background 0.3s;
    }

    .checkout-btn:hover {
        background-color: #3d857d;
    }

    /* Responsive Mobile */
    @media (max-width: 600px) {
        .cart-content {
            padding: 20px;
            /* Padding hijau dikecilkan di HP */
            margin: 0 15px;
            /* Memberi jarak agar tidak menempel layar HP */
        }

        .product-card {
            flex-direction: column;
            align-items: flex-start;
            padding: 15px;
        }

        .product-controls {
            width: 100%;
            justify-content: space-between;
            /* Icon tong sampah di kiri, qty di kanan */
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed rgba(0, 0, 0, 0.1);
            /* Tambah garis pemisah samar di HP */
        }

        .summary-bar {
            flex-direction: column;
            gap: 15px;
            border-radius: 20px;
            padding: 20px;
            align-items: center;
            text-align: center;
        }

        .total-price {
            margin-right: 0;
            font-size: 20px;
        }

        .action-area {
            justify-content: center;
            /* Tombol lanjut di tengah pada HP */
        }

        .checkout-btn {
            width: 100%;
            /* Tombol lebar penuh di HP */
            text-align: center;
        }
    }
</style>

<div class="container">
    <div class="header">
        <h1>Keranjang Kamu</h1>
    </div>

    <div class="cart-content">

        <div class="product-card">
            <div class="product-left">
                <img src="https://images.unsplash.com/photo-1519689680058-324335c77eba?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" alt="Bayi" class="product-img">
                <div class="product-info">
                    <h3>Pijat Bayi</h3>
                    <p class="duration">±45 menit</p>
                    <p class="price">Rp 88.000</p>
                </div>
            </div>
            <div class="product-controls">
                <button class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                <div class="qty-wrapper">
                    <button class="qty-btn">-</button>
                    <div class="qty-display">1</div>
                    <button class="qty-btn">+</button>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-left">
                <img src="https://images.unsplash.com/photo-1519689680058-324335c77eba?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" alt="Bayi" class="product-img">
                <div class="product-info">
                    <h3>Pijat Bayi</h3>
                    <p class="duration">±45 menit</p>
                    <p class="price">Rp 88.000</p>
                </div>
            </div>
            <div class="product-controls">
                <button class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                <div class="qty-wrapper">
                    <button class="qty-btn">-</button>
                    <div class="qty-display">1</div>
                    <button class="qty-btn">+</button>
                </div>
            </div>
        </div>

        <div class="summary-bar">
            <div class="total-label-btn">Total Belanja</div>
            <div class="total-items">2 items</div>
            <div class="total-price">Rp 176.000</div>
        </div>

        <div class="action-area">
            <a href="/reservasi" class="checkout-btn">Lanjutkan Reservasi</a>
        </div>

    </div>
</div>