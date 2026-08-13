<style>
    .gentle-living {
        background: #FFFDF4;
    }

    .heading-circle {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #D9F2EC;
    }

    .heading-badge {
        background: #DDF5EF;
        padding: 10px 24px;
        border-radius: 30px;
        color: #4F9D9A;
        font-weight: 700;
    }

    .section-title {
        font-size: 58px;
        font-weight: 800;
        line-height: 1.2;
    }

    .section-title .pink {
        color: #E89A96;
    }

    .section-title .green {
        color: #4F9D9A;
    }

    .section-description {
        color: #777;
        font-size: 20px;
        max-width: 760px;
    }

    .living-card {
        background: linear-gradient(135deg, #E7F4FA, #F7EEF8);
        border-radius: 28px;
        padding: 35px;
        height: 100%;
        text-align: center;
    }

    .living-logo {
        width: 220px;
    }

    .living-card h4 {
        color: #4F9D9A;
        font-weight: 700;
    }

    .living-card p {
        color: #6f6f6f;
        margin-top: 15px;
    }

    .feature-box {
        background: white;
        border: 1px solid #C8E8E4;
        border-radius: 12px;
        padding: 18px;
        height: 100%;
    }

    .feature-box strong {
        display: block;
        color: #4F9D9A;
    }

    .feature-box small {
        color: #666;
    }

    .living-product {

        display: flex;
        align-items: center;
        gap: 20px;

        border: 2px solid #56A6A2;
        border-radius: 18px;

        background: #FFFDF5;

        padding: 18px;

        transition: .3s;
    }

    .living-product:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, .08);
    }

    .product-thumb {

        width: 58px;
        height: 58px;

        border-radius: 12px;
        background: #FFEFA3;
        object-fit: cover;
    }

    .living-product h5 {
        margin-bottom: 6px;
        font-weight: 700;
    }

    .living-product p {
        margin: 0;
        color: #666;
    }

    .product-price {

        min-width: 120px;
        text-align: right;

        color: #4F9D9A;
        font-weight: 700;
        font-size: 22px;
    }
</style>

<section id="gentle-living" class="gentle-living py-5">
    <div class="container">

        {{-- Heading --}}
        <div class="section-heading mb-5">

            <div class="d-flex align-items-center mb-3">
                <div class="heading-circle"></div>

                <span class="heading-badge ms-3">
                    GENTLE LIVING
                </span>
            </div>

            <h2 class="section-title">
                Hidup Lebih <span class="pink">Gentle,</span><br>
                Lebih <span class="green">Alami</span>
            </h2>

            <p class="section-description">
                Koleksi produk perawatan natural yang dikurasi khusus oleh tim
                Mamina — untuk ibu, bayi, dan keluarga yang memilih cara hidup
                lebih gentle.
            </p>

        </div>

        <div class="row g-4 align-items-stretch">

            {{-- Left Card --}}
            <div class="col-lg-5">

                <div class="living-card">

                    <img src="{{ asset('images/gentleliving-logo.png') }}" class="living-logo mb-3" alt="Gentle Living">

                    <h4>Gentle Living by Mamina</h4>

                    <p>
                        Alam menyediakan yang terbaik. Kami meraciknya
                        dengan penuh cinta untuk Bunda dan Si Kecil.
                    </p>

                    <div class="row g-3 mt-3">

                        <div class="col-6">
                            <div class="feature-box">
                                <strong>100% Natural</strong>
                                <small>Bebas bahan kimia</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="feature-box">
                                <strong>Derm Tested</strong>
                                <small>Aman kulit sensitif</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="feature-box">
                                <strong>Produk Lokal</strong>
                                <small>Made in Indonesia</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="feature-box">
                                <strong>Terdaftar BPOM</strong>
                                <small>Tersertifikasi resmi</small>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            {{-- Right Product List --}}

            <div>

                {{-- Product 1 --}}
                <div class="living-product mb-3">

                    <img src="{{ asset('assets/images/product-1.jpg') }}" alt="Nama Produk 1" class="product-thumb">

                    <div class="flex-grow-1">

                        <h5>Nama Produk 1</h5>

                        <p>Deskripsi singkat produk 1.</p>

                    </div>

                    <div class="product-price">
                        Rp 50.000
                    </div>

                </div>


                {{-- Product 2 --}}
                <div class="living-product mb-3">

                    <img src="{{ asset('assets/images/product-2.jpg') }}" alt="Nama Produk 2" class="product-thumb">

                    <div class="flex-grow-1">

                        <h5>Nama Produk 2</h5>

                        <p>Deskripsi singkat produk 2.</p>

                    </div>

                    <div class="product-price">
                        Rp 75.000
                    </div>

                </div>

                {{-- Product 3 --}}
                <div class="living-product mb-3">

                    <img src="{{ asset('assets/images/product-3.jpg') }}" alt="Nama Produk 3" class="product-thumb">

                    <div class="flex-grow-1">

                        <h5>Nama Produk 3</h5>

                        <p>Deskripsi singkat produk 3.</p>

                    </div>

                    <div class="product-price">
                        Rp 100.000
                    </div>

                </div>

            </div>


        </div>

    </div>
</section>