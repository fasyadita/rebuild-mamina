<style>
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;

    background: #fffdeb; /* putih/cream */
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

.mamina-header {
    background-color: #fffdeb !important;
}

.header .container {
    max-width: 1300px;
    padding: 0 32px;
}

.header-nav {
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

/* Mobile Responsive */
@media (max-width: 991.98px) {
    .header {
        height: auto;
        padding: 15px 0;
    }

    .header-nav {
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
    .header .container {
        padding: 0 20px;
    }
}
</style>
<nav class="header header-expand-lg fixed-top mamina-header">
    <div class="container">
        <!-- Logo di Kiri -->
        <a class="header-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Mamina" height="60">
        </a>

        <!-- Tombol Hamburger untuk Mobile -->
        <button class="header-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNav">
            <span class="header-toggler-icon"></span>
        </button>

        <!-- Menu di Kanan -->
        <div class="collapse header-collapse justify-content-end" id="headerNav">
            <ul class="header-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Terapis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Cabang</a>
                </li>
                
                <!-- Join Member Button -->
                <li class="nav-item ms-3">
                    <a href="#" class="btn btn-primary btn-join">
                        Login
                    </a>
                </li>
                 <li class="nav-item ms-3">
                    <a href="#" class="btn btn-primary btn-join">
                        Daftar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
