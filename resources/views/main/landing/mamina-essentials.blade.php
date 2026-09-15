<style>
    /* ==============================
       PRODUCT SECTION
    ============================== */

    .product-section {
        padding: 50px 0 !important;
        background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
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
        font-family: 'fredoka', sans-serif;
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
        font-family: 'nunito', sans-serif;
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
        font-family: 'fredoka', sans-serif;
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
        font-family: 'nunito', sans-serif;
    }


    /* Price */
    .product-body .price {
        font-size: 17px;
        font-weight: 700;
        color: #4F9D9A;
        margin: 0;
        font-family: 'nunito', sans-serif;
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
        font-family: 'nunito', sans-serif;
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
        font-family: 'fredoka', sans-serif;
    }

    .marketplace p {
        margin: 0;
        color: #777;
        font-size: 11px;
        font-family: 'nunito', sans-serif;
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
        font-size: 13px;
        font-weight: 600;

        transition: 0.3s;
        font-family: 'nunito', sans-serif;  
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
    <div class="max-w-6xl mx-auto py-6 px-4">

        {{-- Heading --}}
        <div class="section-header mb-5">

            <div class="flex items-center gap-2 mb-3">

                <div class="w-6 h-6 rounded-full bg-[#FFC6B5]"></div>

                <span
                    class="px-3 py-1 rounded-full
                bg-[#FFC6B5]
                text-[#B5706C]
                text-[12px]
                font-semibold
                uppercase
                tracking-widest">

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

            <p class="section-desc">
                Koleksi produk perawatan natural yang
                dikurasi khusus oleh tim Mamina —
                untuk ibu, bayi, dan keluarga yang
                memilih cara hidup lebih gentle.
            </p>

        </div>

        {{-- Product --}}
        <div class="row g-3 justify-content-center">

            {{-- Product 1 --}}
            <div class="col-lg-4 col-md-6">
                <div class="product-card">

                    <div class="product-image">
                        <img src="{{ asset('img/cnf.jpeg') }}"
                            class="img-fluid"
                            alt="Nama Produk 1">
                    </div>

                    <div class="product-body">

                        

                        <h4>
                            Gentle Baby Cough n Flu
                        </h4>

                        <p>
                            Minyak bayi yang memberi rasa hangat dan membantu melegakan pernapasan saat batuk dan flu.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <h3 class="price">
                                Mulai dari Rp 38.500
                            </h3>

                            <a href="https://gentleliving.id/product/26" class="btn-buy">
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
                        <img src="{{ asset('img/ds.jpeg') }}"
                            class="img-fluid"
                            alt="Nama Produk 2">
                    </div>

                    <div class="product-body">

                        <h4>
                            Gentle Baby Deep Sleep
                        </h4>

                        <p>
                            Minyak bayi alami membantu menenangkan si kecil, mengurangi rewel, dan membuat tidur lebih nyenyak.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <h3 class="price">
                                Mulai dari Rp 38.500
                            </h3>

                            <a href="https://gentleliving.id/product/27" class="btn-buy">
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
                        <img src="{{ asset('img/tc.jpeg') }}"
                            class="img-fluid"
                            alt="Nama Produk 3">
                    </div>

                    <div class="product-body">

                        

                        <h4>
                            Gentle Baby Tummy Calmer
                        </h4>

                        <p>
                            Minyak bayi yang memberi rasa hangat untuk membantu meredakan kembung, gas berlebih, dan kolik pada si kecil.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <h3 class="price">
                                Mulai dari Rp 38.500
                            </h3>

                            <a href="https://gentleliving.id/product/29" class="btn-buy">
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

                <a href="https://shopee.co.id/gentleliving_id?is_from_login=true" class="btn-shopee">
                    <i class="bi bi-bag-fill"></i>
                    Shopee
                </a>

                <a href="https://www.tokopedia.com/gentlebabyid" class="btn-tokopedia">
                    <i class="bi bi-bag-fill"></i>
                    Tokopedia
                </a>

            </div>

        </div>

    </div>
</section>