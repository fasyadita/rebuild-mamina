<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
        background: #fffdeb;
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
</style>
<nav class="navbar navbar-expand-lg fixed-top mamina-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Mamina" height="60">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guest/terapis">Terapis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guest/cabang">Cabang</a>
                </li>

                <li class="nav-item ms-3">
                    <a href="/guest/login" class="btn btn-primary btn-join">
                        Login
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a href="/guest/regist" class="btn btn-primary btn-join">
                        Daftar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>