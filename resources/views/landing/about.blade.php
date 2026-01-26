<section class="about-banner">
    <div class="banner-text">
        <h2>About Mamina Baby Spa</h2>
        <p>Comforting You</p>
    </div>
</section>

<style>
    /* 1. Pengaturan Kotak Utama (Banner) */
    .about-banner {
        /* Ganti 'url' di bawah dengan lokasi foto asli Anda */
        background: 
            /* Gambar Background */
            url('img/about.png'); 
        
        background-size: cover;    /* Agar gambar memenuhi kotak */
        background-position: center; /* Fokus gambar di tengah */
        
        height: 150px;             /* Tinggi banner (sesuaikan keinginan) */
        width: 100%;
        
        /* Teknik menengahkan teks secara vertikal & horizontal */
        display: flex;
        justify-content: center;   /* Tengah horizontal (kiri-kanan) */
        align-items: center;       /* Tengah vertikal (atas-bawah) */
        text-align: center;
    }

    /* 2. Styling Judul Besar */
    .banner-text h2 {
        font-family: 'Fredoka', sans-serif; /* Menggunakan font yang sama dgn sebelumnya */
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin: 0;
        margin-bottom: 8px; /* Jarak sedikit ke tulisan bawahnya */
    }

    /* 3. Styling Tulisan Kecil (Subheading) */
    .banner-text p {
        font-family: 'Fredoka', sans-serif;
        font-size: 20px;
        font-weight: 500;
        color: #555;
        margin: 0;
    }
</style>