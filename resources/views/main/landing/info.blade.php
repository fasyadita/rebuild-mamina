<section id="info" class="info-section">
    <div class="info-header">
        <p>Perawatan lengkap, edukatif, dan terpercaya untuk ibu & buah hati</p>
    </div>

    <div class="info-grid">
        
        <div class="info-box pink-bg">
            <div class="icon-circle teal-icon">
                <i class="fa-solid fa-baby-carriage"></i>
            </div>
            <div class="box-content">
                <h3>Services</h3>
                <ul class="check-list">
                    <li><i class="fa-regular fa-circle-check"></i> Ibu Hamil</li>
                    <li><i class="fa-regular fa-circle-check"></i> Baby Spa</li>
                    <li><i class="fa-regular fa-circle-check"></i> Ibu Nifas</li>
                    <li><i class="fa-regular fa-circle-check"></i> Kids Treatment</li>
                </ul>
            </div>
        </div>

        <div class="info-box blue-bg">
            <div class="icon-circle pink-icon">
                <i class="fa-solid fa-shield-heart"></i>
            </div>
            <div class="box-content">
                <h3>Trust</h3>
                <ul class="check-list">
                    <li><i class="fa-regular fa-circle-check"></i> Prosedur berstandar</li>
                    <li><i class="fa-regular fa-circle-check"></i> Fokus kenyamanan</li>
                    <li><i class="fa-regular fa-circle-check"></i> Gentle care approach</li>
                    <li><i class="fa-regular fa-circle-check"></i> Terapis profesional</li>
                </ul>
            </div>
        </div>

        <div class="info-box blue-bg">
            <div class="icon-circle pink-icon">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div class="box-content">
                <h3>Education</h3>
                <ul class="check-list">
                    <li><i class="fa-regular fa-circle-check"></i> Kelas menyusui</li>
                    <li><i class="fa-regular fa-circle-check"></i> Edukasi ibu & anak</li>
                    <li><i class="fa-regular fa-circle-check"></i> Perawatan bayi</li>
                </ul>
            </div>
        </div>

        <div class="info-box pink-bg">
            <div class="icon-circle teal-icon">
                <i class="fa-solid fa-user-nurse"></i>
            </div>
            <div class="box-content">
                <h3>Ditangani Terapis Profesional</h3>
                <p class="desc-text">Semua treatment dilakukan oleh terapis bersertifikat dengan standar perawatan terbaik.</p>
                <a href="/tim-mamina" class="btn-info">Kenali Tim Mamina</a>
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
        font-family: 'nunito';
        src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    /* 1. Container Utama */
    .info-section {
        width: 100%;
        background-color: #fffaf3;
        padding-bottom: 40px;
    }

    .info-header {
        text-align: center;
        padding-bottom: 20px;
        padding-top: 50px;
    }
    .info-header p {
        font-family: 'nunito', sans-serif;
        font-style: italic;
        font-size: 25px;
        color: #555;
        margin: 0;
    }

    /* 2. Grid Layout 2x2 */
    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Bagi 2 kolom */
    }

    /* 3. Styling Kotak (PENTING: Diubah jadi Row/Samping) */
    .info-box {
        padding: 50px 50px;
        display: flex;
        flex-direction: row; /* Ikon dan Teks sejajar ke samping */
        align-items: flex-start; /* Rata atas */
        gap: 25px; /* Jarak antara Ikon dan Teks */
    }

    /* Agar isi teks mengambil sisa ruang */
    .box-content {
        flex: 1;
    }

    /* Warna Background */
    .pink-bg { background-color: #ffdcd1; }
    .blue-bg { background-color: #bcede6; }

    /* 4. Ikon Bulat */
    .icon-circle {
        width: 70px; /* Sedikit diperbesar */
        height: 70px;
        border-radius: 50%;
        display: flex;
        margin-top: 25px;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: #fff;
        flex-shrink: 0; /* Agar lingkaran tidak gepeng */
    }
    
    .teal-icon { background-color: #3fb6a8; }
    .pink-icon { background-color: #fa9d9d; }

    /* 5. Judul */
    .info-box h3 {
        font-family: 'Fredoka', sans-serif;
        font-size: 24px;
        color: #333;
        margin-top: 0;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    /* 6. List Checklist */
    .check-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: 1fr 1.2fr; /* Kolom kanan sedikit lebih lebar */
        column-gap: 10px;
        row-gap: 12px;
    }

    .check-list li {
        font-family: 'nunito', sans-serif;
        font-size: 18px;
        color: #555;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .pink-bg .check-list i { color: #3fb6a8; }
    
    .blue-bg .check-list i { color: #fa9d9d; }

    .desc-text {
        font-family: sans-serif;
        font-size: 18px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .btn-info {
        display: inline-block;
        background-color: #3fb6a8;
        color: white;
        padding: 10px 24px;
        border-radius: 20px;
        text-decoration: none;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 14px;
        transition: 0.3s;
    }
    .btn-info:hover {
        background-color: #2e8b80;
    }

    /* --- Responsif HP --- */
    @media (max-width: 900px) {
        .info-grid {
            grid-template-columns: 1fr; /* Jadi 1 kolom ke bawah */
        }
        .info-box {
            padding: 40px 30px;
        }
    }
</style>