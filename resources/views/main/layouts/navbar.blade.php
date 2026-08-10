<style>
    .navbar-collapse.collapse {
    visibility: visible !important;
}
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        background: #fffdeb;
        /* putih/cream */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        height: 90px;
        width: 100%;
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

    .navbar-toggler {
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%280, 0, 0, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
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
<nav class="navbar navbar-expand-lg fixed-top mamina-navbar navbar-light">
    <div class="container">
        <!-- Logo di Kiri -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Mamina" height="60">
        </a>

        <!-- Tombol Hamburger untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu di Kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#about">Tentang Kami</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#testimony">Testimoni</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('event') }}">Kegiatan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#cabang">Cabang</a>
                </li>

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

                <li class="nav-item ms-3">
                    <a href="{{ route('guest.home') }}" class="btn btn-primary btn-join">
                        Daftar Member
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>