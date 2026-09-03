@extends('guest.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

<style>
    /* =========================
       GLOBAL
    ========================= */

    .layanan-page {
         background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
        min-height: 100vh;
        padding: 35px 0 60px;
        font-family: 'Nunito', sans-serif;
    }

    .layanan-container {
        width: 94%;
        max-width: 1200px;
        margin: 0 auto;
    }


    /* =========================
       SECTION LAYANAN
    ========================= */

    .layanan-section {
        background: #e2f6e8;
        border-radius: 32px;
        padding: 34px 35px 35px;
        margin-bottom: 45px;
        box-sizing: border-box;
    }


    /* =========================
       HEADER
    ========================= */

    .layanan-section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 32px;
    }

    .layanan-title-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .layanan-title-line {
        width: 7px;
        height: 28px;
        background: #3ca5a5;
        border-radius: 8px;
    }

    .layanan-title {
        margin: 0;
        color: #2c2c2c;
        font-size: 25px;
        font-weight: 800;
        line-height: 1.2;
    }


    /* =========================
       ARROW
    ========================= */

    .layanan-arrows {
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
        transition: 0.2s ease;
    }

    .arrow-button.next {
        background: #3ca5a5;
        color: #ffffff;
        border-color: #3ca5a5;
    }

    .arrow-button:hover {
        transform: scale(1.05);
    }


    /* =========================
       CARD CONTAINER
    ========================= */

    .layanan-cards {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
    }


    /* =========================
       CARD
       Dibuat mengikuti style tim-card
    ========================= */

    .layanan-card {
        width: calc((100% - 72px) / 5);
        min-width: 0;

        background: #ffffff;
        border-radius: 17px;
        overflow: hidden;

        box-shadow: 0 7px 18px rgba(0, 0, 0, 0.05);

        flex-shrink: 0;

        display: flex;
        flex-direction: column;

        transition: 0.2s ease;
    }

    .layanan-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.08);
    }


    /* =========================
       IMAGE / AREA ATAS
    ========================= */

    .card-space {
        width: 100%;
        height: 155px;

        background:
            linear-gradient(
                135deg,
                #e5f2ed,
                #f5f7f1
            );

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;
    }

    /*
       Icon sederhana sebagai placeholder
       karena backend saat ini belum menyediakan
       field gambar layanan.
    */

    .card-space::before {
        content: "\f1d8";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;

        font-size: 38px;
        color: #3ca5a5;
        opacity: 0.45;
    }


    /* =========================
       CARD BODY
    ========================= */

    .layanan-card-body {
        padding: 16px 17px 15px;

        display: flex;
        flex-direction: column;

        flex: 1;
    }


    /* =========================
       NAMA LAYANAN
    ========================= */

    .layanan-card-name {
        margin: 0 0 5px;

        color: #303030;
        font-size: 15px;
        font-weight: 800;
        line-height: 1.15;
    }


    /* =========================
       CABANG
    ========================= */

    .cabang {
        display: block;

        margin-bottom: 10px;

        color: #7d7d7d;

        font-size: 10px;
        font-weight: 600;

        line-height: 1.3;
    }


    /* =========================
       HARGA
    ========================= */

    .harga {
        margin-bottom: 5px;

        color: #3ca5a5;

        font-size: 14px;
        font-weight: 800;
    }


    /* =========================
       DURASI
    ========================= */

    .durasi {
        display: flex;
        align-items: center;

        gap: 4px;

        margin-bottom: 17px;

        color: #7d7d7d;

        font-size: 10px;
        font-weight: 600;
    }

    .durasi i {
        color: #3ca5a5;
        font-size: 10px;
    }


    /* =========================
       BUTTON TAMBAH
    ========================= */

    .btn-tambah {
        width: 100%;
        height: 36px;

        margin-top: auto;

        padding: 0;

        border: none;
        border-radius: 8px;

        background: #3ca5a5;
        color: #ffffff;

        display: flex;
        align-items: center;
        justify-content: center;

        font-family: 'Nunito', sans-serif;
        font-size: 11px;
        font-weight: 800;

        cursor: pointer;

        transition: 0.2s ease;
        overflow: hidden;
    }

    .btn-tambah:hover {
        background: #2f9191;
    }


    /* =========================
       ICON PLUS
    ========================= */

    .icon-plus {
        width: 36px;
        height: 36px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(0, 0, 0, 0.08);

        flex-shrink: 0;
    }

    .icon-plus i {
        font-size: 11px;
    }


    /* =========================
       TEXT BUTTON
    ========================= */

    .text-tambah {
        flex: 1;
        text-align: center;

        padding-right: 36px;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1100px) {

        .layanan-container {
            width: 94%;
        }

        .layanan-section {
            padding: 30px;
        }

        .layanan-cards {
            gap: 15px;
        }

        .layanan-card {
            width: calc((100% - 45px) / 4);
        }
    }


    @media (max-width: 900px) {

        .layanan-card {
            width: calc((100% - 30px) / 3);
        }
    }


    @media (max-width: 768px) {

        .layanan-page {
            padding-top: 20px;
        }

        .layanan-section {
            padding: 25px 20px;
            border-radius: 25px;
        }

        .layanan-title {
            font-size: 20px;
        }

        .layanan-card {
            width: 220px;
        }

        .layanan-cards {
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-bottom: 8px;
        }

        .layanan-cards::-webkit-scrollbar {
            height: 5px;
        }

        .layanan-cards::-webkit-scrollbar-thumb {
            background: #a8ceca;
            border-radius: 10px;
        }
    }


    @media (max-width: 480px) {

        .layanan-container {
            width: 94%;
        }

        .layanan-section {
            margin-bottom: 25px;
        }

        .layanan-title {
            font-size: 17px;
        }

        .layanan-title-line {
            width: 5px;
            height: 22px;
        }

        .layanan-card {
            width: 200px;
        }

        .layanan-section-header {
            margin-bottom: 22px;
        }

        .arrow-button {
            width: 30px;
            height: 30px;
            font-size: 13px;
        }
    }
