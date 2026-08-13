<style>
    /* ==============================
       PRODUCT SECTION
    ============================== */

    .product-section {
        padding: 50px 0 !important;
        background: #FFFDF4;
        position: relative;
    }

    /* Badge */
    .section-header .circle {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #FFDCD6;
        box-shadow: 0 0 10px rgba(239, 143, 143, 0.2);
    }

    .section-badge {
        display: inline-block;
        padding: 5px 16px;
        background: #FFE0DA;
        color: #D58B87;
        border-radius: 30px;
        font-weight: 600;
        font-size: 11px;
        letter-spacing: 0.5px;
    }


    /* Heading */
    .section-title {
        font-size: 32px;
        font-weight: 700;
        line-height: 1.15;
        color: #E59A94;
        margin-top: 14px;
        margin-bottom: 12px;
    }

    .section-title span {
        color: #4F9D9A;
    }

    .section-desc {
        max-width: 620px;
        color: #777;
        font-size: 13px;
        line-height: 1.7;
        margin-top: 8px;
    }


    /* ==============================
       PRODUCT CARD
    ============================== */

    .product-card {
        background: #fff;
        border-radius: 17px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(173, 190, 107, 0.14);
        transition: all 0.3s ease;
        height: 100%;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
    }


    /* Product Image */
    .product-image {
        height: 170px;
        overflow: hidden;
        background: #f2f2f2;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }


    /* Product Content */
    .product-body {
        padding: 16px;
    }

    .product-body small.category {
        color: #E18883;
        font-size: 9px;
        font-weight: 600;
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }

    .product-body h4 {
        margin: 6px 0;
        font-size: 17px;
        font-weight: 700;
        color: #4A3B4A;
    }

    .product-body p {
        font-size: 12px;
        color: #777;
        line-height: 1.6;
        margin-bottom: 14px;

        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }


    /* Price */
    .product-body .price {
        font-size: 17px;
        font-weight: 700;
        color: #4F9D9A;
        margin: 0;
    }


    /* Buy Button */
    .btn-buy {
        display: inline-block;
        background: #5EA7A5;
        color: white;
        padding: 7px 15px;
        border-radius: 30px;
        text-decoration: none;
        font-size: 11px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-buy:hover {
        background: #4A9794;
        color: white;
    }


    /* ==============================
       MARKETPLACE
    ============================== */

    .marketplace {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;

        background: #FFF6E5;
        padding: 20px 24px;
        border-radius: 17px;
        margin-top: 35px;

        box-shadow: 0 6px 20px rgba(173, 190, 107, 0.12);
    }

    .marketplace h3 {
        font-size: 17px;
        font-weight: 700;
        color: #4A3B4A;
        margin-bottom: 4px;
    }

    .marketplace p {
        margin: 0;
        color: #777;
        font-size: 11px;
    }


    /* Marketplace Buttons */
    .market-btn {
        display: flex;
        gap: 8px;
    }

    .btn-shopee,
    .btn-tokopedia {
        display: flex;
        align-items: center;
        gap: 6px;

        padding: 8px 16px;
        border-radius: 30px;

        color: white;
        text-decoration: none;
        font-size: 11px;
        font-weight: 600;

        transition: 0.3s;
    }

    .btn-shopee {
        background: #58A8A7;
    }

    .btn-tokopedia {
        background: #E8A2A0;
    }

    .btn-shopee:hover,
    .btn-tokopedia:hover {
        color: white;
        transform: translateY(-1px);
    }


    /* ==============================
       RESPONSIVE
    ============================== */

    @media (max-width: 992px) {

        .product-section {
            padding: 40px 0 !important;
        }

        .section-title {
            font-size: 30px;
        }

        .section-desc {
            font-size: 12px;
        }

        .product-image {
            height: 160px;
        }

        .marketplace {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .market-btn {
            justify-content: center;
        }
    }


    @media (max-width: 576px) {

        .section-title {
            font-size: 27px;
        }

        .section-desc {
            font-size: 11px;
        }

        .product-image {
            height: 180px;
        }

        .marketplace {
            padding: 18px;
        }

        .marketplace h3 {
            font-size: 15px;
        }

        .market-btn {
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>

<section id="essentials" class="product-section">
    <div class="container">

        {{-- Heading --}}
        <div class="section-header mb-5">

            <div class="d-flex align-items-center mb-3">
                <div class="circle"></div>

                <span class="section-badge ms-3">
                    MAMINA ESSENTIALS
                </span>
            </div>

            <h2 class="section-title">
                Produk Pilihan <br>
                untuk <span>Ibu & Bayi</span>
            </h2>

            <p class="section-desc">
                Punya keahlian sebagai bidan, terapis, atau nakes?
                Bergabunglah sebagai mitra MaminaGO! dan layani klien
                di kotamu — dengan sistem, dukungan, dan brand Mamina
                di belakangmu.
            </p>

        </div>

        {{-- Product --}}
        <div class="row g-3 justify-content-center">

            {{-- Product 1 --}}
            <div class="col-lg-4 col-md-6">
                <div class="product-card">

                    <div class="product-image">
                        <img src="{{ asset('img/image 5.png') }}"
                            class="img-fluid"
                            alt="Nama Produk 1">
                    </div>

                    <div class="product-body">

                        <small class="category">
                            KATEGORI
                        </small>

                        <h4>
                            Nama Produk 1
                        </h4>

                        <p>
                            Deskripsi singkat produk yang ditampilkan di sini.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <h3 class="price">
                                Rp 50.000
                            </h3>

                            <a href="#" class="btn-buy">
                                Beli Sekarang
                            </a>

                        </div>

                    </div>

                </div>
            </div>


            {{-- Product 2 --}}
            <div class="col-lg-4 col-md-6">
                <div class="product-card">

                    <div class="product-image">
                        <img src="{{ asset('img/image 5.png') }}"
                            class="img-fluid"
                            alt="Nama Produk 2">
                    </div>

                    <div class="product-body">

                        <small class="category">
                            KATEGORI
                        </small>

                        <h4>
                            Nama Produk 2
                        </h4>

                        <p>
                            Deskripsi singkat produk yang ditampilkan di sini.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <h3 class="price">
                                Rp 75.000
                            </h3>

                            <a href="#" class="btn-buy">
                                Beli Sekarang
                            </a>

                        </div>

                    </div>

                </div>
            </div>


            {{-- Product 3 --}}
            <div class="col-lg-4 col-md-6">
                <div class="product-card">

                    <div class="product-image">
                        <img src="{{ asset('img/image 5.png') }}"
                            class="img-fluid"
                            alt="Nama Produk 3">
                    </div>

                    <div class="product-body">

                        <small class="category">
                            KATEGORI
                        </small>

                        <h4>
                            Nama Produk 3
                        </h4>

                        <p>
                            Deskripsi singkat produk yang ditampilkan di sini.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <h3 class="price">
                                Rp 100.000
                            </h3>

                            <a href="#" class="btn-buy">
                                Beli Sekarang
                            </a>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- Marketplace --}}
        <div class="marketplace mt-5">

            <div>

                <h3>
                    Belanja via Shopee & Tokopedia
                </h3>

                <p>
                    Pengiriman ke seluruh Indonesia • Original • Bergaransi
                </p>

            </div>

            <div class="market-btn">

                <a href="#" class="btn-shopee">
                    <i class="bi bi-bag-fill"></i>
                    Shopee
                </a>

                <a href="#" class="btn-tokopedia">
                    <i class="bi bi-bag-fill"></i>
                    Tokopedia
                </a>

            </div>

        </div>

    </div>
</section>