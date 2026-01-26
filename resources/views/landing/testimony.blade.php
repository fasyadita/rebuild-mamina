<section class="testimommy-section">
    <div class="container-fluid">
        <h2 class="testi-title">Testimommy</h2>

        <div class="testi-row">
            <div class="testi-card">
                <p class="review-text">“Pelayanannya ramah banget, anakku yang biasanya rewel jadi anteng pas dipijat. Recommended!”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Bunda Sarah</h5>
                        <span>Ibu dari Arka (6 bulan)</span>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <p class="review-text">“Tempatnya bersih, wangi, dan homey. Suka banget sama konsepnya yang privat.”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Mama Dinda</h5>
                        <span>Ibu Hamil (Trimester 3)</span>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <p class="review-text">“Terapisnya sabar dan telaten. Pulang dari sini badan rasanya enteng banget.”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Ibu Rina</h5>
                        <span>Postpartum Treatment</span>
                    </div>
                </div>
            </div>

             <div class="testi-card">
                <p class="review-text">“A genuinely glowing review. Sangat membantu untuk ibu baru seperti saya.”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Mommy Tika</h5>
                        <span>Baby Spa</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="testi-row second-row">
            <div class="testi-card">
                <p class="review-text">“Harga terjangkau untuk pelayanan se-premium ini. Bakal langganan terus!”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Bunda Fia</h5>
                        <span>Kids Treatment</span>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <p class="review-text">“Pengalaman pertama baby spa yang menyenangkan. Anakku tidur pulas setelahnya.”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Mama Gio</h5>
                        <span>Baby 3 Bulan</span>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <p class="review-text">“Sangat edukatif, terapisnya sambil ngajarin cara pijat ringan di rumah.”</p>
                <div class="user-profile">
                    <img src="img/mom.jpg" alt="User">
                    <div class="user-info">
                        <h5>Ibu Tari</h5>
                        <span>Kelas Menyusui</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* 1. Section Utama */
    .testimommy-section {
        padding: 60px 0;
        background-color: #fffaf3; /* Cream background */
        overflow: hidden; /* Mencegah scrollbar halaman utama muncul */
    }

    /* 2. Judul */
    .testi-title {
        text-align: center;
        font-family: 'Fredoka', sans-serif;
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 40px;
    }

    /* 3. Container Baris (Scrollable) */
    .testi-row {
        display: flex; /* Menyusun kartu ke samping */
        gap: 24px;     /* Jarak antar kartu */
        overflow-x: auto; /* Agar bisa discroll ke samping */
        padding: 10px 20px 30px 20px; /* Padding bawah agar bayangan tidak terpotong */
        
        /* Menyembunyikan Scrollbar agar terlihat bersih */
        scrollbar-width: none; /* Untuk Firefox */
        -ms-overflow-style: none;  /* Untuk IE/Edge */
    }
    
    .testi-row::-webkit-scrollbar { 
        display: none; /* Untuk Chrome/Safari */
    }

    /* Trik agar baris kedua posisinya agak geser (seperti bata) */
    .second-row {
        padding-left: 60px; 
    }

    /* 4. Styling Kartu Review */
    .testi-card {
        background-color: #ffdcd1; /* Warna Pink Pastel */
        min-width: 320px; /* Lebar tetap agar tidak mengecil */
        max-width: 320px;
        border-radius: 20px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
        /* Efek bayangan halus */
        box-shadow: 0 4px 10px rgba(0,0,0,0.03);
        transition: transform 0.3s;
    }

    .testi-card:hover {
        transform: translateY(-5px); /* Naik sedikit saat dihover */
    }

    /* Teks Review */
    .review-text {
        font-family: sans-serif;
        font-size: 16px;
        font-style: italic;
        color: #444;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    /* Bagian Profil User */
    .user-profile {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .user-profile img {
        width: 50px;
        height: 50px;
        border-radius: 50%; /* Membuat foto bulat */
        object-fit: cover;
        border: 2px solid #fff;
    }

    .user-info h5 {
        font-family: 'Fredoka', sans-serif;
        font-size: 16px;
        margin: 0;
        color: #333;
    }

    .user-info span {
        font-family: sans-serif;
        font-size: 12px;
        color: #666;
    }
</style>