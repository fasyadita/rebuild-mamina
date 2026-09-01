@extends('guest.layouts.app')

@section('title', 'Tim Terapis - Mamina')

@section('content')

<style>
    /* =========================
       GLOBAL
    ========================= */
    .tim-page {
        background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
        min-height: 100vh;
        padding: 35px 20px 60px;
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
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
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
        font-family: 'Fredoka', 'Nunito', sans-serif;
    }

    /* =========================
       ARROW
    ========================= */
    .tim-arrows {
        display: flex;
        gap: 7px;
    }

    .arrow-button {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid #d7eeee;
        background: #ffffff;
        color: #3ca5a5;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        cursor: pointer;
        transition: 0.2s ease;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .arrow-button.next {
        background: #3ca5a5;
        color: white;
        border-color: #3ca5a5;
    }

    .arrow-button:hover {
        transform: scale(1.08);
        box-shadow: 0 4px 10px rgba(60, 165, 165, 0.2);
    }

    .tim-cards {
        display: flex;
        gap: 18px;
        overflow-x: auto;
        scroll-behavior: smooth;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE/Edge */
        padding-bottom: 12px;
    }

    .tim-cards::-webkit-scrollbar {
        display: none; /* Chrome/Safari */
    }

    /* =========================
       CARD
    ========================= */
    .tim-card {
        width: 220px;
        min-width: 220px;
        background: #ffffff;
        border-radius: 17px;
        overflow: hidden;
        box-shadow: 0 5px 16px rgba(0, 0, 0, 0.05);
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .tim-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.1);
    }

    .tim-card-image {
        width: 100%;
        height: 165px;
        object-fit: cover;
        object-position: center top;
        display: block;
        background: #f0f4f4;
    }

    .tim-card-body {
        padding: 16px 17px 15px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .tim-card-name {
        margin: 0 0 5px;
        color: #303030;
        font-size: 15px;
        font-weight: 800;
        line-height: 1.25;
    }

    .tim-card-position {
        margin: 0 0 16px;
        color: #7d7d7d;
        font-size: 11px;
        line-height: 1.3;
        flex-grow: 1;
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
        transition: 0.2s ease;
        box-sizing: border-box;
        margin-top: auto;
    }

    .instagram-button:hover {
        background: #2f9191;
        color: #ffffff;
        transform: translateY(-1px);
    }

    /* =========================
       CARD SECTION KECIL
    ========================= */
    .tim-section.small {
        min-height: 300px;
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 1000px) {
        .tim-container {
            width: 100%;
        }

        .tim-card {
            width: 200px;
            min-width: 200px;
        }
    }

    @media (max-width: 768px) {
        .tim-page {
            padding: 20px 15px 40px;
        }

        .tim-section {
            padding: 24px 18px;
            border-radius: 24px;
            margin-bottom: 30px;
        }

        .tim-title {
            font-size: 20px;
        }

        .tim-card {
            width: 190px;
            min-width: 190px;
        }
    }

    @media (max-width: 480px) {
        .tim-title {
            font-size: 17px;
        }

        .tim-title-line {
            width: 5px;
            height: 22px;
        }

        .tim-card {
            width: 180px;
            min-width: 180px;
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
                    <button class="arrow-button prev" onclick="scrollSection(this, -1)" title="Sebelumnya">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next" onclick="scrollSection(this, 1)" title="Selanjutnya">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($timMalang as $user)
                @php
                    $photo = $user->thumb 
                        ? (file_exists(public_path('storage/' . $user->thumb)) ? asset('storage/' . $user->thumb) : (file_exists(public_path($user->thumb)) ? asset($user->thumb) : asset('img/tim-mamina.jpeg')))
                        : asset('img/tim-mamina.jpeg');
                @endphp
                <div class="tim-card">
                    <img
                        src="{{ $photo }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                        onerror="this.onerror=null;this.src='{{ asset('img/tim-mamina.jpeg') }}';"
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
                <p style="padding: 15px; color: #7d7d7d; font-size: 13px;">Belum ada data tim untuk area ini.</p>
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
                    <button class="arrow-button prev" onclick="scrollSection(this, -1)" title="Sebelumnya">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next" onclick="scrollSection(this, 1)" title="Selanjutnya">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($timKediri as $user)
                @php
                    $photo = $user->thumb 
                        ? (file_exists(public_path('storage/' . $user->thumb)) ? asset('storage/' . $user->thumb) : (file_exists(public_path($user->thumb)) ? asset($user->thumb) : asset('img/tim-mamina.jpeg')))
                        : asset('img/tim-mamina.jpeg');
                @endphp
                <div class="tim-card">
                    <img
                        src="{{ $photo }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                        onerror="this.onerror=null;this.src='{{ asset('img/tim-mamina.jpeg') }}';"
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
                <p style="padding: 15px; color: #7d7d7d; font-size: 13px;">Belum ada data tim untuk area ini.</p>
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
                    <button class="arrow-button prev" onclick="scrollSection(this, -1)" title="Sebelumnya">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next" onclick="scrollSection(this, 1)" title="Selanjutnya">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($konselor as $user)
                @php
                    $photo = $user->thumb 
                        ? (file_exists(public_path('storage/' . $user->thumb)) ? asset('storage/' . $user->thumb) : (file_exists(public_path($user->thumb)) ? asset($user->thumb) : asset('img/tim-mamina.jpeg')))
                        : asset('img/tim-mamina.jpeg');
                @endphp
                <div class="tim-card">
                    <img
                        src="{{ $photo }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                        onerror="this.onerror=null;this.src='{{ asset('img/tim-mamina.jpeg') }}';"
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
                <p style="padding: 15px; color: #7d7d7d; font-size: 13px;">Belum ada data konselor.</p>
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
                    <button class="arrow-button prev" onclick="scrollSection(this, -1)" title="Sebelumnya">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="arrow-button next" onclick="scrollSection(this, 1)" title="Selanjutnya">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

            </div>


            <div class="tim-cards">
                @forelse($timExtend as $user)
                @php
                    $photo = $user->thumb 
                        ? (file_exists(public_path('storage/' . $user->thumb)) ? asset('storage/' . $user->thumb) : (file_exists(public_path($user->thumb)) ? asset($user->thumb) : asset('img/tim-mamina.jpeg')))
                        : asset('img/tim-mamina.jpeg');
                @endphp
                <div class="tim-card">
                    <img
                        src="{{ $photo }}"
                        alt="{{ $user->name }}"
                        class="tim-card-image"
                        onerror="this.onerror=null;this.src='{{ asset('img/tim-mamina.jpeg') }}';"
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
                <p style="padding: 15px; color: #7d7d7d; font-size: 13px;">Belum ada data tim extend.</p>
                @endforelse
            </div>

        </section>

    </main>

</div>

<script>
    function scrollSection(button, direction) {
        const section = button.closest('.tim-section');
        if (section) {
            const container = section.querySelector('.tim-cards');
            if (container) {
                const scrollAmount = 240 * direction;
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    }
</script>

@endsection