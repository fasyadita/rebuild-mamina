<style>
    /* =========================================
       TREATMENT / TOP SERVICE SECTION
    ========================================= */
    .treatment-section {
        background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
        padding: 50px 20px 60px;
        position: relative;
        overflow: hidden;
        font-family: 'Nunito', sans-serif;
    }

    .treatment-container {
        max-width: 1140px;
        margin: 0 auto;
        width: 100%;
    }

    /* =========================
       BADGE
    ========================= */
    .treatment-badge-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
    }

    .treatment-badge-dot {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background-color: #CBF1E8;
        flex-shrink: 0;
    }

    .treatment-badge-text {
        padding: 4px 14px;
        border-radius: 9999px;
        background-color: #CBF1E8;
        color: #3D9F9E;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        display: inline-block;
    }

    /* =========================
       HEADING
    ========================= */
    .treatment-heading {
        font-size: clamp(24px, 3vw, 32px);
        font-weight: 800;
        color: #2D2D2D;
        margin: 0 0 8px;
        line-height: 1.2;
        font-family: 'Fredoka', 'Nunito', sans-serif;
    }

    .treatment-heading span {
        color: #5CC8C5;
    }

    .treatment-subheading {
        font-size: 13px;
        color: #6F6F6F;
        line-height: 1.6;
        max-width: 580px;
        margin: 0 0 28px;
    }

    /* =========================
       GRID & CARDS
    ========================= */
    .treatment-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-top: 24px;
    }

    .treatment-card {
        background-color: #ffffff;
        border-radius: 17px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .treatment-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    }

    .treatment-img-box {
        height: 155px;
        width: 100%;
        background-color: #f3f4f6;
        overflow: hidden;
    }

    .treatment-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    .treatment-card:hover .treatment-img-box img {
        transform: scale(1.04);
    }

    .treatment-body {
        padding: 18px 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .treatment-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #333333;
        margin: 0 0 8px;
        line-height: 1.3;
    }

    .treatment-card-desc {
        font-size: 12px;
        color: #6b7280;
        line-height: 1.55;
        margin: 0 0 16px;
        flex-grow: 1;
    }

    .treatment-price-wrap {
        margin-top: auto;
        margin-bottom: 6px;
    }

    .treatment-price {
        color: #46C8C3;
        font-size: 16px;
        font-weight: 800;
        display: block;
    }

    .treatment-link {
        display: inline-block;
        font-size: 12px;
        color: #46C8C3;
        font-weight: 700;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .treatment-link:hover {
        color: #309893;
        text-decoration: underline;
    }

    /* =========================
       BUTTON LIHAT SEMUA
    ========================= */
    .all-service-wrapper {
        display: flex;
        justify-content: flex-end;
        margin-top: 32px;
    }

    .btn-all-service {
        background-color: #5AA7A5;
        color: #ffffff;
        border-radius: 30px;
        padding: 9px 22px;
        font-size: 13px;
        font-weight: 700;
        font-family: 'Nunito', sans-serif;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(90, 167, 165, 0.25);
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-all-service:hover {
        background-color: #438F8D;
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(90, 167, 165, 0.35);
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media (max-width: 991px) {
        .treatment-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 600px) {
        .treatment-section {
            padding: 35px 16px 45px;
        }

        .treatment-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .treatment-img-box {
            height: 175px;
        }

        .all-service-wrapper {
            justify-content: center;
        }
    }
</style>

<!-- Treatment Section -->
<section id="top-service" class="treatment-section">

    <div class="treatment-container">

        <!-- Badge -->
        <div class="treatment-badge-wrapper">
            <div class="treatment-badge-dot"></div>
            <span class="treatment-badge-text">
                LAYANAN UNGGULAN
            </span>
        </div>

        <!-- Heading -->
        <h2 class="treatment-heading">
            Treatment
            <span>Mamina</span>
        </h2>

        <p class="treatment-subheading">
            Ditangani terapis bersertifikat dengan prosedur standar —
            nyaman, aman, dan gentle untuk ibu & si kecil.
        </p>

        <!-- Card Grid -->
        <div class="treatment-grid">

            <!-- Card 1 -->
            <div class="treatment-card">
                <div class="treatment-img-box">
                    <img src="{{ asset('img/pijat.png') }}" alt="Pijat Bayi">
                </div>
                <div class="treatment-body">
                    <h3 class="treatment-card-title">Pijat Bayi</h3>
                    <p class="treatment-card-desc">
                        Memperlancar ASI, mencegah mastitis,
                        meningkatkan let-down reflex.
                        Ditangani bidan & konselor laktasi
                        bersertifikat.
                    </p>
                    <div class="treatment-price-wrap">
                        <span class="treatment-price">Mulai Rp 120.000</span>
                    </div>
                    <a href="{{ route('guest.service') }}" class="treatment-link">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="treatment-card">
                <div class="treatment-img-box">
                    <img src="{{ asset('img/pijat1.png') }}" alt="Pijat Bayi">
                </div>
                <div class="treatment-body">
                    <h3 class="treatment-card-title">Pijat Bayi</h3>
                    <p class="treatment-card-desc">
                        Memperlancar ASI, mencegah mastitis,
                        meningkatkan let-down reflex.
                        Ditangani bidan & konselor laktasi
                        bersertifikat.
                    </p>
                    <div class="treatment-price-wrap">
                        <span class="treatment-price">Mulai Rp 120.000</span>
                    </div>
                    <a href="{{ route('guest.service') }}" class="treatment-link">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="treatment-card">
                <div class="treatment-img-box">
                    <img src="{{ asset('img/spa.png') }}" alt="Pijat Bayi">
                </div>
                <div class="treatment-body">
                    <h3 class="treatment-card-title">Pijat Bayi</h3>
                    <p class="treatment-card-desc">
                        Memperlancar ASI, mencegah mastitis,
                        meningkatkan let-down reflex.
                        Ditangani bidan & konselor laktasi
                        bersertifikat.
                    </p>
                    <div class="treatment-price-wrap">
                        <span class="treatment-price">Mulai Rp 120.000</span>
                    </div>
                    <a href="{{ route('guest.service') }}" class="treatment-link">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="treatment-card">
                <div class="treatment-img-box">
                    <img src="{{ asset('img/pijat1.png') }}" alt="Pijat Bayi">
                </div>
                <div class="treatment-body">
                    <h3 class="treatment-card-title">Pijat Bayi</h3>
                    <p class="treatment-card-desc">
                        Memperlancar ASI, mencegah mastitis,
                        meningkatkan let-down reflex.
                        Ditangani bidan & konselor laktasi
                        bersertifikat.
                    </p>
                    <div class="treatment-price-wrap">
                        <span class="treatment-price">Mulai Rp 120.000</span>
                    </div>
                    <a href="{{ route('guest.service') }}" class="treatment-link">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="treatment-card">
                <div class="treatment-img-box">
                    <img src="{{ asset('img/pijat1.png') }}" alt="Pijat Bayi">
                </div>
                <div class="treatment-body">
                    <h3 class="treatment-card-title">Pijat Bayi</h3>
                    <p class="treatment-card-desc">
                        Memperlancar ASI, mencegah mastitis,
                        meningkatkan let-down reflex.
                        Ditangani bidan & konselor laktasi
                        bersertifikat.
                    </p>
                    <div class="treatment-price-wrap">
                        <span class="treatment-price">Mulai Rp 120.000</span>
                    </div>
                    <a href="{{ route('guest.service') }}" class="treatment-link">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="treatment-card">
                <div class="treatment-img-box">
                    <img src="{{ asset('img/spa.png') }}" alt="Pijat Bayi">
                </div>
                <div class="treatment-body">
                    <h3 class="treatment-card-title">Pijat Bayi</h3>
                    <p class="treatment-card-desc">
                        Memperlancar ASI, mencegah mastitis,
                        meningkatkan let-down reflex.
                        Ditangani bidan & konselor laktasi
                        bersertifikat.
                    </p>
                    <div class="treatment-price-wrap">
                        <span class="treatment-price">Mulai Rp 120.000</span>
                    </div>
                    <a href="{{ route('guest.service') }}" class="treatment-link">
                        Pelajari lebih lanjut
                    </a>
                </div>
            </div>

        </div>

        {{-- =========================
             BUTTON LIHAT SEMUA
        ========================= --}}
        <div class="all-service-wrapper">
            <a href="{{ route('guest.service') }}" class="btn-all-service">
                Lihat Semua Layanan
            </a>
        </div>

    </div>

</section>