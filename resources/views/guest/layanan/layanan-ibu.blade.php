@extends('guest.layouts.app')

@section('title', 'join member')

@section('content')

<section class="detail-layanan-section">
    <div class="detail-container">
        {{-- JUDUL --}}
<div class="section-title-wrapper">
    <h2 class="section-title">
        Layanan <span class="subtitle-span">Ibu</span>
    </h2>
</div>

        {{-- <h2 class="judul-layanan">Layanan Anak</h2> --}}

        {{-- GRID --}}
        <div class="layanan-grid">
            @for ($i = 0; $i < 12; $i++)
            <div class="layanan-card">
                <img src="{{ asset('img/event.jpeg') }}" alt="Pijat Bayi">

                <div class="layanan-content">
                    <h3>Pijat Bayi</h3>
                    <p class="harga">Rp 80.000</p>
                    <p class="suka"><i class="fas fa-heart" aria-hidden="true"></i> 4050+ suka</p>
                    <span class="cabang">Cabang Malang</span>

                    <button class="btn-tambah">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                </div>
            </div>
            @endfor
        </div>

    </div>
</section>
<style>
@font-face {
    font-family: 'fredoka';
    src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf') format('truetype');
}

@font-face {
    font-family: 'nunito';
    src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
}

/* ================= SECTION ================= */
.detail-layanan-section {
    background: #FFFDEB;
    padding: 30px 80px;
    font-family: 'nunito', sans-serif;
}


.detail-container {
    max-width: 1200px;
    margin: 0 auto;
}

/* ================= JUDUL ================= */
.section-title-wrapper {
    background: linear-gradient(90deg, #CBF1E8 0%, #FFDBD1 100%);
    padding: 14px 0;
    margin-bottom: 40px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08);
    border-radius: 6px;
    text-align: center;
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

/* ================= GRID ================= */
.layanan-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
}

/* ================= CARD ================= */
.layanan-card {
    background: #DDF5EA;
    border-radius: 22px;
    padding: 14px;
}

/* IMAGE */
.layanan-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 16px;
}

/* ================= CONTENT ================= */
.layanan-content {
    background: #FDE1DC;
    border-radius: 18px;
    padding: 14px 12px;
    margin-top: 12px;
    text-align: center;
}

/* TITLE */
.layanan-content h3 {
    font-family: 'fredoka', sans-serif;
    font-size: 14px;
    color: #333;
    margin-bottom: 6px;
}

/* HARGA */
.harga {
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 4px;
}

/* SUKA */
.suka {
    font-size: 12px;
    color: #E85C66;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 6px;
    margin-bottom: 4px;
}

/* CABANG */
.cabang {
    font-size: 11px;
    color: #555;
    display: block;
    margin-bottom: 10px;
}

/* ================= BUTTON ================= */
.btn-tambah {
    background: #4FA8A6;
    color: #fff;
    border: none;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 12px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: background 0.2s ease;
}

.btn-tambah:hover {
    background: #3B8F8D;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1024px) {
    .layanan-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .layanan-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .layanan-grid {
        grid-template-columns: 1fr;
    }

    .section-title {
        font-size: 24px;
    }
}
</style>
@endsection
