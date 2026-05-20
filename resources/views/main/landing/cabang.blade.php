<section id="cabang" class="branch-section">

    <div class="branch-container">

        <h2 class="branch-title">Cabang Mamina</h2>

        <div class="branch-list">

            {{-- CARD 1 --}}
            <div class="branch-card">
                <img src="{{ asset('img/cabang-mlg.jpg') }}" alt="Malang">

                <div class="branch-info">

                    <span class="branch-region">
                        MALANG
                    </span>

                    <h3>Mamina Sawojajar</h3>

                    <p>
                        Ruko Wow, Samping Guardian dan Superindo,
                        Jl. Raya Sawojajar SH-1 No.3
                    </p>

                    <div class="branch-bottom">
                        <span>08.00 - 19.00</span>

                        <a href="https://maps.app.goo.gl/iSNL7YwZUPkyaVB1A"
                            target="_blank">
                            Detail →
                        </a>
                    </div>

                </div>
            </div>

            {{-- CARD 2 --}}
            <div class="branch-card">
                <img src="{{ asset('img/cabang-sht.jpeg') }}" alt="Soehat">

                <div class="branch-info">

                    <span class="branch-region">
                        MALANG
                    </span>

                    <h3>Mamina Soehat</h3>

                    <p>
                        Jl. Soekarno Hatta Indah,
                        Mojolangu, Lowokwaru
                    </p>

                    <div class="branch-bottom">
                        <span>08.00 - 19.00</span>

                        <a href="https://maps.app.goo.gl/sT3BM3YnzyeJ1zF28"
                            target="_blank">
                            Detail →
                        </a>
                    </div>

                </div>
            </div>

            {{-- CARD 3 --}}
            <div class="branch-card">
                <img src="{{ asset('img/cabang-kdr.jpeg') }}" alt="Kediri">

                <div class="branch-info">

                    <span class="branch-region">
                        KEDIRI
                    </span>

                    <h3>Mamina Kediri</h3>

                    <p>
                        Jl. Dr. Sahardjo No.88B,
                        Campurejo, Mojoroto
                    </p>

                    <div class="branch-bottom">
                        <span>08.00 - 19.00</span>

                        <a href="https://maps.app.goo.gl/6eFVGZbbF68wu9Q87"
                            target="_blank">
                            Detail →
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

<style>

    @font-face {
        font-family: 'fredoka';
        src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf');
    }

    @font-face {
        font-family: 'nunito-r';
        src: url('/fonts/nunito/static/Nunito-Regular.ttf');
    }

    * {
        box-sizing: border-box;
    }

    .branch-section {
        background: #FFFDEB;
        padding: 80px 0;
    }

    .branch-container {
        width: 92%;
        max-width: 1300px;
        margin: auto;
    }

    .branch-title {
        text-align: center;
        font-family: 'fredoka';
        font-size: 52px;
        color: #1f2937;
        margin-bottom: 50px;
    }

    .branch-list {
        display: flex;
        gap: 28px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .branch-card {
        width: 360px;
        background: white;
        border-radius: 28px;
        overflow: hidden;

        box-shadow: 0 10px 30px rgba(0,0,0,0.08);

        transition: 0.35s ease;
    }

    .branch-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 18px 40px rgba(0,0,0,0.12);
    }

    .branch-card img {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .branch-info {
        padding: 28px;
    }

    .branch-region {
        font-family: 'nunito-r';
        font-size: 12px;
        letter-spacing: 1.5px;
        color: #9ca3af;
    }

    .branch-info h3 {
        font-family: 'fredoka';
        font-size: 30px;
        color: #1f2937;

        margin-top: 10px;
        margin-bottom: 16px;
    }

    .branch-info p {
        font-family: 'nunito-r';
        font-size: 15px;
        line-height: 1.8;
        color: #6b7280;

        margin-bottom: 28px;
    }

    .branch-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .branch-bottom span {
        font-family: 'nunito-r';
        font-size: 14px;
        color: #888;
    }

    .branch-bottom a {
        text-decoration: none;

        background: #5AA6A5;
        color: #FFFDEB;

        padding: 10px 18px;
        border-radius: 999px;

        font-size: 13px;
        font-weight: 700;

        transition: 0.3s;
    }

    .branch-bottom a:hover {
        background: #4B9594;
    }

    /* MOBILE */

    @media (max-width: 768px) {

        .branch-title {
            font-size: 38px;
        }

        .branch-card {
            width: 100%;
        }

        .branch-card img {
            height: 220px;
        }

        .branch-info h3 {
            font-size: 24px;
        }
    }

</style>