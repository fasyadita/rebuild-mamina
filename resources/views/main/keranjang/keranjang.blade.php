@extends('main.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

    <style>

        body {
            background-color: #FFFDEB;
        }

        /* Header "Keranjang Kamu" */
        .header {
            background: linear-gradient(90deg, #DFF6F0 0%, #FAE3E3 100%);
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            color: #F09A9D;
            font-size: 24px;
            font-weight: 600;
        }

        /* Area Konten Hijau Mint */
        .cart-content {
            background-color: #CFF3EB; /* Warna hijau mint background */
            padding: 30px;
            min-height: 500px;
            position: relative;
            margin-top: 50px;
            border-radius: 30px;


        }

        /* Kartu Produk (Item) */
        .product-card {
            background-color: #FFDACF; /* Warna pink salem kartu */
            border-radius: 20px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
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
            background-color: #ddd; /* Placeholder jika gambar loading */
        }

        .product-info h3 {
            color: #444;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .product-info .duration {
            color: #777;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .product-info .price {
            color: #4FA49A; /* Warna teal untuk harga */
            font-weight: 600;
            font-size: 16px;
        }

        /* Kontrol Kuantitas (Kanan) */
        .product-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .delete-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: #555;
            font-size: 18px;
        }

        .qty-wrapper {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .qty-btn {
            background-color: #fff;
            border: none;
            width: 25px;
            height: 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            color: #555;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qty-display {
            background-color: #F48FB1; /* Pink tua untuk kotak angka */
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        /* Baris Total Belanja (Pill Shape) */
        .summary-bar {
            background-color: #D1EFE9; /* Sedikit lebih terang dari bg utama */
            border: 1px solid #4FA49A;
            border-radius: 50px;
            padding: 5px;
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
            font-weight: 500;
        }

        .total-items {
            color: #333;
            font-weight: 500;
        }

        .total-price {
            color: #333;
            font-weight: 600;
            font-size: 18px;
            margin-right: 20px;
        }

        /* Tombol Lanjutkan (Floating Bottom Right) */
        .action-area {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .checkout-btn {
            background-color: #4FA49A;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: background 0.3s;
        }

        .checkout-btn:hover {
            background-color: #3d857d;
        }

        /* Responsive Mobile */
        @media (max-width: 600px) {
            .product-card {
                flex-direction: column;
                align-items: flex-start;
            }
            .product-controls {
                width: 100%;
                justify-content: flex-end;
                margin-top: 10px;
            }
            .summary-bar {
                flex-direction: column;
                gap: 10px;
                border-radius: 15px;
                padding: 15px;
                align-items: stretch;
                text-align: center;
            }
            .total-price {
                margin-right: 0;
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
