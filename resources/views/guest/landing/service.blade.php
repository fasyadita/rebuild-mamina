<section  id="service" class="layanan-index">
    <div class="container">
        
        <div class="services-box">
            
            {{-- JUDUL --}}
            <h2 class="judul-page">Our Services</h2>

            <div class="kategori-grid">

                <a href="{{ url('/guest/layanan-anak') }}" class="kategori-card">
                    <i class="fas fa-child"></i>
                    <span>Anak</span>
                </a>

                <a href="{{ url('/guest/layanan-bayi') }}" class="kategori-card">
                    <i class="fas fa-baby"></i>
                    <span>Bayi</span>
                </a>

                <a href="{{ url('/guest/layanan-ibu') }}" class="kategori-card">
                    <i class="fas fa-person-breastfeeding"></i>
                    <span>Ibu</span>
                </a>

                <a href="{{ url('/guest/layanan-imunisasi') }}" class="kategori-card">
                    <i class="fas fa-syringe"></i>
                    <span>Imunisasi</span>
                </a>

                <a href="{{ url('/guest/layanan-kelas') }}" class="kategori-card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Kelas</span>
                </a>

                <a href="{{ url('/guest/layanan-konsultasi') }}" class="kategori-card">
                    <i class="fas fa-headset"></i> <span>Konsultasi</span>
                </a>

                <a href="{{ url('/guest/layanan-paket') }}" class="kategori-card">
                    <i class="fas fa-box-open"></i>
                    <span>Paket</span>
                </a>

                <a href="{{ url('/guest/layanan-toddler') }}" class="kategori-card">
                    <i class="fas fa-shapes"></i> <span>Toddler</span>
                </a>

                <a href="{{ url('/guest/layanan-umum') }}" class="kategori-card">
                    <i class="fas fa-user-check"></i>
                    <span>Umum</span>
                </a>

                <a href="{{ url('/guest/layanan-lainnya') }}" class="kategori-card">
                    <i class="fas fa-ellipsis-h"></i>
                    <span>Lainnya</span>
                </a>
            </div>
        </div>
        </div>
</section>

<style>
    /* Font setup (biarkan sama) */
    @font-face {
        font-family: 'fredoka';
        src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf') format('truetype');
        font-weight: normal; font-style: normal;
    }
    @font-face {
        font-family: 'nunito';
        src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
        font-weight: normal; font-style: normal;
    }

    /* Section Utama (Background Cream Luar) */
    .layanan-index {
        background: #FFFDEB; /* Cream page background */
        padding: 60px 20px;
        font-family: 'nunito', sans-serif;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* === BARU: Box Pink di Tengah === */
    .services-box {
        background-color: #ffece5; /* Pink Salem/Peach */
        border-radius: 30px;
        padding: 40px 50px;
        max-width: 1100px;
        margin: 0 auto;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    }

    /* ===== JUDUL ===== */
    .judul-page {
        text-align: center;
        font-family: 'fredoka', sans-serif;
        color: #4db6ac; /* Warna Tosca */
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 40px;
        letter-spacing: 0.5px;
    }

    /* ===== GRID KATEGORI ===== */
    .kategori-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr); /* 5 Kolom */
        gap: 25px;
        justify-content: center;
    }

    /* ===== CARD KATEGORI ===== */
    .kategori-card {
        background: #FFFFFF; /* Putih */
        border-radius: 20px;
        padding: 25px 15px; /* Padding vertikal sedikit dikurangi agar kotak */
        text-align: center;
        text-decoration: none;
        color: #000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); /* Bayangan halus */
        transition: all 0.3s ease;
        aspect-ratio: 1 / 1; /* Memaksa bentuk kotak */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .kategori-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    /* ICON */
    .kategori-card i {
        font-size: 32px;
        color: #000; /* Hitam Solid */
        margin-bottom: 12px;
        display: block;
    }

    /* TEXT */
    .kategori-card span {
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #000; /* Hitam Solid */
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .kategori-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .services-box {
            padding: 30px 20px;
        }
        .kategori-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
    }

    @media (max-width: 480px) {
        .kategori-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .judul-page {
            font-size: 20px;
        }
    }
</style>