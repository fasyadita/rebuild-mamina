<style>
    body {
        background: linear-gradient(90deg,
                #FADCD5 0%,
                #FFF3EF 50%,
                #EAF8F6 100%);
    }

    .navbar-collapse.collapse {
        visibility: visible !important;
    }

    nav.navbar.mamina-navbar {
        margin: 10px 20px;
        border-radius: 50px;
        width: calc(100% - 40px);
    }

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        background: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        height: 90px;
        width: 100%;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        background: #ffffff;
    }

    .mamina-navbar {
        background-color: #ffffff !important;
    }

    .navbar .container {
        max-width: 1400px;
        padding-left: 16px;
        padding-right: 16px;
    }

    .navbar-nav {
        gap: clamp(6px, 1.2vw, 20px);
    }

    .nav-link {
        color: #333 !important;
        font-weight: 500;
        font-size: clamp(12px, 1.1vw, 15px);
        white-space: nowrap;
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
        padding: 9px clamp(14px, 1.5vw, 24px);
        border-radius: 50px;
        font-weight: 500;
        font-size: clamp(12px, 1vw, 15px);
        white-space: nowrap;
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

    /* =========================
   RESPONSIVE NAVBAR
========================= */

    /* Desktop lebar - 1400px ke bawah */
    @media (max-width: 1400px) {

        nav.navbar.mamina-navbar {
            margin: 10px 16px;
            width: calc(100% - 32px);
        }

        .mamina-navbar .container {
            max-width: 100%;
            padding-left: 12px;
            padding-right: 12px;
        }

        .mamina-navbar .navbar-nav {
            gap: clamp(5px, 0.9vw, 16px);
        }
    }

    /* Laptop kecil / tablet landscape */
    @media (max-width: 1200px) {

        nav.navbar.mamina-navbar {
            margin: 10px 12px;
            width: calc(100% - 24px);
        }

        .mamina-navbar .container {
            max-width: 100%;
            padding-left: 10px;
            padding-right: 10px;
        }

        .mamina-navbar .navbar-nav {
            gap: clamp(4px, 0.7vw, 12px);
        }

        .mamina-navbar .nav-link {
            font-size: clamp(11px, 0.9vw, 13px);
        }

        .btn-join {
            padding: 8px 14px;
            font-size: 12px;
        }
    }

    /* Laptop sangat kecil */
    @media (max-width: 1100px) {

        nav.navbar.mamina-navbar {
            margin: 10px 10px;
            width: calc(100% - 20px);
        }

        .mamina-navbar .container {
            max-width: 100%;
            padding-left: 8px;
            padding-right: 8px;
        }

        .mamina-navbar .navbar-nav {
            gap: clamp(3px, 0.5vw, 10px);
        }

        .mamina-navbar .nav-link {
            font-size: 11.5px;
        }

        .btn-join {
            padding: 7px 12px;
            font-size: 11.5px;
        }
    }


    /* =========================
   TABLET & MOBILE
========================= */
    @media (max-width: 991.98px) {

        nav.navbar.mamina-navbar {
            top: 10px;
            left: 10px;
            right: 10px;

            width: calc(100% - 20px);

            margin: 0;

            min-height: 70px;
            height: auto;

            border-radius: 30px;

            padding: 8px 15px;
        }

        /* Container */
        .mamina-navbar .container {
            width: 100%;
            max-width: 100%;

            padding: 0 5px;

            display: flex;
            align-items: center;
        }

        /* Logo */
        .mamina-navbar .navbar-brand {
            margin-right: 0;
            padding: 0;
        }

        .mamina-navbar .navbar-brand img {
            height: 48px;
            width: auto;
        }

        /* Hamburger */
        .mamina-navbar .navbar-toggler {
            border: none;
            padding: 8px;

            margin-left: auto;

            outline: none;
            box-shadow: none;
        }

        .mamina-navbar .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
        }

        /* Menu ketika dibuka */
        .mamina-navbar .navbar-collapse {
            width: 100%;

            margin-top: 10px;
            padding: 12px 0 15px;

            border-top: 1px solid #eeeeee;

            background: #ffffff;

            border-radius: 0 0 25px 25px;

            /* Bisa scroll di dalam menu, bukan background */
            max-height: calc(100dvh - 90px);
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* List menu */
        .mamina-navbar .navbar-nav {
            width: 100%;

            display: flex;
            flex-direction: column;

            align-items: center !important;

            gap: 3px;

            padding: 0;
            margin: 0;
        }

        /* Item */
        .mamina-navbar .nav-item {
            width: 100%;

            display: flex;
            justify-content: center;
            align-items: center;

            margin-left: 0 !important;
        }

        /* Link */
        .mamina-navbar .nav-link {
            width: 100%;

            text-align: center;

            padding: 9px 10px !important;

            font-size: 14px;
            font-weight: 500;
        }

        /* Hover */
        .mamina-navbar .nav-link:hover {
            background: #f3fbfa;
            border-radius: 10px;
        }

        /* Cart */
        .mamina-navbar .cart-icon {
            width: auto;

            display: inline-flex;

            justify-content: center;

            padding: 9px 15px !important;
        }

        .mamina-navbar .cart-icon .badge {
            top: 2px;
            right: 2px;
        }

        /* Tombol Daftar Member */
        .mamina-navbar .btn-join {
            width: auto;

            min-width: 150px;

            margin-top: 8px;

            padding: 9px 22px;

            font-size: 13px;
        }
    }


    /* =========================
   HP
========================= */
    @media (max-width: 576px) {

        nav.navbar.mamina-navbar {
            top: 8px;
            left: 8px;
            right: 8px;

            width: calc(100% - 16px);

            border-radius: 25px;

            padding: 7px 12px;
        }

        /* Container */
        .mamina-navbar .container {
            padding: 0 3px;
        }

        /* Logo */
        .mamina-navbar .navbar-brand img {
            height: 43px;
        }

        /* Hamburger */
        .mamina-navbar .navbar-toggler {
            padding: 6px;
        }

        /* Menu */
        .mamina-navbar .navbar-collapse {
            margin-top: 8px;
            padding: 10px 0 12px;
        }

        .mamina-navbar .navbar-nav {
            gap: 2px;
        }

        .mamina-navbar .nav-link {
            font-size: 13px;

            padding: 8px 10px !important;
        }

        /* Cart */
        .mamina-navbar .cart-icon {
            padding: 8px 15px !important;
        }

        .mamina-navbar .cart-icon i {
            font-size: 17px;
        }

        .mamina-navbar .cart-icon .badge {
            top: 1px;
            right: 1px;

            min-width: 17px;
            height: 17px;

            font-size: 10px;
        }

        /* Daftar Member */
        .mamina-navbar .btn-join {
            min-width: 140px;

            padding: 8px 20px;

            font-size: 12px;

            margin-top: 7px;
        }
    }


    /* =========================
   HP SANGAT KECIL
========================= */
    @media (max-width: 400px) {

        nav.navbar.mamina-navbar {
            top: 6px;
            left: 6px;
            right: 6px;

            width: calc(100% - 12px);

            border-radius: 22px;
        }

        .mamina-navbar .navbar-brand img {
            height: 39px;
        }

        .mamina-navbar .navbar-toggler {
            padding: 5px;
        }

        .mamina-navbar .nav-link {
            font-size: 12px;

            padding: 7px 8px !important;
        }

        .mamina-navbar .btn-join {
            min-width: 130px;

            font-size: 11px;

            padding: 8px 16px;
        }
    }
</style>
<nav class="navbar navbar-expand-lg fixed-top mamina-navbar navbar-light">
    <div class="container">
        <!-- Logo di Kiri -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Mamina" height="50">
        </a>

        <!-- Tombol Hamburger untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu di Kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#tentang">Tentang Mamina</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#artikel">Artikel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#layanan-unggulan">Treatment</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#essentials">Essentials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#gentle-living">Gentle Living</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#kelas-pro">Kelas Pro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#maminago">Mamina Go</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#testimony">Testimommy</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#cabang">Cabang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}#faq-section">FAQ</a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    (function () {
        const navbarNav = document.getElementById('navbarNav');
        if (!navbarNav) return;

        // Saat menu dibuka: lock scroll body
        navbarNav.addEventListener('show.bs.collapse', function () {
            document.body.style.overflow = 'hidden';
        });

        // Saat menu ditutup: unlock scroll body
        navbarNav.addEventListener('hide.bs.collapse', function () {
            document.body.style.overflow = '';
        });

        // Klik link di dalam menu → tutup menu dulu, lalu scroll ke section
        navbarNav.querySelectorAll('.nav-link[href*="#"]').forEach(function (link) {
            link.addEventListener('click', function () {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarNav);
                if (bsCollapse) bsCollapse.hide();
            });
        });
    })();
</script>