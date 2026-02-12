<section id="home" class="home">
    <div class="home-container">
        <div class="home-content">

            <h1 class="home-title">
                mam<span class="i-letter">i</span>na
            </h1>

            <div class="home-subtitle">
                Baby <span class="subtitle-span">Spa & Pijat </span> Laktasi
            </div>

            <p>
                Mamina Baby Spa dan Pijat Laktasi merupakan penyedia
                layanan kebidanan komplementer berpusat di Kota Malang
                berupa layanan ibu dan bayi. Saat ini, Mamina telah membuka
                cabang di luar Kota Malang, yaitu Kota Kediri untuk outlet dan
                beberapa kota di Indonesia untuk layanan homecare.
            </p>

            <a href="/layanan" class="btn-reservasi">Reservasi</a>
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

.home {
    min-height: 90vh;
    background:
        linear-gradient(to right,
            rgba(255, 218, 209, 1) 0%,
            rgba(255, 218, 209, 0.95) 30%,
            rgba(255, 218, 209, 0.6) 55%,
            rgba(255, 218, 209, 0) 100%),
        url("/img/home.jpeg") center/cover no-repeat;

    display: flex;
    align-items: center;
    padding: 120px 20px 80px 20px; 
}

.home-container {
    max-width: 1200px;
    margin: auto; 
    width: 100%;
}

.home-content {
    max-width: 520px;
}

.home-title {
    font-family: 'fredoka', sans-serif;
    font-size: 90px;
    color: #f29aa0;
    margin-bottom: 6px;
    line-height: 1;
}

.home-title .i-letter {
    color: #3fa19f;
}

.home-subtitle {
    font-size: 28px;
    font-family: 'fredoka', sans-serif;
    color: #f29aa0;
    font-weight: 500;
    margin-bottom: 16px;
}

.home-subtitle .subtitle-span {
    color: #3fa19f;
}

.home-content p {
    font-family: 'nunito', sans-serif;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 24px;
    color: #303030;
}

.btn-reservasi {
    display: inline-block;
    background: #3fb6a8;
    color: #fff;
    padding: 12px 26px;
    border-radius: 999px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    transition: 0.3s;
}

.btn-reservasi:hover {
    background: #2e9488;
}

@media (max-width: 992px) {

    .home {
        padding: 100px 30px 60px 30px;
    }

    .home-title {
        font-size: 70px;
    }

    .home-subtitle {
        font-size: 24px;
    }

    .home-content p {
        font-size: 16px;
    }
}

@media (max-width: 576px) {

    .home {
        min-height: auto;
        padding: 80px 20px;
        background:
            linear-gradient(to bottom,
                rgba(255, 218, 209, 0.95),
                rgba(255, 218, 209, 0.85)),
            url("/img/home.jpeg") center/cover no-repeat;
    }

    .home-content {
        max-width: 100%;
        text-align: center;
    }

    .home-title {
        font-size: 52px;
    }

    .home-subtitle {
        font-size: 20px;
    }

    .home-content p {
        font-size: 15px;
        line-height: 1.7;
    }

    .btn-reservasi {
        padding: 12px 28px;
        font-size: 14px;
    }
}
</style>