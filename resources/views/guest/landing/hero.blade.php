<section class="hero">

    <div class="hero-container">

        <!-- ================= LEFT ================= -->

        <div class="hero-content">

            <div class="small-label">
                TERPERCAYA DI INDONESIA
            </div>

            <h1 class="hero-title">
                Perawatan<br>
                Nyaman untuk<br>
                <span>Ibu &amp; Si Kecil</span>
            </h1>

            <p class="hero-description">
                Mamina hadir dengan kasih sayang profesional
                untuk mendukung tumbuh kembang si kecil dan
                pemulihan bunda pasca melahirkan.
            </p>

            <div class="hero-bottom">

                <a href="#top-service" class="primary-button">
                    Layanan Unggulan
                    <span class="star">★</span>
                </a>

                <div class="registered">

                    <div class="avatars">
                        <img
                            class="avatar"
                            src="https://i.pravatar.cc/100?img=47"
                            alt="User">

                        <img
                            class="avatar"
                            src="https://i.pravatar.cc/100?img=32"
                            alt="User">

                        <img
                            class="avatar"
                            src="https://i.pravatar.cc/100?img=44"
                            alt="User">

                        <div class="more">
                            5k+
                        </div>
                    </div>

                    <div class="registered-text">
                        Moms<br>
                        terdaftar
                    </div>

                </div>

            </div>

        </div>


        <!-- ================= RIGHT ================= -->

        <div class="hero-visual">

            <div class="image-background"></div>

            <!-- Foto utama -->
            <img
                class="main-image"
                src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=900&q=90"
                alt="Ibu dan bayi">

            <!-- Comfort Badge -->
            <div class="comfort-card">

                <div class="comfort-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="comfort-info">
                    <small>Pijat Bayi</small>
                    <strong>98% Nyaman</strong>
                </div>

            </div>


            <!-- Rating -->
            <div class="rating-card">

                <div class="rating-icon">
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="rating-info">
                    <small>Rating</small>
                    <strong>4.9 / 5.0</strong>
                </div>

            </div>

        </div>

    </div>

</section>

