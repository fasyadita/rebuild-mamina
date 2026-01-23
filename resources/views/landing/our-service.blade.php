<section class="services">
    <div class="services-card">
        <h2 class="services-title">Our Services</h2>

        <div class="service-item">
            <img src="img/baby.jpeg" alt="Layanan Anak">
            <h4>Layanan Anak</h4>
            <p>
                Body text for whatever you'd like to add more to the subheading.
            </p>
            <a href="#" class="btn-price">Lihat Pricelist</a>
        </div>

        <div class="service-item">
            <img src="img/baby.jpeg" alt="Layanan Ibu">
            <h4>Layanan Ibu</h4>
            <p>
                Body text for whatever you'd like to add more to the subheading.
            </p>
            <a href="#" class="btn-price">Lihat Pricelist</a>
        </div>

        <div class="service-item">
            <img src="img/baby.jpeg" alt="Kelas Mamina">
            <h4>Kelas Mamina</h4>
            <p>
                Body text for whatever you'd like to add more to the subheading.
            </p>
            <a href="#" class="btn-price">Lihat Pricelist</a>
        </div>
    </div>
</section>

<style>
    /* Container Utama */
    .services {
        padding: 80px 20px;
        background: #fffaf3;
    }

    /* Card Besar (Pink) */
    .services-card {
        max-width: 1100px;
        max-height: 600px;
        margin: auto;
        background: #ffdcd1; /* Warna pink background */
        border-radius: 40px;  /* Membuat sudut lebih bulat */
        padding: 48px 30px;
        
        /* Pengaturan Flexbox */
        display: flex;
        flex-wrap: wrap;       /* Agar item bisa turun ke bawah jika tidak muat */
        justify-content: center; /* Posisi item di tengah */
        gap: 40px;             /* Jarak antar elemen */
    }

    /* Judul Section */
    .services-title {
        width: 100%;           /* KUNCI: Memaksa judul mengambil satu baris penuh */
        text-align: center;
        font-family: 'Fredoka', sans-serif;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;   /* Jarak dari judul ke item di bawahnya */
        color: #333;
    }

    /* Item Layanan */
    .service-item {
        text-align: center;
        flex: 1 1 300px;       /* Item fleksibel, minimal lebar 300px */
        max-width: 320px;      /* Agar tidak terlalu lebar di layar besar */
    }

    /* Gambar Bulat */
    .service-item img {
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 24px;
        border: 4px solid rgba(255,255,255,0.3); /* Opsional: border tipis biar cantik */
    }

    /* Judul Item (Layanan Anak, dll) */
    .service-item h4 {
        font-family: 'Fredoka', sans-serif;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #333;
    }

    /* Deskripsi Text */
    .service-item p {
        font-family: sans-serif;
        font-size: 15px;
        color: #777;
        line-height: 1.6;
        margin-bottom: 24px;
        padding: 0 10px; /* Sedikit padding agar teks tidak terlalu mepet */
    }

    /* Tombol */
    .btn-price {
        display: inline-block;
        background: #3fb6a8;
        color: #fff;
        font-family: sans-serif;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        border-radius: 50px;
        text-decoration: none;
        transition: background 0.3s;
    }

    .btn-price:hover {
        background: #2e9488;
    }
</style>