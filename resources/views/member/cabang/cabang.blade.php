@extends('member.layouts.app')

@section('title', 'member')

@section('content')
<section class="cabang-section">

    {{-- JUDUL --}}
    <div class="section-title-wrapper">
        <h2 class="section-title">
            Cabang Mamina
            <span class="subtitle-span">Baby SPA & Mom</span>
            Treatment
        </h2>
    </div>


    {{-- GRID CABANG --}}
    <div class="cabang-grid">

        {{-- ================= CABANG MALANG CENTRAL ================= --}}
        <div class="cabang-card">

            {{-- FOTO --}}
            <div class="cabang-image-wrapper">
                <img src="{{ asset('img/cabang-mlg.jpg') }}"
                     alt="Cabang Mamina Malang Central"
                     class="cabang-image">
            </div>

            <div class="cabang-content">

                {{-- LABEL --}}
                <div class="cabang-label malang-central">
                    MALANG SAWOJAJAR
                </div>

                {{-- ALAMAT --}}
                <h3 class="cabang-address">
                    Ruko WOW Blok SH, 1 Jl. Raya
                    Sawojajar No.3 Kota Malang,
                    Jawa Timur 65139
                </h3>

                {{-- TELEPON --}}
                <div class="cabang-phone">
                    <span class="phone-icon">
                        <i class="fa-solid fa-phone"></i>
                    </span>

                    <span>0813-2991-3203</span>
                </div>

                {{-- GOOGLE MAPS --}}
                <a href="https://maps.app.goo.gl/iSNL7YwZUPkyaVB1A"
                   target="_blank"
                   class="maps-btn">

                    <span class="maps-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>

                    <span class="maps-text">
                        LIHAT LOKASI
                    </span>

                </a>

            </div>
        </div>


        {{-- ================= CABANG MALANG EAST ================= --}}
        <div class="cabang-card">

            {{-- FOTO --}}
            <div class="cabang-image-wrapper mint-bg">
                <img src="{{ asset('img/cabang-sht.jpeg') }}"
                     alt="Cabang Mamina Malang East"
                     class="cabang-image">
            </div>

            <div class="cabang-content">

                {{-- LABEL --}}
                <div class="cabang-label malang-east">
                    MALANG SOEKARNO HATTA
                </div>

                {{-- ALAMAT --}}
                <h3 class="cabang-address">
                    1-2, Jl. Soekarno Hatta Indah,
                    Mojolangu, Kec. Lowokwaru,
                    Kota Malang, Jawa Timur 65141
                </h3>

                {{-- TELEPON --}}
                <div class="cabang-phone">
                    <span class="phone-icon mint-icon">
                        <i class="fa-solid fa-phone"></i>
                    </span>

                    <span>0813-2991-3203</span>
                </div>

                {{-- GOOGLE MAPS --}}
                <a href="https://maps.app.goo.gl/sT3BM3YnzyeJ1zF28"
                   target="_blank"
                   class="maps-btn">

                    <span class="maps-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>

                    <span class="maps-text">
                        LIHAT LOKASI
                    </span>

                </a>

            </div>
        </div>


        {{-- ================= CABANG KEDIRI ================= --}}
        <div class="cabang-card">

            {{-- FOTO --}}
            <div class="cabang-image-wrapper pink-bg">
                <img src="{{ asset('img/cabang-kdr.jpeg') }}"
                     alt="Cabang Mamina Kediri"
                     class="cabang-image">
            </div>

            <div class="cabang-content">

                {{-- LABEL --}}
                <div class="cabang-label kediri">
                    KEDIRI
                </div>

                {{-- ALAMAT --}}
                <h3 class="cabang-address">
                    Jl. Dr. Sahardjo No.88B,
                    Campurejo, Kec. Mojoroto,
                    Kota Kediri, Jawa Timur 64116
                </h3>

                {{-- TELEPON --}}
                <div class="cabang-phone">
                    <span class="phone-icon pink-icon">
                        <i class="fa-solid fa-phone"></i>
                    </span>

                    <span>0821-3109-0283</span>
                </div>

                {{-- GOOGLE MAPS --}}
                <a href="https://maps.app.goo.gl/6eFVGZbbF68wu9Q87"
                   target="_blank"
                   class="maps-btn">

                    <span class="maps-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>

                    <span class="maps-text">
                        LIHAT LOKASI
                    </span>

                </a>

            </div>
        </div>

    </div>

</section>


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
   SECTION
========================================================= */

.cabang-section {
    padding: 30px 70px 60px;
    background: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
}


/* =========================================================
   JUDUL
========================================================= */

.section-title-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;

    width: fit-content;
    margin: 0 auto 60px auto;

    padding: 14px 30px;

    border-radius: 8px;
}

