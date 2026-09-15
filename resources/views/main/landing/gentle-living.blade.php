<style>
    /* =====================================
       GENTLE LIVING SECTION
    ===================================== */

    .gentle-living {
        background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
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
        gap: 12px;
    }


    .living-product {
        display: flex;
        align-items: center;

        gap: 15px;

        width: 100%;

        border: 1px solid #56A6A2;
        border-radius: 11px;

        background: #FFFDF5;

        padding: 16px 16px;

        min-height: 85px;

        transition: all .25s ease;
    }

    .living-product:hover {
        transform: translateY(-2px);

        box-shadow:
            0 5px 12px rgba(0, 0, 0, .07);
    }


    /* Product Image */

    .product-thumb {
        width: 70px;
        height: 70px;

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
        font-size: 14px;
        font-weight: 700;
        line-height: 1.2;
    }

    .living-product p {
        margin: 0;

        color: #777;

        font-size: 13px;

        line-height: 1.3;
    }


    /* Price */

    .product-price {
        min-width: 72px;
        text-align: right;
        color: #4F9D9A;
        font-size: 15px;
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

    <div class="container py-6 px-4">

        <div class="section-heading">

            <div class="flex items-center gap-2 mb-3">

                <div class="w-6 h-6 rounded-full bg-[#CBF1E8]"></div>

                <span class="px-3 py-1 rounded-full
                bg-[#CBF1E8]
                text-[#3D9F9E]
                text-[12px]
                font-semibold
                uppercase
                tracking-widest">

                    MAMINA ESSENTIALS

                </span>

            </div>


            <h2 class="section-title">

                <span class="pink">Produk Pilihan</span>
                <br>

                Untuk
                <span class="green">Ibu & Bayi</span>

            </h2>


            <p class="section-description">

                Semua produk yang digunakan di Mamina Baby Spa kini hadir untuk <br>
                Bunda bawa pulang — gentle, aman, dan teruji klinis

            </p>

        </div>


        {{-- ================= MAIN CONTENT ================= --}}
        <div class="row g-4 align-items-stretch">


            {{-- ================= LEFT ================= --}}
            <div class="col-lg-7 col-md-5">

                <img src="{{ asset('img/mamina-essentials.jpeg') }}" class="w-100 rounded-2xl" alt="Living 1">

            </div>

            {{-- ================= RIGHT ================= --}}
            <div class="col-lg-5 col-md-7">

                <div class="living-products">


                    {{-- Product 1 --}}
                    <div class="living-product">

                        <img src="{{ asset('img/seduhan-original.jpeg') }}" alt="Nama Produk 1" class="product-thumb">


                        <div class="flex-grow-1">

                            <h5>
                                ASI Booster Herbal Original
                            </h5>

                            <p>
                                Minuman herbal praktis untuk membantu melancarkan ASI.
                            </p>

                        </div>


                        <div class="product-price">
                            Rp 30.000
                        </div>

                    </div>


                    {{-- Product 2 --}}
                    <div class="living-product">

                        <img src="{{ asset('img/seduhan-jeruknipis.jpeg') }}" alt="Nama Produk 2" class="product-thumb">


                        <div class="flex-grow-1">

                            <h5>
                                ASI Booster Herbal Jeruk Nipis
                            </h5>

                            <p>
                                Seduhan herbal untuk membantu melancarkan ASI dengan rasa jeruk nipis.
                            </p>

                        </div>


                        <div class="product-price">
                            Rp 30.000
                        </div>

                    </div>


                    {{-- Product 3 --}}
                    <div class="living-product">

                        <img src="{{ asset('img/seduhan-belimbingwuluh.jpeg') }}" alt="Nama Produk 3" class="product-thumb">


                        <div class="flex-grow-1">

                            <h5>
                                ASI Booster Herbal Belimbing Wuluh
                            </h5>

                            <p>
                                Seduhan herbal untuk membantu melancarkan ASI dengan rasa belimbing wuluh.
                            </p>

                        </div>


                        <div class="product-price">
                            Rp 30.000
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>