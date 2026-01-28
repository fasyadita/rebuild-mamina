@extends('layouts.app')

@section('title', 'Tim Mamina')

@section('content')

<section class="tim-section">
    <div class="section-title-wrapper">
    <h2 class="section-title">
        Tim <span class="subtitle-span">Mamina </span> Malang
    </h2>
</div>


    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('img/tim-mamina.jpeg') }}" alt="Tim Mamina">
            <h3>Intania Putri W., S.Tr.Keb, CPHT</h3>
            <p>Terapis & Fasilitator Prenatal Yoga</p>

            <a href="#" class="ig-btn">
                <img src="{{ asset('img/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

<section class="tim-section">
    <div class="section-title-wrapper">
        <h2 class="section-title">Tim <span class="subtitle-span">Mamina </span> Kediri</h2>
    </div>

    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('img/tim-mamina.jpeg') }}" alt="Tim Mamina">
            <h3>Intania Putri W., S.Tr.Keb, CPHT</h3>
            <p>Terapis & Fasilitator Prenatal Yoga</p>

            <a href="#" class="ig-btn">
                <img src="{{ asset('img/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

<section class="tim-section">
    <div class="section-title-wrapper">
        <h2 class="section-title">Konselor <span class="subtitle-span">Menyusui </span> Mamina</h2>
    </div>

    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('img/tim-mamina.jpeg') }}" alt="Tim Mamina">
            <h3>Intania Putri W., S.Tr.Keb, CPHT</h3>
            <p>Terapis & Fasilitator Prenatal Yoga</p>

            <a href="#" class="ig-btn">
                <img src="{{ asset('img/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

<section class="tim-section">
    <div class="section-title-wrapper">
        <h2 class="section-title">Tim Mamina Extend <span class="subtitle-span">(Homecare Luar Malang) </span></h2>
    </div>

    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('img/tim-mamina.jpeg') }}" alt="Tim Mamina">
            <h3>Intania Putri W., S.Tr.Keb, CPHT</h3>
            <p>Terapis & Fasilitator Prenatal Yoga</p>

            <a href="#" class="ig-btn">
                <img src="{{ asset('img/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

<style>
    @font-face {
        font-family: 'fredoka';
        src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'nunito';
        src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    /* ===== Global Section ===== */
.tim-section {
    padding: 30px 80px;
    /* background: linear-gradient(180deg, #FFDAD1 0%, #fff7ec 100%); */
    text-align: center;
}

.tim-section:nth-child(even) {
    background: transparent;
}

/* ===== Judul ===== */
.section-title-wrapper {
    background: linear-gradient(90deg, #CBF1E8 0%, #FFDBD1 100%);
    padding: 14px 0;
    margin-bottom: 40px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08);
    border-radius: 6px;
    display: block;
}

.section-title {
    font-family: 'fredoka', sans-serif;
    font-size: 34px;
    color: #f29aa0;
    display: inline-block;
    margin: 0;
    line-height: 1;
    padding: 6px 18px;
}

.subtitle-span {
    color: #3D9F9E;
}

/* ===== Grid ===== */
.tim-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

/* ===== Card ===== */
.tim-card {
    background-color: #FFDAD1;
    padding: 20px 16px 24px;
    box-shadow: 0 8px 20px rgba(0,0,0,15%);
    transition: transform 0.3s ease;
}

.tim-card:hover {
    transform: translateY(-6px);
}

/* ===== Foto ===== */
.tim-card img {
    width: 100%;
    max-width: 250px;
    margin: 0 auto 16px;
    display: block;
    border-radius: 8px;
    /* background-color: #fff; */
    padding: 8px;
}

/* ===== Nama ===== */
.tim-card h3 {
    
    font-size: 14px;
    font-weight: 600;
    color: #555;
    margin-bottom: 6px;
}

/* ===== Jabatan ===== */
.tim-card p {
    font-size: 12px;
    color: #777;
    margin-bottom: 12px;
}

/* ===== Instagram Button ===== */
.ig-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 0 auto;
}

.ig-btn img {
    width: 45px;
    height: 45px;
}

/* ===== Responsive ===== */
@media (max-width: 1024px) {
    .tim-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .tim-grid {
        grid-template-columns: 1fr;
    }

    .tim-section {
        padding: 40px 20px;
    }
}

</style>
@endsection
