<style>
    /* =====================================
       GENTLE LIVING SECTION
    ===================================== */

    .gentle-living {
        background: #FFFDF4;
        padding: 50px 0 !important;
    }

    .gentle-living .container {
        max-width: 1200px;
    }


    /* =====================================
       HEADING
    ===================================== */

    .section-heading {
        margin-bottom: 32px !important;
    }

    .heading-circle {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #D9F2EC;
        flex-shrink: 0;
    }

    .heading-badge {
        display: inline-block;
        background: #DDF5EF;
        padding: 7px 24px;
        border-radius: 30px;

        color: #4F9D9A;
        font-weight: 600;
        font-size: 12px;
        letter-spacing: 0.4px;
    }


    /* Title */

    .gentle-living .section-title {
        font-size: 36px;
        font-weight: 700;
        line-height: 1.25;

        color: #E89A96;

        margin: 9px 0 5px;
    }

    .gentle-living .section-title .pink {
        color: #E89A96;
    }

    .gentle-living .section-title .green {
        color: #4F9D9A;
    }


    /* Description */

    .section-description {
        max-width: 780px;

        color: #777;
        font-size: 14px;
        line-height: 1.55;

        margin: 0;
    }


    /* =====================================
       MAIN GRID
    ===================================== */

    .gentle-living .row.g-4 {
        --bs-gutter-x: 24px;
        --bs-gutter-y: 23px;
    }


    /* =====================================
       LEFT CARD
    ===================================== */

    .living-card {
        background: linear-gradient(135deg,
                #E5F4FA 0%,
                #F8EEF8 100%);

        border-radius: 18px;

        padding: 16px 18px 18px;

        height: 100%;

        text-align: center;
    }


    /* Logo */

    .living-logo {
        width: 150px;
        max-width: 100%;
        height: auto;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 3px !important;
    }


    .living-card h4 {
        color: #4F9D9A;

        font-size: 16px;
        font-weight: 700;

        margin: 0 0 6px;
    }


    .living-card>p {
        color: #777;

        font-size: 12px;
        line-height: 1.45;

        margin: 0 auto 14px;

        max-width: 270px;
    }


    /* =====================================
       FEATURE BOX
    ===================================== */

    .living-card .row {
        --bs-gutter-x: 13px;
        --bs-gutter-y: 11px;
    }

    .feature-box {
        background: #fff;
        border: 1px solid #C8E8E4;
        border-radius: 7px;
        padding: 9px 6px;
        min-height: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .feature-box strong {
        display: block;

        color: #4F9D9A;

        font-size: 14px;
        font-weight: 700;

        line-height: 1.2;

        margin-bottom: 3px;
    }

    .feature-box small {
        color: #777;

        font-size: 11px;
        line-height: 1.2;
    }


    /* =====================================
       RIGHT PRODUCT LIST
    ===================================== */

    .living-products {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }


    .living-product {
        display: flex;
        align-items: center;

        gap: 15px;

        width: 100%;

        border: 1px solid #56A6A2;
        border-radius: 11px;

        background: #FFFDF5;

        padding: 6px 11px 6px 8px;

        min-height: 67px;

        transition: all .25s ease;
    }

    .living-product:hover {
        transform: translateY(-2px);

        box-shadow:
            0 5px 12px rgba(0, 0, 0, .07);
    }


    /* Product Image */

    .product-thumb {
        width: 56px;
        height: 56px;

        flex-shrink: 0;

        border-radius: 9px;

        background: #FFEFA3;

        object-fit: cover;

        border: 1px solid #56A6A2;
    }


    /* Product Content */

    .living-product .flex-grow-1 {
        min-width: 0;
    }

    .living-product h5 {
        margin: 0 0 3px;

        color: #222;

        font-size: 12px;
        font-weight: 700;

        line-height: 1.2;
    }

    .living-product p {
        margin: 0;

        color: #777;

        font-size: 11px;

        line-height: 1.3;
    }


    /* Price */

    .product-price {
        min-width: 72px;
        text-align: right;
        color: #4F9D9A;
        font-size: 11px;
        font-weight: 700;

        white-space: nowrap;
    }


    /* =====================================
       RESPONSIVE
    ===================================== */

    @media (max-width: 991.98px) {

        .gentle-living {
            padding: 45px 0 !important;
        }

        .gentle-living .section-title {
            font-size: 33px;
        }

        .living-card {
            padding: 20px;
        }

        .living-logo {
            width: 162px;
        }

    }


    @media (max-width: 575.98px) {

        .gentle-living {
            padding: 40px 0 !important;
        }

        .gentle-living .container {
            padding-left: 18px;
            padding-right: 18px;
        }

        .gentle-living .section-title {
            font-size: 30px;
        }

        .section-description {
            font-size: 12px;
        }

        .living-product {
            gap: 11px;
        }

        .product-thumb {
            width: 50px;
            height: 50px;
        }

        .product-price {
            min-width: 67px;
            font-size: 11px;
        }
    }
</style>


<section id="gentle-living" class="gentle-living">

    <div class="container">

        <div class="section-heading">

            <div class="d-flex align-items-center mb-2">

                <div class="heading-circle"></div>

                <span class="heading-badge ms-2">
                    GENTLE LIVING
                </span>

            </div>


            <h2 class="section-title">

                Hidup Lebih
                <span class="pink">Gentle,</span>
                <br>

                Lebih
                <span class="green">Alami</span>

            </h2>


            <p class="section-description">

                Koleksi produk perawatan natural yang dikurasi khusus oleh tim Mamina —
                untuk ibu, bayi, dan keluarga yang memilih cara hidup lebih gentle.

            </p>

        </div>


        {{-- ================= MAIN CONTENT ================= --}}
        <div class="row g-4 align-items-stretch">


            {{-- ================= LEFT ================= --}}
            <div class="col-lg-7 col-md-5">

                <div class="living-card">

                    <img
                        src="{{ asset('img/logo-gl.png') }}"
                        class="living-logo"
                        alt="Gentle Living">


                    <h4>
                        Gentle Living by Mamina
                    </h4>


                    <p>
                        Alam menyediakan yang terbaik. Kami meraciknya
                        dengan penuh cinta untuk Bunda dan Si Kecil.
                    </p>


                    {{-- Features --}}
                    <div class="row">

                        <div class="col-6">

                            <div class="feature-box">

                                <strong>
                                    100% Natural
                                </strong>

                                <small>
                                    Bebas bahan kimia
                                </small>

                            </div>

                        </div>


                        <div class="col-6">

                            <div class="feature-box">

                                <strong>
                                    Derm Tested
                                </strong>

                                <small>
                                    Aman kulit sensitif
                                </small>

                            </div>

                        </div>


                        <div class="col-6">

                            <div class="feature-box">

                                <strong>
                                    Produk Lokal
                                </strong>

                                <small>
                                    Made in Indonesia
                                </small>

                            </div>

                        </div>


                        <div class="col-6">

                            <div class="feature-box">

                                <strong>
                                    Terdaftar BPOM
                                </strong>

                                <small>
                                    Tersertifikasi resmi
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ================= RIGHT ================= --}}
            <div class="col-lg-5 col-md-7">

                <div class="living-products">


                    {{-- Product 1 --}}
                    <div class="living-product">

                        <img
                            src="{{ asset('assets/images/product-1.jpg') }}"
                            alt="Nama Produk 1"
                            class="product-thumb">


                        <div class="flex-grow-1">

                            <h5>
                                Calming Sleep Lotion
                            </h5>

                            <p>
                                Lavender & chamomile — rutinitas tidur si kecil
                            </p>

                        </div>


                        <div class="product-price">
                            Rp 95.000
                        </div>

                    </div>


                    {{-- Product 2 --}}
                    <div class="living-product">

                        <img
                            src="{{ asset('assets/images/product-2.jpg') }}"
                            alt="Nama Produk 2"
                            class="product-thumb">


                        <div class="flex-grow-1">

                            <h5>
                                Calming Sleep Lotion
                            </h5>

                            <p>
                                Lavender & chamomile — rutinitas tidur si kecil
                            </p>

                        </div>


                        <div class="product-price">
                            Rp 95.000
                        </div>

                    </div>


                    {{-- Product 3 --}}
                    <div class="living-product">

                        <img
                            src="{{ asset('assets/images/product-3.jpg') }}"
                            alt="Nama Produk 3"
                            class="product-thumb">


                        <div class="flex-grow-1">

                            <h5>
                                Calming Sleep Lotion
                            </h5>

                            <p>
                                Lavender & chamomile — rutinitas tidur si kecil
                            </p>

                        </div>


                        <div class="product-price">
                            Rp 95.000
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>