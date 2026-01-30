<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;

        background: #fffdeb;
        /* putih/cream */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        height: 90px;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        background-color: #fffdeb;
    }

    .mamina-navbar {
        background-color: #fffdeb !important;
    }

    .navbar .container {
        max-width: 1300px;
        padding: 0 32px;
    }

    .navbar-nav {
        gap: 28px;
    }

    .nav-link {
        color: #333 !important;
        font-weight: 500;
        font-size: 15px;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #3fb6a8 !important;
    }

    .cart-icon {
        position: relative;
        padding-right: 10px;
    }

    .cart-icon .badge {
        top: -5px;
        right: 0;
        font-size: 11px;
        padding: 2px 6px;
        min-width: 18px;
        height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-join {
        background: #3fb6a8;
        border: none;
        color: #fff;
        padding: 10px 24px;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-join:hover {
        background: #359c8f;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(63, 182, 168, 0.2);
        color: #fff;
    }

    .profile-btn {
        width: 45px;
        /* Lebar lingkaran */
        height: 45px;
        /* Tinggi lingkaran (harus sama dgn lebar) */
        background-color: #fae3e3;
        /* Warna Pink Background (mirip gambar) */
        color: #555555;
        /* Warna Icon Abu-abu tua */

        border-radius: 50%;
        /* KUNCI: Membuatnya jadi bulat sempurna */

        display: flex;
        /* Flexbox untuk menengahkan icon */
        align-items: center;
        /* Tengah secara vertikal */
        justify-content: center;
        /* Tengah secara horizontal */

        text-decoration: none;
        /* Hilangkan garis bawah link */
        transition: all 0.3s ease;
        border: 2px solid transparent;
        /* Agar tidak loncat saat di-hover */
    }

    /* Ukuran Icon di dalam lingkaran */
    .profile-btn i {
        font-size: 20px;
    }

    /* Efek saat mouse diarahkan (Hover) */
    .profile-btn:hover {
        background-color: #f5c6cb;
        /* Pink sedikit lebih gelap */
        color: #333;
        transform: scale(1.05);
        /* Sedikit membesar */
    }

    /* Responsif Mobile (Opsional: agar rapi di HP) */
    @media (max-width: 991px) {
        .profile-btn {
            margin: 0 auto;
            /* Tengah di mobile */
        }
    }

    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .navbar {
            height: auto;
            padding: 15px 0;
        }

        .navbar-nav {
            padding: 20px 0;
            gap: 15px;
        }

        .nav-item {
            text-align: center;
        }

        .cart-icon {
            justify-content: center;
            padding-right: 0;
        }

        .btn-join {
            margin-top: 10px;
        }
    }

    @media (max-width: 768px) {
        .navbar .container {
            padding: 0 20px;
        }
    }
</style>
<nav class="navbar navbar-expand-lg fixed-top mamina-navbar">
    <div class="container">
        <!-- Logo di Kiri -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Mamina" height="60">
        </a>

        <!-- Tombol Hamburger untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu di Kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member/terapis">Terapis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member/cabang">Cabang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member/riwayat-reservasi">Riwayat Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member/anak">Anak</a>
                </li>

                <li class="nav-item ms-3">
                    <a href="/member/profile" class="profile-btn">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>