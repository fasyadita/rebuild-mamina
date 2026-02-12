@extends('main.layouts.app')

@section('title', 'Detail Event')

@section('content')

<section class="event-detail-section">

    <div class="event-hero">
        <div class="event-hero-image">
            <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Persiapan Menyusui">
            <span class="event-status">Kegiatan Sedang Berlangsung</span>
        </div>

        <div class="event-hero-content">
            <h1>Kelas Persiapan Menyusui</h1>
            <p class="event-subtitle">
                Kelas edukasi untuk ibu hamil & menyusui bersama konselor berpengalaman
            </p>

            <div class="event-meta">
                <div><i class="fas fa-calendar"></i> 16 Januari 2026</div>
                <div><i class="fas fa-clock"></i> 08.00 - 11.00 WIB</div>
                <div><i class="fas fa-map-marker-alt"></i> Mamina Baby Spa</div>
            </div>

            <div class="event-actions">
                <a href="#" class="btn-primary">Daftar Sekarang</a>
                <a href="#" class="btn-secondary">Hubungi Admin</a>
            </div>
        </div>
    </div>

    <div class="event-info-box">
        <div class="info-item">
            <span>Tanggal</span>
            <p>16 Januari 2026</p>
        </div>
        <div class="info-item">
            <span>Waktu</span>
            <p>08.00 - 11.00 WIB</p>
        </div>
        <div class="info-item">
            <span>Lokasi</span>
            <p>Mamina Baby Spa Malang</p>
        </div>
        <div class="info-item">
            <span>Pemateri</span>
            <p>Konselor Laktasi Bersertifikat</p>
        </div>
        <div class="info-item">
            <span>Peserta</span>
            <p>Ibu hamil & ibu menyusui</p>
        </div>
        <div class="info-item">
            <span>Kuota</span>
            <p>40 Peserta</p>
        </div>
    </div>

    <div class="event-description">
        <h2>Deskripsi Event</h2>
        <p>
            Kelas Persiapan Menyusui merupakan kelas edukasi yang dirancang
            untuk membantu ibu memahami proses menyusui sejak dini.
            Dalam kelas ini, peserta akan mendapatkan pengetahuan praktis
            serta pendampingan langsung dari konselor laktasi berpengalaman.
        </p>
    </div>

    <div class="event-benefit">
        <div class="benefit-card">
            <h3>Apa Saja yang Akan Dipelajari?</h3>
            <ul>
                <li>Manfaat ASI bagi ibu dan bayi</li>
                <li>Teknik pelekatan (latch on) yang benar</li>
                <li>Posisi menyusui yang nyaman</li>
                <li>Cara mengatasi masalah umum menyusui</li>
                <li>Tips menjaga produksi ASI</li>
            </ul>
        </div>

        <div class="benefit-card">
            <h3>Apa Saja Benefit yang Didapat?</h3>
            <ul>
                <li>Konsultasi langsung dengan ahli</li>
                <li>Materi mudah dipahami</li>
                <li>Sertifikat peserta</li>
                <li>Free goodie bag</li>
            </ul>
        </div>
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

    .event-detail-section {
        padding: 60px 80px;
        background: #FFFDEB;
        font-family: 'nunito', sans-serif;
    }

    .event-hero {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 30px;
        background: #F0EFE1;
        border-radius: 18px;
        padding: 24px;
        margin-bottom: 40px;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-hero-image {
        position: relative;
        border-radius: 14px;
        overflow: hidden;
    }

    .event-hero-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .event-status {
        position: absolute;
        bottom: 12px;
        left: 12px;
        background: #DDF5EA;
        color: #3D9F9E;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-hero-content h1 {
        font-family: 'fredoka', sans-serif;
        font-size: 28px;
        color: #3D9F9E;
        margin-bottom: 8px;
    }

    .event-hero-content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .event-subtitle {
        font-family: 'fredoka', sans-serif;
        color: #EE9F9B;
        font-size: 20px;
        margin-bottom: 18px;
    }

    .event-meta {
        display: flex;
        flex-direction: column;
        gap: 14px;
        font-size: 13px;
        margin-bottom: 22px;
    }

    .event-meta i {
        color: #3D9F9E;
        margin-right: 6px;
    }

    .event-actions {
        display: flex;
        gap: 14px;
        justify-content: flex-end;
    }

    .btn-primary {
        background: #3D9F9E;
        color: #fff;
        padding: 10px 22px;
        border-radius: 30px;
        font-size: 13px;
        text-decoration: none;
    }

    .btn-secondary {
        border: 1.5px solid #3D9F9E;
        color: #3D9F9E;
        padding: 10px 22px;
        border-radius: 30px;
        font-size: 13px;
        text-decoration: none;
    }

    /* INFO BOX */
    .event-info-box {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        background: #FBE4E2;
        border-radius: 18px;
        padding: 24px;
        gap: 20px;
        margin-bottom: 40px;
    }

    .info-item span {
        font-size: 12px;
        color: #7a7a7a;
    }

    .info-item p {
        font-weight: 600;
        font-size: 13px;
    }

    .event-description {
        margin-bottom: 40px;
    }

    .event-description h2 {
        font-family: 'fredoka', sans-serif;
        color: #3D9F9E;
        margin-bottom: 10px;
    }

    .event-benefit {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .benefit-card {
        background: #FBE4E2;
        border-radius: 18px;
        padding: 24px;
    }

    .benefit-card h3 {
        font-family: 'fredoka', sans-serif;
        color: #3D9F9E;
        margin-bottom: 12px;
    }

    .benefit-card ul {
        padding-left: 18px;
    }

    .benefit-card li {
        font-size: 13px;
        margin-bottom: 6px;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {

        .event-hero,
        .event-benefit {
            grid-template-columns: 1fr;
        }

        .event-info-box {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 500px) {
        .event-detail-section {
            padding: 40px 20px;
        }

        .event-info-box {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection