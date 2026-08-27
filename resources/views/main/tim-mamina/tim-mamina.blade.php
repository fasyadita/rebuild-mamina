@extends('main.layouts.app')

@section('title', 'Tim Mamina')

@section('content')

<style>
    /* =========================
       GLOBAL
    ========================= */
    .tim-page {
        background: #fffbea;
        min-height: 100vh;
        padding: 35px 0 60px;
        font-family: 'Nunito', sans-serif;
    }

    .tim-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* =========================
       SECTION TIM
    ========================= */
    .tim-section {
        background: #e2f6e8;
        border-radius: 32px;
        padding: 34px 35px 35px;
        margin-bottom: 45px;
        min-height: 300px;
        box-sizing: border-box;
    }

    .tim-section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 32px;
    }

    .tim-title-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .tim-title-line {
        width: 7px;
        height: 28px;
        background: #3ca5a5;
        border-radius: 8px;
    }

    .tim-title {
        margin: 0;
        color: #2c2c2c;
        font-size: 25px;
        font-weight: 800;
        line-height: 1.2;
    }

    /* =========================
       ARROW
    ========================= */
    .tim-arrows {
        display: flex;
        gap: 7px;
    }

    .arrow-button {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1px solid #d7eeee;
        background: #ffffff;
        color: #3ca5a5;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        cursor: pointer;
        transition: 0.2s;
    }

    .arrow-button.next {
        background: #3ca5a5;
        color: white;
        border-color: #3ca5a5;
    }

    .arrow-button:hover {
        transform: scale(1.05);
    }

    .tim-cards {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
    }

    /* =========================
       CARD
    ========================= */
    .tim-card {
        width: calc((100% - 72px) / 5);
        min-width: 0;
        background: #ffffff;
        border-radius: 17px;
        overflow: hidden;
        box-shadow: 0 7px 18px rgba(0, 0, 0, 0.05);
        flex-shrink: 0;
    }

    .tim-card-image {
        width: 100%;
        height: 155px;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .tim-card-body {
        padding: 16px 17px 15px;
    }

    .tim-card-name {
        margin: 0 0 5px;
        color: #303030;
        font-size: 15px;
        font-weight: 800;
        line-height: 1.15;
    }

    .tim-card-position {
        margin: 0 0 17px;
        color: #7d7d7d;
        font-size: 10px;
        line-height: 1.3;
    }

    .instagram-button {
        width: 100%;
        height: 36px;
        border: none;
        border-radius: 8px;
        background: #3ca5a5;
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        text-decoration: none;
        transition: 0.2s;
        box-sizing: border-box;
    }

    .instagram-button:hover {
        background: #2f9191;
        color: #ffffff;
    }

    /* =========================
       CARD SECTION KECIL
    ========================= */
    .tim-section.small {
        min-height: 360px;
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 1000px) {

        .tim-navbar {
            width: 94%;
        }

        .tim-container {
            width: 94%;
        }

        .tim-nav-menu {
            gap: 14px;
        }

        .tim-nav-menu a {
            font-size: 11px;
        }

        .tim-logo {
            width: 125px;
        }

        .tim-card {
            width: calc((100% - 36px) / 3);
        }
    }

    @media (max-width: 768px) {

        .tim-page {
            padding-top: 20px;
        }

        .tim-navbar {
            height: auto;
            min-height: 70px;
            border-radius: 30px;
            padding: 15px 20px;
        }

        .tim-logo {
            width: 110px;
        }

        .tim-nav-menu {
            gap: 10px;
        }

        .tim-nav-menu a {
            display: none;
        }

        .cart-button {
            margin-left: auto;
        }

        .tim-section {
            padding: 25px 20px;
            border-radius: 25px;
        }

        .tim-title {
            font-size: 20px;
        }

        .tim-card {
            width: 220px;
        }

        .tim-cards {
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-bottom: 8px;
        }
    }

    @media (max-width: 480px) {

        .tim-container,
        .tim-navbar {
            width: 94%;
        }

        .tim-section {
            margin-bottom: 25px;
        }

        .tim-title {
            font-size: 17px;
        }

        .tim-title-line {
            width: 5px;
            height: 22px;
        }

        .member-button {
            padding: 8px 12px;
            font-size: 10px !important;
        }

        .tim-card {
            width: 200px;
        }
    }
</style>


<div class="tim-page">

    <main class="tim-container">


        {{-- =====================================================
             TIM MAMINA MALANG
        ====================================================== --}}
        <section class="tim-section">

            <div class="tim-section-header">

                <div class="tim-title-wrapper">
                    <div class="tim-title-line"></div>

                    <h2 class="tim-title">
                        Tim Mamina Malang
                    </h2>
                </div>

                <div class="tim-arrows">
                    <button class="arrow-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($timMalang as $user)
                <div class="tim-card">
                    <img
                        src="{{ asset('img/logo-2.png') }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                    >
                    <div class="tim-card-body">
                        <h3 class="tim-card-name">
                            {{ $user->name }}
                        </h3>
                        <p class="tim-card-position">
                            {{ ucfirst($user->roles) }}
                        </p>
                        @if($user->ig)
                        <a href="https://instagram.com/{{ ltrim($user->ig, '@') }}" class="instagram-button" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            {{ $user->ig }}
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <p style="padding: 0 15px; color: #7d7d7d;">Belum ada data tim.</p>
                @endforelse
            </div>

        </section>



        {{-- =====================================================
             TIM MAMINA KEDIRI
        ====================================================== --}}
        <section class="tim-section">

            <div class="tim-section-header">

                <div class="tim-title-wrapper">
                    <div class="tim-title-line"></div>

                    <h2 class="tim-title">
                        Tim Mamina Kediri
                    </h2>
                </div>

                <div class="tim-arrows">
                    <button class="arrow-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($timKediri as $user)
                <div class="tim-card">
                    <img
                        src="{{ asset('img/logo-2.png') }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                    >
                    <div class="tim-card-body">
                        <h3 class="tim-card-name">
                            {{ $user->name }}
                        </h3>
                        <p class="tim-card-position">
                            {{ ucfirst($user->roles) }}
                        </p>
                        @if($user->ig)
                        <a href="https://instagram.com/{{ ltrim($user->ig, '@') }}" class="instagram-button" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            {{ $user->ig }}
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <p style="padding: 0 15px; color: #7d7d7d;">Belum ada data tim.</p>
                @endforelse
            </div>

        </section>



        {{-- =====================================================
             KONSELOR MENYUSUI
        ====================================================== --}}
        <section class="tim-section small">

            <div class="tim-section-header">

                <div class="tim-title-wrapper">
                    <div class="tim-title-line"></div>

                    <h2 class="tim-title">
                        Konselor Menyusui Mamina
                    </h2>
                </div>

                <div class="tim-arrows">
                    <button class="arrow-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($konselor as $user)
                <div class="tim-card">
                    <img
                        src="{{ asset('img/logo-2.png') }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                    >
                    <div class="tim-card-body">
                        <h3 class="tim-card-name">
                            {{ $user->name }}
                        </h3>
                        <p class="tim-card-position">
                            {{ ucfirst($user->roles) }}
                        </p>
                        @if($user->ig)
                        <a href="https://instagram.com/{{ ltrim($user->ig, '@') }}" class="instagram-button" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            {{ $user->ig }}
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <p style="padding: 0 15px; color: #7d7d7d;">Belum ada data tim.</p>
                @endforelse
            </div>

        </section>



        {{-- =====================================================
             TIM MAMINA EXTEND
        ====================================================== --}}
        <section class="tim-section small">

            <div class="tim-section-header">

                <div class="tim-title-wrapper">
                    <div class="tim-title-line"></div>

                    <h2 class="tim-title">
                        Tim Mamina Extend
                    </h2>
                </div>

                <div class="tim-arrows">
                    <button class="arrow-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($timExtend as $user)
                <div class="tim-card">
                    <img
                        src="{{ asset('img/logo-2.png') }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                    >
                    <div class="tim-card-body">
                        <h3 class="tim-card-name">
                            {{ $user->name }}
                        </h3>
                        <p class="tim-card-position">
                            {{ ucfirst($user->roles) }}
                        </p>
                        @if($user->ig)
                        <a href="https://instagram.com/{{ ltrim($user->ig, '@') }}" class="instagram-button" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            {{ $user->ig }}
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <p style="padding: 0 15px; color: #7d7d7d;">Belum ada data tim.</p>
                @endforelse
            </div>

        </section>

    </main>

</div>

@endsection