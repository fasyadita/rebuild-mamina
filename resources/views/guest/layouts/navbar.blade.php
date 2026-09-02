<style>
    * {
        box-sizing: border-box;

    }

    body {
        background: linear-gradient(90deg,
                #FADCD5 0%,
                #FFF3EF 50%,
                #EAF8F6 100%);
    }

    /* =========================================
       NAVBAR
    ========================================= */

    .mamina-navbar {
        position: fixed;
        top: 10px;
        left: 12px;
        right: 12px;

        width: auto;
        min-height: 78px;

        z-index: 9999;

        background: #ffffff !important;

        border: 1px solid rgba(0, 0, 0, 0.08);

        border-radius: 50px;

        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);

        padding: 0;
    }


    /* =========================================
       CONTAINER
    ========================================= */

    .mamina-navbar .container {
        max-width: 1300px;
        width: 100%;

        height: 78px;

        padding: 0 28px;

        display: flex;
        align-items: center;
    }


    /* =========================================
       LOGO
    ========================================= */

    .mamina-navbar .navbar-brand {
        display: flex;
        align-items: center;

        padding: 0;

        margin-right: auto;
    }

    .mamina-navbar .navbar-brand img {
        height: 58px;
        width: auto;

        display: block;
    }


    /* =========================================
       MENU
    ========================================= */

    .mamina-navbar .navbar-collapse {
        flex-grow: 0;
    }

    .mamina-navbar .navbar-nav {
        display: flex;
        align-items: center;

        gap: 28px;

        margin: 0;
    }

    .mamina-navbar .nav-item {
        display: flex;
        align-items: center;
    }

    .mamina-navbar .nav-link {
        padding: 8px 0 !important;

        color: #222 !important;

        font-family: 'Nunito', sans-serif;

        font-size: 15px;
        font-weight: 500;

        white-space: nowrap;

        transition: all 0.25s ease;
    }

    .mamina-navbar .nav-link:hover {
        color: #3fa7a5 !important;

        transform: translateY(-1px);
    }


    /* =========================================
       ICON BUTTON
    ========================================= */

    .navbar-icon-btn {
        width: 50px;
        height: 50px;

        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;

        text-decoration: none;

        background: #ffd9cf;

        border: 1px solid #efbcb1;

        color: #222;

        font-size: 23px;

        transition: all 0.25s ease;
    }

    .navbar-icon-btn:hover {
        background: #f7c8bd;

        color: #222;

        transform: translateY(-2px);

        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.10);
    }


    /* ================================
   LOGIN & DAFTAR
================================= */

    .btn-login,
    .btn-daftar {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        height: 38px;
        padding: 0 22px;

        border-radius: 22px;

        font-family: 'Nunito', sans-serif;
        font-size: 14px;
        font-weight: 700;

        text-decoration: none !important;

        transition: all 0.25s ease;
    }

    /* LOGIN */

    .btn-login {
        color: #55a3a4;
        background: transparent;
        border: 1.5px solid #55a3a4;
    }

    .btn-login:hover {
        color: #ffffff;
        background: #55a3a4;
        transform: translateY(-1px);
    }


    /* DAFTAR */

    .btn-daftar {
        color: #ffffff;
        background: #55a3a4;
        border: 1.5px solid #55a3a4;
    }

    .btn-daftar:hover {
        color: #ffffff;
        background: #438f91;
        border-color: #438f91;
        transform: translateY(-1px);
    }

    /* =========================================
       MOBILE TOGGLER
    ========================================= */

    .mamina-navbar .navbar-toggler {
        width: 45px;
        height: 45px;

        padding: 0;

        border: none;

        border-radius: 50%;

        background: #ffd9cf;
    }

    .mamina-navbar .navbar-toggler:focus {
        box-shadow: none;
    }


    /* =========================================
       RESPONSIVE
    ========================================= */

    @media (max-width: 1100px) {

        .mamina-navbar .navbar-nav {
            gap: 18px;
        }

        .mamina-navbar .nav-link {
            font-size: 14px;
        }

        .navbar-icon-btn {
            width: 45px;
            height: 45px;

            font-size: 20px;
        }
    }


    @media (max-width: 991px) {

        .mamina-navbar {
            top: 8px;
            left: 8px;
            right: 8px;

            border-radius: 30px;

            padding: 5px 0;
        }

        .mamina-navbar .container {
            height: auto;

            min-height: 68px;

            padding: 0 18px;

            flex-wrap: wrap;
        }

        .mamina-navbar .navbar-brand img {
            height: 48px;
        }

        .mamina-navbar .navbar-collapse {
            width: 100%;

            padding: 15px 0 10px;
        }

        .mamina-navbar .navbar-nav {
            width: 100%;

            flex-direction: column;

            align-items: center;

            gap: 8px;
        }

        .mamina-navbar .nav-link {
            padding: 6px 0 !important;
        }

        .navbar-icon-btn {
            width: 44px;
            height: 44px;
        }

        .navbar-user-btn {
            margin-left: 0;
        }

    }


    @media (max-width: 500px) {

        .mamina-navbar {
            top: 6px;
            left: 6px;
            right: 6px;
        }

        .mamina-navbar .container {
            padding: 0 14px;
        }

        .mamina-navbar .navbar-brand img {
            height: 43px;
        }

        .navbar-icon-btn {
            width: 40px;
            height: 40px;

            font-size: 18px;
        }

    }
</style>


<nav class="navbar navbar-expand-lg mamina-navbar">

    <div class="container">

        {{-- ================================
             LOGO
        ================================= --}}

        <a class="navbar-brand" href="/guest/">
            <img
                src="{{ asset('img/logo.png') }}"
                alt="Mamina">
        </a>


        {{-- ================================
             MOBILE TOGGLER
        ================================= --}}

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        {{-- ================================
             MENU
        ================================= --}}

        <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav">

            <ul class="navbar-nav align-items-center">


                {{-- LAYANAN --}}
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ route('guest.service') }}"
                        Layanan
                        </a>
                </li>


                {{-- TERAPIS --}}
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/guest/terapis">
                        Terapis
                    </a>
                </li>


                {{-- CABANG --}}
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/guest/cabang">
                        Cabang
                    </a>
                </li>

                {{-- ================================
     LOGIN
================================= --}}

                <li class="nav-item ms-2">
                    <a
                        href="/guest/login"
                        class="btn-login">
                        Login
                    </a>
                </li>


                {{-- ================================
     DAFTAR
================================= --}}

                <li class="nav-item ms-2">
                    <a
                        href="/guest/regist"
                        class="btn-daftar">
                        Daftar
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>