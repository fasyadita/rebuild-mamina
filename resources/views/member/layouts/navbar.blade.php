<style>
    /* =========================
       BACKGROUND
    ========================= */
    body {
        background: linear-gradient(
            90deg,
            #FADCD5 0%,
            #FFF3EF 50%,
            #EAF8F6 100%
        );
    }

    /* =========================
       NAVBAR
    ========================= */
    nav.navbar.mamina-navbar {
        position: fixed;
        top: 10px;
        left: 20px;
        right: 20px;

        width: auto;
        height: 80px;

        background: #ffffff !important;
        border-radius: 50px;

        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);

        z-index: 9999;

        padding: 0;
    }

    .navbar .container {
        max-width: 1300px;
        height: 100%;
    }

    /* =========================
       LOGO
    ========================= */
    .navbar-brand {
        display: flex;
        align-items: center;
        padding: 0;
        margin-right: 30px;
    }

    .navbar-brand img {
        height: 60px;
        width: auto;
        object-fit: contain;
    }

    /* =========================
       MENU
    ========================= */
    .navbar-collapse {
        height: 100%;
    }

    .navbar-nav {
        height: 100%;
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .nav-item {
        display: flex;
        align-items: center;
    }

    .nav-link {
        color: #333 !important;
        font-size: 15px;
        font-weight: 500;

        padding: 8px 0 !important;

        white-space: nowrap;

        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #3fb6a8 !important;
    }

    /* =========================
       CART
    ========================= */
    .cart-icon {
        position: relative;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 8px 10px !important;
    }

    .cart-icon i {
        color: #333;
        font-size: 18px;

        transition: color 0.3s ease;
    }

    .cart-icon:hover i {
        color: #3fb6a8;
    }

    .cart-icon .badge {
        position: absolute;

        top: -4px;
        right: -4px;

        min-width: 17px;
        height: 17px;

        padding: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 10px;
        font-weight: 600;

        border: 2px solid #fff;
    }

    /* =========================
       PROFILE BUTTON
    ========================= */
    .profile-btn {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #3fb6a8;
        color: #ffffff;

        border-radius: 50%;

        text-decoration: none;

        transition: all 0.3s ease;
    }

    .profile-btn i {
        font-size: 16px;
    }

    .profile-btn:hover {
        background: #359c8f;
        color: #ffffff;

        transform: translateY(-2px);

        box-shadow: 0 4px 12px rgba(63, 182, 168, 0.25);
    }

    /* =========================
       HAMBURGER
    ========================= */
    .navbar-toggler {
        border: none;
        padding: 8px;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%280, 0, 0, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    /* =========================
       MOBILE
    ========================= */
    @media (max-width: 991.98px) {

        nav.navbar.mamina-navbar {
            top: 10px;
            left: 10px;
            right: 10px;

            width: auto;
            height: auto;

            min-height: 70px;

            padding: 10px 20px;

            border-radius: 30px;
        }

        .navbar .container {
            padding: 0;
        }

        .navbar-brand {
            margin-right: 0;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-collapse {
            height: auto;
        }

        .navbar-nav {
            height: auto;

            padding: 15px 0 5px;

            gap: 12px;
        }

        .nav-item {
            width: 100%;
            justify-content: center;
        }

        .nav-link {
            text-align: center;
        }

        .cart-icon {
            justify-content: center;
        }

        .profile-btn {
            margin-top: 5px;
        }
    }

    @media (max-width: 576px) {

        nav.navbar.mamina-navbar {
            padding: 8px 15px;
        }

        .navbar-brand img {
            height: 45px;
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
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menu di Kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav align-items-center">

                <!-- Layanan -->
                <li class="nav-item">
                    <a class="nav-link" href="/member/services">
                        Layanan
                    </a>
                </li>

                <!-- Terapis -->
                <li class="nav-item">
                    <a class="nav-link" href="/member/terapis">
                        Terapis
                    </a>
                </li>

                <!-- Cabang -->
                <li class="nav-item">
                    <a class="nav-link" href="/member/cabang">
                        Cabang
                    </a>
                </li>

                <!-- Riwayat Reservasi -->
                <li class="nav-item">
                    <a class="nav-link" href="/member/riwayat-reservasi">
                        Riwayat Reservasi
                    </a>
                </li>

                <!-- Anak -->
                <li class="nav-item">
                    <a class="nav-link" href="/member/anak">
                        Anak
                    </a>
                </li>

                <!-- Keranjang -->
                <li class="nav-item position-relative ms-3">
                    <a class="nav-link cart-icon" href="{{ route('keranjang') }}">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        @php
                        $cart = session('cart', []);

                        $totalCart = 0;

                        foreach ($cart as $item) {
                        $totalCart += $item['qty'];
                        }
                        @endphp

                        <span class="badge bg-danger rounded-circle position-absolute">
                            {{ $totalCart }}
                        </span>
                    </a>
                </li>

                <!-- Profile -->
                <li class="nav-item ms-3">

                    <a href="/member/profile" class="profile-btn">

                        <i class="fas fa-user"></i>

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>