@extends('main.layouts.app')

@section('title', 'Detail Layanan')

@section('content')

<section class="detail-layanan-section">
    <div class="detail-container">

        {{-- SEARCH --}}
        <div class="layanan-search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Cari layanan...">
        </div>

        {{-- KATEGORI --}}
        @php
        $kategori = [
            ['nama'=>'Anak','icon'=>'fa-child'],
            ['nama'=>'Bayi','icon'=>'fa-baby'],
            ['nama'=>'Ibu','icon'=>'fa-person-breastfeeding'],
            ['nama'=>'Imunisasi','icon'=>'fa-syringe'],
            ['nama'=>'Kelas','icon'=>'fa-chalkboard-teacher'],
            ['nama'=>'Konsultasi','icon'=>'fa-comments'],
            ['nama'=>'Paket','icon'=>'fa-box'],
            ['nama'=>'Toddler','icon'=>'fa-child-reaching'],
            ['nama'=>'Umum','icon'=>'fa-user'],
            ['nama'=>'Lainnya','icon'=>'fa-ellipsis-h'],
        ];
        @endphp

        <div class="layanan-kategori">
            @foreach ($kategori as $item)
                <div class="kategori-item {{ $item['nama'] == 'Anak' ? 'active' : '' }}">
                    <i class="fas {{ $item['icon'] }}"></i>
                    <span>{{ $item['nama'] }}</span>
                </div>
            @endforeach
        </div>

        {{-- JUDUL --}}
        <h2 class="judul-layanan">Layanan Anak</h2>

        {{-- GRID --}}
        <div class="layanan-grid">
            @for ($i = 0; $i < 12; $i++)
            <div class="layanan-card">
                <img src="{{ asset('img/event.jpeg') }}" alt="Pijat Bayi">

                <div class="layanan-content">
                    <h3>Pijat Bayi</h3>
                    <p class="harga">Rp 80.000</p>
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
@endsection
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

    .detail-layanan-section {
    background: #FFFDEB;
    padding: 60px 20px;
    font-family: 'Nunito', sans-serif;
}

/* CONTAINER CENTER */
.detail-container {
    max-width: 1200px;
    margin: 0 auto;
}

/* SEARCH */
.layanan-search {
    max-width: 420px;
    margin: 0 auto 30px;
    display: flex;
    align-items: center;
    background: rgba(180, 235, 230, 0.45); /* B4EBE6 45% */
    padding: 12px 18px;
    border-radius: 40px;
}

.layanan-search i {
    color: #3D9F9E;
    margin-right: 10px;
}

.layanan-search input {
    border: none;
    background: transparent;
    width: 100%;
    outline: none;
    font-size: 13px;
}

/* KATEGORI */
.layanan-kategori {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
    margin-bottom: 40px;
    justify-items: center;
}

.kategori-item {
    background: #FBE4E2;
    border-radius: 16px;
    padding: 18px 10px;
    width: 100%;
    text-align: center;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: .3s;
}

.kategori-item i {
    display: block;
    font-size: 22px;
    margin-bottom: 6px;
}

.kategori-item.active,
.kategori-item:hover {
    background: #3D9F9E;
    color: #fff;
}

/* JUDUL */
.judul-layanan {
    text-align: center;
    font-family: 'Fredoka', sans-serif;
    color: #EE9F9B;
    margin-bottom: 30px;
}

/* GRID */
.layanan-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

/* CARD */
.layanan-card {
    background: #DDF5EA;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 6px 10px rgba(0,0,0,.08);
}

.layanan-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

/* CONTENT */
.layanan-content {
    padding: 14px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.btn-tambah {
    background: #3D9F9E;
    color: #fff;
    border: none;
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 12px;
    cursor: pointer;
    width: 100%;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .layanan-grid { grid-template-columns: repeat(3, 1fr); }
    .layanan-kategori { grid-template-columns: repeat(4, 1fr); }
}

@media (max-width: 768px) {
    .layanan-grid { grid-template-columns: repeat(2, 1fr); }
    .layanan-kategori { grid-template-columns: repeat(3, 1fr); }
}

@media (max-width: 480px) {
    .layanan-grid { grid-template-columns: 1fr; }
    .layanan-kategori { grid-template-columns: repeat(2, 1fr); }
}

</style>