
<section class="home">
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

            <a href="#" class="btn-reservasi">Reservasi</a>
        </div>
    </div>
</section>

<style>

    @font-face {
        font-family: 'fredoka';
        src: url('/fonts/fredoka/FredokaOne-Regular.ttf') format('truetype');
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
        min-height: 100vh;
        margin-top: 65px;
        /* jarak dari navbar */
        background:
            linear-gradient(to right,
                rgba(255, 245, 240, 0.95) 40%,
                rgba(255, 245, 240, 0.6) 60%,
                rgba(255, 245, 240, 0.2) 75%,
                rgba(255, 245, 240, 0) 100%),
            url("/img/home.jpeg") center/cover no-repeat;
        display: flex;
    }

    .home-container {
        max-width: 1200px;
        /* padding: 0 24px; */
        margin-left: 89px;
        margin-top: 79px;
    }

    .home-content {
        max-width: 520px;
    }

    /* JUDUL */
    .home-title {
        font-family: 'fredoka', sans-serif;
        font-size: 100px;
        /* font-weight: 300; */
        color: #f29aa0;
        margin-bottom: 6px;
        line-height: 1;
        white-space: nowrap;
    }

    /* WARNA KHUSUS HURUF i */
    .home-title .i-letter {
        color: #3fa19f;
    }


    /* SUBTITLE */
    .home-subtitle {
        font-size: 30px;
        font-family: 'fredoka', sans-serif;
        color: #f29aa0;
        font-weight: 500;
        margin-bottom: 16px;
    }

    .home-subtitle .subtitle-span {
        color: #3fa19f;
    }

    /* PARAGRAF */
    .home-content p {
        font-family: 'nunito', sans-serif;
        font-size: 14px;
        color: #555;
        line-height: 1.8;
        margin-bottom: 24px;
    }

    /* BUTTON */
    .btn-reservasi {
        display: inline-block;
        background: #3fb6a8;
        color: #fff;
        padding: 10px 22px;
        border-radius: 999px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
    }
</style>