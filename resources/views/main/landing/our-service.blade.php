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
}

.services-card {
    max-width: 1100px;
    margin: auto;
    background: #ffdcd1;
    border-radius: 40px;
    padding: 50px 30px;

    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
}

.services-title {
    width: 100%;
    text-align: center;
    font-family: 'Fredoka', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.service-item {
    text-align: center;
    flex: 1 1 300px;   /* Responsive */
    max-width: 320px;
}

.service-item img {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 24px;
    border: 4px solid rgba(255,255,255,0.3);
}

.service-item h4 {
    font-family: 'Fredoka', sans-serif;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 12px;
    color: #333;
}

.service-item p {
    font-family: sans-serif;
    font-size: 15px;
    color: #777;
    line-height: 1.6;
    margin-bottom: 24px;
    padding: 0 10px;
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
}

.btn-price:hover {
    background: #2e9488;
}

/* Tablet */
@media (max-width: 992px) {
    .services-card {
        padding: 40px 20px;
        gap: 30px;
    }

    .service-item img {
        width: 160px;
        height: 160px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .services {
        padding: 60px 15px;
    }

    .services-card {
        border-radius: 25px;
        padding: 30px 15px;
    }

    .services-title {
        font-size: 26px;
    }

    .service-item {
        flex: 1 1 100%;
        max-width: 100%;
    }

    .service-item img {
        width: 140px;
        height: 140px;
    }
}

</style>