<style>
    /* =========================
       HERO SECTION
    ========================== */

    .hero {
        min-height: 80vh;
        display: flex;
        align-items: center;
        padding: 30px 5% 50px;
        overflow: hidden;
        background: transparent;
        font-family: 'Nunito', sans-serif;
        color: #555252;
    }

    .hero-container {
        width: 100%;
        max-width: 1250px;
        margin: auto;

        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 60px;
    }

    /* =========================
       LEFT CONTENT
    ========================== */

    .hero-content {
        max-width: 600px;
    }

    .small-label {
        display: inline-block;

        background: #f9dcd3;
        color: #d98e7d;

        padding: 7px 17px;
        border-radius: 30px;

        font-size: 11px;
        font-weight: 700;
        letter-spacing: .5px;

        margin-bottom: 22px;
    }

    .hero-title {
        font-size: clamp(36px, 4.5vw, 62px);
        line-height: 1.1;
        font-weight: 800;
        color: #555354;

        margin-bottom: 24px;
    }

    .hero-title span {
        color: #d78f7c;
    }

    .hero-description {
        max-width: 520px;

        font-size: 16px;
        line-height: 1.7;
        color: #858181;

        margin-bottom: 34px;
    }

    /* =========================
       BOTTOM CONTENT
    ========================== */

    .hero-bottom {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .primary-button {
        border: none;
        background: #61b2ae;
        color: white;

        padding: 15px 30px;
        min-width: 172px;

        border-radius: 40px;

        font-family: inherit;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        cursor: pointer;

        box-shadow: 0 8px 18px rgba(77, 137, 134, .20);

        transition: .3s ease;
    }

    .primary-button:hover {
        color: white;
        background: #4fa09c;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(77, 137, 134, .28);
    }

    .primary-button .star {
        display: block;
        font-size: 15px;
        color: #ffe47c;
        margin-top: 2px;
        line-height: 1;
    }

    /* =========================
       USERS
    ========================== */

    .registered {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .avatars {
        display: flex;
        align-items: center;
    }

    .avatar {
        width: 38px;
        height: 38px;

        border-radius: 50%;
        border: 3px solid #fffdf1;

        object-fit: cover;

        margin-left: -8px;
    }

    .avatar:first-child {
        margin-left: 0;
    }

    .more {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #f9d8d0;
        color: #dc917f;

        border-radius: 50%;
        border: 3px solid #fffdf1;

        font-size: 10px;
        font-weight: 700;

        margin-left: -8px;
    }

    .registered-text {
        font-size: 12px;
        line-height: 1.35;
        color: #888;
    }

    /* =========================
       RIGHT IMAGE
    ========================== */

    .hero-visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-background {
        position: absolute;

        width: 88%;
        height: 92%;

        right: 0;
        top: 4%;

        background: #eef4e5;
        border-radius: 45px;

        z-index: 0;
    }

    .main-image {
        position: relative;
        z-index: 1;

        width: 86%;
        aspect-ratio: 1 / .95;

        object-fit: cover;

        border-radius: 40px;

        border: 7px solid white;

        box-shadow:
            0 18px 30px rgba(80, 70, 60, .15);
    }

    /* =========================
       RATING BADGE
    ========================== */

    .rating-card {
        position: absolute;

        right: -10px;
        bottom: 10px;

        z-index: 3;

        display: flex;
        align-items: center;
        gap: 10px;

        background: white;

        padding: 14px 18px;

        border-radius: 17px;

        box-shadow:
            0 12px 25px rgba(80, 70, 60, .15);
    }

    .rating-icon {
        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #dc937f;
        color: white;

        border-radius: 9px;

        font-size: 14px;
    }

    .rating-info small {
        display: block;

        font-size: 10px;
        color: #aaa;
        margin-bottom: 2px;
    }

    .rating-info strong {
        font-size: 12px;
        color: #555;
    }

    /* =========================
       COMFORT BADGE
    ========================== */

    .comfort-card {
        position: absolute;

        left: 4%;
        top: 0;

        z-index: 3;

        display: flex;
        align-items: center;
        gap: 10px;

        background: white;

        padding: 12px 18px 12px 12px;

        border-radius: 15px;

        box-shadow:
            0 10px 22px rgba(80, 70, 60, .13);
    }

    .comfort-icon {
        width: 31px;
        height: 31px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #61b2ae;
        color: white;

        font-size: 14px;
    }

    .comfort-info small {
        display: block;
        font-size: 10px;
        color: #999;
    }

    .comfort-info strong {
        display: block;
        font-size: 12px;
        color: #555;
        margin-top: 2px;
    }

    /* =========================
       RESPONSIVE
    ========================== */

    @media (max-width: 900px) {

        .hero {
            padding: 30px 7% 40px;
        }

        .hero-container {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .hero-content {
            max-width: 650px;
            margin: auto;
            text-align: center;
        }

        .hero-description {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-bottom {
            justify-content: center;
            flex-wrap: wrap;
        }

        .hero-visual {
            max-width: 500px;
            width: 100%;
            margin: auto;
        }

        .comfort-card {
            left: 3%;
        }

        .rating-card {
            right: 0;
        }
    }

    @media (max-width: 500px) {

        .hero {
            padding: 20px 20px 30px;
        }

        .hero-title {
            font-size: 34px;
        }

        .hero-description {
            font-size: 14px;
        }

        .hero-bottom {
            flex-direction: column;
        }

        .registered {
            justify-content: center;
        }

        .main-image {
            width: 90%;
            border-radius: 28px;
        }

        .image-background {
            border-radius: 30px;
        }

        .comfort-card {
            transform: scale(.85);
            transform-origin: left top;
        }

        .rating-card {
            transform: scale(.85);
            transform-origin: right bottom;
        }
    }
</style>