</style>


<div class="layanan-page">

    <main class="layanan-container">

        {{-- =========================
             SECTION LAYANAN ANAK
        ========================== --}}

        <section class="layanan-section">

            {{-- HEADER --}}
            <div class="layanan-section-header">

                <div class="layanan-title-wrapper">

                    <div class="layanan-title-line"></div>

                    <h2 class="layanan-title">
                        Layanan Imunisasi
                    </h2>

                </div>

            </div>


            {{-- =========================
                 CARDS
            ========================== --}}

            <div class="layanan-cards">

                @forelse ($imunProducts as $product)

                    <div class="layanan-card">

                        {{-- AREA GAMBAR --}}
                        @php
                            $productImg = $product->image ? asset('storage/' . $product->image) : asset('img/mamina.png');
                        @endphp
                        <img src="{{ $productImg }}" alt="{{ $product->name }}"
                            onerror="this.onerror=null;this.src='{{ asset('img/mamina.png') }}';"
                            style="width: 100%; height: 155px; object-fit: cover; flex-shrink: 0; display: block;">


                        {{-- INFORMASI LAYANAN --}}
                        <div class="layanan-card-body">

                            <h3 class="layanan-card-name">
                                {{ $product->name }}
                            </h3>

                            <span class="cabang">
                                Tersedia
                            </span>

                            <div class="harga">
                                Rp {{ number_format($product->sale_price, 0, ',', '.') }}
                            </div>

                            <div class="durasi">

                                <i class="fas fa-heart"></i>

                                4000+ suka

                            </div>


                            {{-- BUTTON TAMBAH --}}
                            <form action="{{ route('cart.add', $product->id) }}" method="POST" style="margin-top: auto; width: 100%;">
                                @csrf
                                <button
                                    type="submit"
                                    class="btn-tambah"
                                    style="margin-top: 0;"
                                >

                                    <span class="icon-plus">
                                        <i class="fas fa-plus"></i>
                                    </span>

                                    <span class="text-tambah">
                                        Tambah
                                    </span>

                                </button>
                            </form>

                        </div>

                    </div>

                @empty
                    <div
                        style="width: 100%; text-align: center; padding: 50px; color: #888; font-family: 'nunito', sans-serif;">
                        <i class="fas fa-info-circle" style="font-size: 30px; margin-bottom: 10px; color: #3fb6a8;"></i>
                        <p>Layanan untuk kategori ini belum tersedia saat ini ✨</p>
                    </div>
                @endforelse

            </div>

        </section>

    </main>

</div>

@endsection