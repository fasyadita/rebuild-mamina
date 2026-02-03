<section id="cabang" class="cabang-section">
    <div class="container">
        <h2 class="cabang-title">Cabang Mamina</h2>

        <div class="cabang-content">
            <div class="cabang-left">
                <img src="img/bg.jpeg" alt="Interior Mamina" class="main-img">
            </div>

            <div class="cabang-right">

                <div class="cabang-card">
                    <div class="card-img-wrapper">
                        <img src="img/bg1.jpeg" alt="Cabang Malang">
                    </div>
                    <div class="card-info">
                        <h3>Mamina Cabang Malang</h3>
                        <ul class="info-details">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Ruko Wow, Samping Guardian dan Superindo, Jl. Raya Sawojajar SH-1 No.3, Kota Malang, Jawa Timur 65139</span>
                            </li>
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                <span>Senin - Minggu <br> 08.00 - 19.00</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>08131234567</span>
                            </li>
                        </ul>
                        <div class="card-buttons">
                            <a href="https://wa.me/6281329913203?text=Halo%20Admin"  target="_blank" class="btn-contact">Hubungi Cabang</a>
                            <a href="https://maps.app.goo.gl/iSNL7YwZUPkyaVB1A" target="_blank" class="btn-maps">Lihat di Google Maps</a>
                        </div>
                    </div>
                </div>

                <div class="cabang-card">
                    <div class="card-img-wrapper">
                        <img src="img/bg1.jpeg" alt="Cabang Kediri">
                    </div>
                    <div class="card-info">
                        <h3>Mamina Cabang Kediri</h3>
                        <ul class="info-details">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Ruko Wow, Samping Guardian dan Superindo, Jl. Raya Sawojajar SH-1 No.3, Kota Malang, Jawa Timur 65139</span>
                            </li>
                            <li>
                                <i class="fa-regular fa-clock"></i>
                                <span>Senin - Minggu <br> 08.00 - 19.00</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>08131234567</span>
                            </li>
                        </ul>
                        <div class="card-buttons">
                            <a href="https://wa.me/6282131090283?text=Halo%20Admin"  target="_blank" class="btn-contact">Hubungi Cabang</a>
                            <a href="https://maps.app.goo.gl/6eFVGZbbF68wu9Q87" target="_blank" class="btn-maps">Lihat di Google Maps</a>
                        </div>
                    </div>
                </div>

            </div>
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
        font-family: 'nunito-m';
        src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'nunito-r';
        src: url('/fonts/nunito/static/Nunito-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }


    /* 1. Container Utama */
    .cabang-section {
        padding: 60px 0px;
        background-color: #fffaf3;
        /* Cream Background */
    }

    .container {
        max-width: 90% !important;
    }

    /* 2. Judul */
    .cabang-title {
        text-align: center;
        font-family: 'fredoka', sans-serif;
        font-size: 32px;
        color: #333;
        margin-bottom: 40px;
    }

    /* 3. Layout Flexbox (Kiri Gambar, Kanan List) */
    .cabang-content {
        display: flex;
        gap: 30px;
        align-items: center;
        /* Agar sejajar di atas */
    }

    /* Kolom Kiri: Gambar Besar */
    .cabang-left {
        flex: 1.2;
    }

    .main-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30px;
        /* Sudut sangat bulat */
    }

    /* Kolom Kanan: Daftar Card */
    .cabang-right {
        flex: 1.4;
        /* Mengambil ruang sedikit lebih lebar */
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* 4. Styling Kartu Cabang */
    .cabang-card {
        display: flex;
        background-color: #d8f5ef;
        /* Hijau Mint Muda */
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        width: 750px;
        height: 250px;
    }

    /* Gambar Kecil di Kiri Kartu */
    .card-img-wrapper {
        width: 35%;
        /* Lebar gambar gedung */
    }

    .card-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Bagian Info (Kanan Kartu) */
    .card-info {
        width: 65%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-info h3 {
        font-family: 'fredoka', sans-serif;
        font-size: 20px;
        color: #ff8e8e;
        /* Warna Pink Salmon untuk Judul Cabang */
        margin-top: 0;
        margin-bottom: 15px;
    }

    /* List Detail (Alamat, Jam, Telp) */
    .info-details {
        list-style: none;
        padding: 0;
        margin: 0 0 0px 0;
    }

    .info-details li {
        display: flex;
        align-items: flex-start;
        gap: 5px;
        margin-bottom: 10px;
        font-family: 'nunito-r', sans-serif;
        font-size: 13px;
        color: #555;
        line-height: 1.4;
    }

    .info-details i {
        color: #3fb6a8;
        /* Warna Ikon Tosca */
        margin-top: 3px;
    }

    /* 5. Tombol-tombol */
    .card-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        /* Agar tombol turun jika layar sempit */
        margin-left: 145px;
    }

    .btn-contact,
    .btn-maps {
        padding: 8px 16px;
        border-radius: 20px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 12px;
        font-weight: 600;
        text-align: center;
    }

    .btn-contact {
        background-color: #f0fcf9;
        color: #3fb6a8;
        border: 1px solid #ccece6;
    }

    .btn-maps {
        background-color: #3fb6a8;
        color: white;
    }

    .btn-maps:hover {
        background-color: #2e9488;
    }

    /* --- Responsif (HP) --- */
    @media (max-width: 900px) {
        .cabang-content {
            flex-direction: column;
            /* Ubah jadi susunan ke bawah */
        }

        .main-img {
            min-height: 300px;
            /* Perkecil tinggi gambar utama di HP */
            margin-bottom: 20px;
        }

        .cabang-card {
            flex-direction: column;
            /* Kartu jadi susunan ke bawah di HP */
        }

        .card-img-wrapper,
        .card-info {
            width: 100%;
        }

        .card-img-wrapper img {
            height: 200px;
            /* Tinggi gambar gedung di HP */
        }
    }
</style>