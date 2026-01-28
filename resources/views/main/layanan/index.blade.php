@extends('main.layouts.app')

@section('title', 'Layanan Kami')

@section('content')

<section class="layanan-index">

    {{-- SEARCH --}}
    <div class="layanan-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Cari layanan...">
    </div>

    {{-- JUDUL --}}
    <h2 class="judul-page">Our Services</h2>

        <div class="kategori-grid">

    <a href="{{ url('/layanan/anak') }}" class="kategori-card">
        <i class="fas fa-child"></i>
        <span>Anak</span>
    </a>

    <a href="{{ url('/layanan/bayi') }}" class="kategori-card">
        <i class="fas fa-baby"></i>
        <span>Bayi</span>
    </a>

    <a href="{{ url('/layanan/ibu') }}" class="kategori-card">
        <i class="fas fa-person-breastfeeding"></i>
        <span>Ibu</span>
    </a>

    <a href="{{ url('/layanan/imunisasi') }}" class="kategori-card">
        <i class="fas fa-syringe"></i>
        <span>Imunisasi</span>
    </a>

    <a href="{{ url('/layanan/kelas') }}" class="kategori-card">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Kelas</span>
    </a>

    <a href="{{ url('/layanan/konsultasi') }}" class="kategori-card">
        <i class="fas fa-comments"></i>
        <span>Konsultasi</span>
    </a>

    <a href="{{ url('/layanan/paket') }}" class="kategori-card">
        <i class="fas fa-box"></i>
        <span>Paket</span>
    </a>

    <a href="{{ url('/layanan/toddler') }}" class="kategori-card">
        <i class="fas fa-child-reaching"></i>
        <span>Toddler</span>
    </a>

    <a href="{{ url('/layanan/umum') }}" class="kategori-card">
        <i class="fas fa-user"></i>
        <span>Umum</span>
    </a>

    <a href="{{ url('/layanan/lainnya') }}" class="kategori-card">
        <i class="fas fa-ellipsis-h"></i>
        <span>Lainnya</span>
    </a>

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
    
.layanan-index {
    background: #FFFDEB;
    padding: 60px 80px;
    font-family: 'nunito', sans-serif;
    min-height: 100vh;
}

/* ===== SEARCH ===== */
.layanan-search {
    max-width: 520px;
    margin: 0 auto 40px;
    display: flex;
    align-items: center;
    background: #B4EBE6;
    opacity: 0.45;
    padding: 12px 20px;
    border-radius: 40px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

.layanan-search i {
    color: #3D9F9E;
    font-size: 16px;
    margin-right: 12px;
}

.layanan-search input {
    border: none;
    background: transparent;
    width: 100%;
    outline: none;
    font-size: 14px;
    color: #303030;
}

/* ===== JUDUL ===== */
.judul-page {
    text-align: center;
    font-family: 'fredoka', sans-serif;
    color: #3D9F9E;
    font-size: 22px;
    margin-bottom: 40px;
}

/* ===== GRID KATEGORI ===== */
.kategori-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 28px;
    max-width: 900px;
    margin: 0 auto;
}

/* ===== CARD KATEGORI ===== */
.kategori-card {
    background: #FCEEEE;
    border-radius: 18px;
    padding: 26px 16px;
    text-align: center;
    text-decoration: none;
    color: #303030;
    box-shadow: 0 6px 12px rgba(0,0,0,0.08);
    transition: 0.3s ease;
}

.kategori-card:hover {
    transform: translateY(-6px);
    background: #E7F6EF;
}

/* ICON */
.kategori-card i {
    font-size: 32px;
    color: #303030;
    margin-bottom: 10px;
    display: block;
}

/* TEXT */
.kategori-card span {
    display: block;
    font-size: 14px;
    font-weight: 600;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
    .kategori-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 768px) {
    .kategori-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .layanan-index {
        padding: 40px 30px;
    }
}

@media (max-width: 480px) {
    .kategori-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .judul-page {
        font-size: 18px;
    }
}

</style>
@endsection
