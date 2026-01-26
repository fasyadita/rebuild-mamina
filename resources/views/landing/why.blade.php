<section class="why-choose">
    <div class="container">
        <h2 class="section-title">Kenapa memilih Mamina?</h2>

        <div class="benefits-grid">
            
            <div class="benefit-card">
                <img src="img/bayi.jpeg" alt="Gentle Care">
                <div class="card-content">
                    <h3>Gentle Care</h3>
                    <p>Perawatan lembut & aman untuk ibu dan anak</p>
                </div>
            </div>

            <div class="benefit-card">
                <img src="img/bayi.jpeg" alt="Lengkap & Terpadu">
                <div class="card-content">
                    <h3>Lengkap & Terpadu</h3>
                    <p>Dari masa hamil, nifas, hingga anak usia 0-7 tahun</p>
                </div>
            </div>

            <div class="benefit-card">
                <img src="img/bayi.jpeg" alt="Terapis Bersertifikat">
                <div class="card-content">
                    <h3>Terapis Bersertifikat</h3>
                    <p>Ditangani tenaga profesional & berpengalaman</p>
                </div>
            </div>

            <div class="benefit-card">
                <img src="img/bayi.jpeg" alt="Nyaman & Menenangkan">
                <div class="card-content">
                    <h3>Nyaman & Menenangkan</h3>
                    <p>Fokus pada kenyamanan ibu dan buah hati</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* 1. Pengaturan Section Utama */
    .why-choose {
        padding: 60px 20px;
        background-color: #fffaf3;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* 2. Judul */
    .section-title {
        text-align: center;
        font-family: 'Fredoka', sans-serif;
        font-size: 28px;
        font-weight: 600;
        color: #333;
        margin-bottom: 40px;
    }

    /* 3. Grid Layout (PERBAIKAN DISINI) */
    .benefits-grid {
        display: grid;
        /* KUNCI: Memaksa 4 kolom sejajar */
        grid-template-columns: repeat(4, 1fr); 
        gap: 20px; 
    }

    /* 4. Styling Kartu (PERBAIKAN DISINI) */
    .benefit-card {
        background: transparent;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        transition: transform 0.3s ease;
        
        /* HAPUS 'grid-template-columns' dari sini, karena ini adalah item, bukan wadah */
    }

    .benefit-card:hover {
        transform: translateY(-5px);
    }

    .benefit-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    .card-content {
        background-color: #d1f2eb;
        padding: 20px;
        text-align: center;
        height: 100%;
    }

    .card-content h3 {
        font-family: 'Fredoka', sans-serif;
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
    }

    .card-content p {
        font-family: sans-serif;
        font-size: 14px;
        color: #666;
        line-height: 1.5;
        margin: 0;
    }

    /* --- RESPONSIF (Agar di HP tidak gepeng/rusak) --- */
    @media (max-width: 1024px) {
        .benefits-grid {
            grid-template-columns: repeat(2, 1fr); /* Tablet jadi 2 kolom */
        }
    }

    @media (max-width: 600px) {
        .benefits-grid {
            grid-template-columns: 1fr; /* HP jadi 1 kolom ke bawah */
        }
    }
</style>