@extends('main.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

<style>
    /* =========================
       GLOBAL
    ========================= */
    .layanan-page {
        background: #fffbea;
        min-height: 100vh;
        padding: 35px 0 60px;
        font-family: 'Nunito', sans-serif;
    }

    .layanan-container {
        width: 100%;
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
        min-height: 300px;
        box-sizing: border-box;
    }

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

    .layanan-cards {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
    }

    /* =========================
       CARD
    ========================= */
    .layanan-card {
        width: calc((100% - 72px) / 5);
        /* 5 items per row */
        min-width: 0;
        background: #ffffff;
        border-radius: 17px;
        overflow: hidden;
        box-shadow: 0 7px 18px rgba(0, 0, 0, 0.05);
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
    }

    .card-space {
        width: 100%;
        height: 120px;
        background: #f4f4f4;
        /* Placeholder for image */
        flex-shrink: 0;
    }

    .layanan-card-body {
        padding: 14px 15px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .layanan-card-name {
        margin: 0 0 4px;
        color: #303030;
        font-size: 14px;
        font-weight: 800;
        line-height: 1.2;
    }

    .cabang {
        display: block;
        margin-bottom: 8px;
        font-size: 10px;
        font-weight: 600;
        color: #7d7d7d;
    }

    .harga {
        margin-bottom: 4px;
        font-size: 14px;
        font-weight: 800;
        color: #3ca5a5;
    }

    .durasi {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 12px;
        font-size: 10px;
        font-weight: 600;
        color: #7d7d7d;
    }

    .btn-tambah {
        width: 100%;
        height: 32px;
        margin-top: auto;
        border: none;
        border-radius: 8px;
        background: #3ca5a5;
        color: #ffffff;
        display: flex;
        align-items: center;
        cursor: pointer;
        font-family: 'Nunito', sans-serif;
        font-size: 11px;
        font-weight: 700;
        transition: 0.2s;
        padding: 0;
        overflow: hidden;
    }

    .btn-tambah:hover {
        background: #2f9191;
    }

    .icon-plus {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.1);
    }

    .text-tambah {
        flex: 1;
        text-align: center;
        padding-right: 32px;
        /* Balance the icon width */
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 1000px) {
        .layanan-container {
            width: 94%;
        }

        .layanan-card {
            width: calc((100% - 54px) / 4);
            /* 4 items per row */
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
    }
</style>

<div class="layanan-page">

    <main class="layanan-container">

        <section class="layanan-section">

            <div class="layanan-section-header">
                <div class="layanan-title-wrapper">
                    <div class="layanan-title-line"></div>
                    <h2 class="layanan-title">
                        Layanan Anak
                    </h2>
                </div>

                <div class="layanan-arrows">
                    <button type="button" class="arrow-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button type="button" class="arrow-button next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="layanan-cards">
                @for ($i = 0; $i < 12; $i++)
                    <div class="layanan-card">

                    {{-- AREA KOSONG BAGIAN ATAS --}}
                    <div class="card-spacez"></div>

                    {{-- INFORMASI LAYANAN --}}
                    <div class="layanan-card-body">
                        <h3 class="layanan-card-name">Pijat Bayi</h3>
                        <span class="cabang">Cabang Malang</span>
                        <div class="harga">Rp 88.000</div>
                        <div class="durasi">
                            <i class="far fa-clock"></i>
                            4050* s/d...
                        </div>

                        {{-- BUTTON --}}
                        <button type="button" class="btn-tambah">
                            <span class="icon-plus">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text-tambah">Tambah</span>
                        </button>
                    </div>

            </div>
            @endfor
</div>

</section>

</main>

</div>

@endsection