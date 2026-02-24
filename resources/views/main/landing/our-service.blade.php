<section id="services" class="services">
    <div class="services-card">
        <h2 class="services-title">Layanan Kami</h2>

        <div class="service-item">
            <img src="img/baby.jpeg" alt="Layanan Anak">
            <h4>Layanan Anak</h4>
            <p>
                Body text for whatever you'd like to add more to the subheading.
            </p>
            <a href="/pricelist" class="btn-price">Lihat Pricelist</a>
        </div>

        <div class="service-item">
            <img src="img/baby.jpeg" alt="Layanan Ibu">
            <h4>Layanan Ibu</h4>
            <p>
                Body text for whatever you'd like to add more to the subheading.
            </p>
            <a href="/pricelist" class="btn-price">Lihat Pricelist</a>
        </div>

        <div class="service-item">
            <img src="img/baby.jpeg" alt="Kelas Mamina">
            <h4>Kelas Mamina</h4>
            <p>
                Body text for whatever you'd like to add more to the subheading.
            </p>
            <a href="/pricelist" class="btn-price">Lihat Pricelist</a>
        </div>
    </div>
</section>
<style>
    /* Global/Reset Dasar */
    * {
        box-sizing: border-box; /* Penting agar padding tidak merusak lebar elemen */
    }

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

    .services {
        padding: 80px 20px;
        background: #fffdeb;
        width: 100%;
        overflow-x: hidden; /* Mencegah gap putih di samping */
    }

    .services-card {
        max-width: 1100px;
        /* max-height: 550px; <--- DIHAPUS agar tinggi kotak otomatis menyesuaikan isi */
        margin: auto;
        background: #ffdcd1;
        border-radius: 40px;
        padding: 40px 30px; /* Padding sedikit disesuaikan */

        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start; /* Agar elemen sejajar di atas jika tinggi teks berbeda */
        gap: 30px 40px; /* Jarak antar elemen */
    }

    .services-title {
        width: 100%;
        text-align: center;
        font-family: 'Fredoka', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-top: 0;
        margin-bottom: 20px; /* Tambah jarak antara judul dan gambar */
    }

    .service-item {
        text-align: center;
        max-width: 300px; /* Sedikit dikecilkan agar muat 3 kolom di desktop */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .service-item img {
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 24px;
        border: 4px solid rgba(255, 255, 255, 0.3);
    }

    .service-item h4 {
        font-family: 'Fredoka', sans-serif;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #333;
    }

    .service-item p {
        font-family: 'nunito', sans-serif; /* Diubah ke nunito sesuai font-face yang kamu buat */
        font-size: 15px;
        color: #777;
        line-height: 1.6;
        margin-bottom: 24px;
        padding: 0 10px;
        flex-grow: 1; /* Agar posisi tombol rata di bawah meskipun panjang teks beda */
    }

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
        transition: 0.3s;
        margin-top: auto; /* Memastikan tombol selalu ada di bagian paling bawah */
    }

    .btn-price:hover {
        background: #2e9488;
    }

    /* --- MEDIA QUERIES UNTUK RESPONSIVE (TAMPILAN HP) --- */
    @media (max-width: 768px) {
        .services {
            padding: 40px 15px; /* Kurangi jarak kosong di HP */
        }

        .services-card {
            padding: 30px 20px;
            border-radius: 24px; /* Sudut kotak tidak terlalu melengkung di HP */
            gap: 40px; /* Jarak antar item saat ditumpuk ke bawah */
        }

        .services-title {
            font-size: 26px; /* Judul sedikit dikecilkan */
        }

        .service-item img {
            width: 150px; /* Gambar sedikit dikecilkan di HP */
            height: 150px;
        }
    }
</style>