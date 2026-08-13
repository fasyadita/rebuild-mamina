@extends('main.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

<section class="detail-layanan-section">

    <div class="detail-container">

        {{-- HEADER --}}
        <div class="layanan-header">

            <h2 class="judul-layanan">
                Layanan Anak
            </h2>

            <div class="slider-navigation">

                <button type="button" class="nav-btn prev-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <button type="button" class="nav-btn next-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

        </div>


        {{-- GRID LAYANAN --}}
        <div class="layanan-grid">

            @for ($i = 0; $i < 12; $i++)

                <div class="layanan-card">

                    {{-- AREA KOSONG BAGIAN ATAS --}}
                    <div class="card-space"></div>


                    {{-- INFORMASI LAYANAN --}}
                    <div class="layanan-content">

                        <h3>Pijat Bayi</h3>

                        <span class="cabang">
                            Cabang Malang
                        </span>

                        <div class="harga">
                            Rp 88.000
                        </div>

                        <div class="durasi">
                            <i class="far fa-clock"></i>
                            4050* s/d...
                        </div>


                        {{-- BUTTON --}}
                        <button type="button" class="btn-tambah">

                            <span class="icon-plus">
                                <i class="fas fa-plus"></i>
                            </span>

                            <span class="text-tambah">
                                Tambah
                            </span>

                        </button>

                    </div>

                </div>

            @endfor

        </div>

    </div>

</section>

@endsection


<style>

/* =========================================================
   FONT
========================================================= */

@font-face {
    font-family: 'Fredoka';
    src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf') format('truetype');
    font-weight: 500;
}

@font-face {
    font-family: 'Nunito';
    src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
    font-weight: 500;
}


/* =========================================================
   RESET
========================================================= */

.detail-layanan-section *,
.detail-layanan-section *::before,
.detail-layanan-section *::after {
    box-sizing: border-box;
}


/* =========================================================
   SECTION
========================================================= */

.detail-layanan-section {
    width: 100%;
    min-height: 100vh;

    background: #FFFDEB;

    padding: 30px 30px;

    font-family: 'Nunito', sans-serif;
}


/* =========================================================
   CONTAINER
========================================================= */

.detail-container {

    /*
     * Desktop:
     * menggunakan sekitar 75% lebar layar
     */

    width: 75%;
    max-width: 1200px;

    margin: 0 auto;

    background: #E5F5EA;

    border-radius: 17px;

    padding: 25px 20px 20px;
}


/* =========================================================
   HEADER
========================================================= */

.layanan-header {

    width: 100%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-bottom: 18px;
}


/* =========================================================
   JUDUL
========================================================= */

.judul-layanan {

    position: relative;

    margin: 0;

    padding-left: 10px;

    font-family: 'Fredoka', sans-serif;

    font-size: 16px;

    font-weight: 600;

    color: #303030;

    line-height: 1;
}


.judul-layanan::before {

    content: "";

    position: absolute;

    left: 0;
    top: 50%;

    transform: translateY(-50%);

    width: 3px;
    height: 17px;

    border-radius: 5px;

    background: #58A8A5;
}


/* =========================================================
   NAVIGATION
========================================================= */

.slider-navigation {

    display: flex;

    align-items: center;

    gap: 4px;
}


.nav-btn {

    width: 17px;
    height: 17px;

    padding: 0;

    border: none;

    border-radius: 50%;

    display: flex;

    align-items: center;
    justify-content: center;

    cursor: pointer;

    transition: .2s ease;
}


.prev-btn {

    background: #FFFFFF;

    color: #58A8A5;
}


.next-btn {

    background: #58A8A5;

    color: #FFFFFF;
}


.nav-btn i {

    font-size: 7px;
}


.nav-btn:hover {

    transform: scale(1.08);
}


/* =========================================================
   GRID
========================================================= */

.layanan-grid {

    width: 100%;

    display: grid;

    grid-template-columns: repeat(4, 1fr);

    column-gap: 13px;

    row-gap: 14px;
}


/* =========================================================
   CARD
========================================================= */

.layanan-card {

    width: 100%;

    /*
     * Card dibuat tinggi supaya memanjang
     * seperti screenshot
     */

    height: 185px;

    background: #FFFFFF;

    border-radius: 10px;

    overflow: hidden;

    display: flex;

    flex-direction: column;

    box-shadow:
        0 3px 8px rgba(0, 0, 0, 0.035);
}


/* =========================================================
   AREA KOSONG BAGIAN ATAS
========================================================= */

.card-space {

    width: 100%;

    height: 98px;

    background: #FFFFFF;

    flex-shrink: 0;
}


/* =========================================================
   CONTENT
========================================================= */

.layanan-content {

    width: 100%;

    height: 87px;

    padding: 7px 10px 9px;

    background: #FFFFFF;

    display: flex;

    flex-direction: column;
}


/* =========================================================
   NAMA LAYANAN
========================================================= */

.layanan-content h3 {

    margin: 0 0 2px;

    font-family: 'Nunito', sans-serif;

    font-size: 9px;

    font-weight: 900;

    color: #292929;

    line-height: 1.2;
}


/* =========================================================
   CABANG
========================================================= */

.cabang {

    display: block;

    margin-bottom: 4px;

    font-family: 'Nunito', sans-serif;

    font-size: 6px;

    font-weight: 500;

    color: #777777;

    line-height: 1.2;
}


/* =========================================================
   HARGA
========================================================= */

.harga {

    margin-bottom: 2px;

    font-family: 'Nunito', sans-serif;

    font-size: 10px;

    font-weight: 900;

    color: #58A8A5;

    line-height: 1.2;
}


/* =========================================================
   DURASI
========================================================= */

.durasi {

    display: flex;

    align-items: center;

    gap: 3px;

    margin-bottom: auto;

    font-family: 'Nunito', sans-serif;

    font-size: 5.5px;

    font-weight: 500;

    color: #777777;

    line-height: 1.2;
}


.durasi i {

    font-size: 5px;
}


/* =========================================================
   BUTTON TAMBAH
========================================================= */

.btn-tambah {

    width: 100%;

    height: 20px;

    margin-top: 6px;

    padding: 0 7px;

    border: none;

    border-radius: 20px;

    background: #58A8A5;

    color: #FFFFFF;

    display: flex;

    align-items: center;

    cursor: pointer;

    font-family: 'Nunito', sans-serif;

    font-size: 6px;

    transition: .2s ease;
}


.btn-tambah:hover {

    background: #478F8D;
}


/* =========================================================
   ICON PLUS
========================================================= */

.icon-plus {

    width: 15px;
    height: 15px;

    display: flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;
}


.icon-plus i {

    font-size: 8px;
}


/* =========================================================
   TEXT TAMBAH
========================================================= */

.text-tambah {

    flex: 1;

    text-align: center;

    padding-right: 15px;
}


/* =========================================================
   DESKTOP BESAR
========================================================= */

@media (min-width: 1400px) {

    .detail-container {

        width: 72%;

        max-width: 1250px;

        padding: 27px 22px 22px;
    }

    .layanan-card {

        height: 190px;
    }

    .card-space {

        height: 102px;
    }

}


/* =========================================================
   LAPTOP
========================================================= */

@media (max-width: 1200px) {

    .detail-container {

        width: 82%;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .detail-layanan-section {

        padding: 25px 20px;
    }

    .detail-container {

        width: 90%;

        padding: 22px 16px 18px;
    }

    .layanan-grid {

        grid-template-columns: repeat(3, 1fr);
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .detail-layanan-section {

        padding: 20px 10px;
    }

    .detail-container {

        width: 100%;

        padding: 18px 12px 15px;

        border-radius: 15px;
    }

    .layanan-grid {

        grid-template-columns: repeat(2, 1fr);

        column-gap: 10px;

        row-gap: 12px;
    }

    .layanan-card {

        height: 175px;
    }

    .card-space {

        height: 90px;
    }

    .layanan-content {

        height: 85px;

        padding: 6px 8px 8px;
    }

    .layanan-content h3 {

        font-size: 8px;
    }

    .cabang {

        font-size: 5.5px;
    }

    .harga {

        font-size: 9px;
    }

    .durasi {

        font-size: 5px;
    }

    .btn-tambah {

        height: 19px;

        font-size: 5.5px;
    }

}

</style>