.section-title {
    font-family: 'Fredoka', sans-serif;
    font-size: 32px;
    font-weight: 500;

    color: #F19A9F;

    margin: 0;

    text-align: center;
}

.subtitle-span {
    color: #3D9F9E;
}

.subtitle-span {
    color: #3D9F9E;
}


/* =========================================================
   GRID
========================================================= */

.cabang-grid {
    display: grid;

    grid-template-columns: repeat(3, minmax(0, 1fr));

    gap: 36px;

    max-width: 1250px;

    margin: 0 auto;
}


/* =========================================================
   CARD
========================================================= */

.cabang-card {
    background: #FFFFFF;

    border-radius: 30px;

    overflow: hidden;

    box-shadow:
        0 8px 22px rgba(0, 0, 0, 0.08);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.cabang-card:hover {
    transform: translateY(-6px);

    box-shadow:
        0 14px 28px rgba(0, 0, 0, 0.12);
}


/* =========================================================
   BAGIAN FOTO
========================================================= */

.cabang-image-wrapper {
    height: 270px;

    background: #FFF7F5;

    border-radius: 30px 30px 0 0;

    display: flex;

    align-items: center;

    justify-content: center;
}


/* warna background tiap card */

.cabang-card:nth-child(1)
.cabang-image-wrapper {
    background: #FFF7F5;
}

.cabang-card:nth-child(2)
.cabang-image-wrapper {
    background: #F1FBF9;
}

.cabang-card:nth-child(3)
.cabang-image-wrapper {
    background: #FFF1EE;
}


/* =========================================================
   FOTO
========================================================= */

.cabang-image {
    width: 235px;
    height: 235px;

    object-fit: cover;

    border-radius: 22px;

    border: 5px solid #FFFFFF;

    box-shadow:
        0 4px 10px rgba(0, 0, 0, 0.15);
}


/* =========================================================
   CONTENT
========================================================= */

.cabang-content {
    padding: 30px 30px 28px;

    text-align: center;

    min-height: 395px;

    display: flex;

    flex-direction: column;

    align-items: center;
}


/* =========================================================
   LABEL CABANG
========================================================= */

.cabang-label {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    padding: 6px 17px;

    border-radius: 30px;

    font-family: 'Nunito', sans-serif;

    font-size: 14px;

    font-weight: 700;

    letter-spacing: 0.5px;

    margin-bottom: 18px;
}


/* MALANG CENTRAL */

.malang-central {
    background: #D5F2EA;

    color: #65B8A8;
}


/* MALANG EAST */

.malang-east {
    background: #FFE0D8;

    color: #E8A091;
}


/* KEDIRI */

.kediri {
    background: #D5F2EA;

    color: #65B8A8;
}


/* =========================================================
   ALAMAT
========================================================= */

.cabang-address {
    font-family: 'Nunito', sans-serif;

    font-size: 19px;

    font-weight: 500;

    line-height: 1.7;

    color: #171717;

    margin: 0;

    max-width: 310px;
}


/* =========================================================
   TELEPON
========================================================= */

.cabang-phone {
    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    margin-top: 22px;

    font-family: 'Nunito', sans-serif;

    font-size: 17px;

    color: #777777;
}


/* icon telepon */

.phone-icon {
    color: #F7CFC7;

    font-size: 17px;
}

.mint-icon {
    color: #BCEBE1;
}

.pink-icon {
    color: #F4C8C0;
}


/* =========================================================
   GOOGLE MAPS BUTTON
========================================================= */

.maps-btn {
    margin-top: auto;

    text-decoration: none;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    gap: 7px;

    color: #555555;

    transition: 0.25s ease;
}

.maps-btn:hover {
    color: #3D9F9E;

    transform: translateY(-2px);
}


/* ICON GOOGLE MAPS */

.maps-icon {
    width: 50px;
    height: 50px;

    border: 3px solid #222222;

    border-radius: 14px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 25px;

    color: #222222;

    transition: 0.25s ease;
}

.maps-btn:hover .maps-icon {
    border-color: #3D9F9E;

    color: #3D9F9E;
}


/* TEXT */

.maps-text {
    font-family: 'Nunito', sans-serif;

    font-size: 14px;

    font-weight: 700;

    letter-spacing: 1px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1100px) {

    .cabang-section {
        padding-left: 35px;
        padding-right: 35px;
    }

    .cabang-grid {
        grid-template-columns: repeat(2, 1fr);

        gap: 30px;
    }

}


@media (max-width: 700px) {

    .cabang-section {
        padding: 30px 20px 50px;
    }

    .section-title {
        font-size: 25px;
    }

    .cabang-grid {
        grid-template-columns: 1fr;

        max-width: 400px;
    }

    .cabang-image-wrapper {
        height: 260px;
    }

    .cabang-image {
        width: 220px;
        height: 220px;
    }

}

</style>

@endsection
