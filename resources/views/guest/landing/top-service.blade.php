<style>
    .favorite-section {
        background-color: #d1f2eb;
        border-radius: 30px;
        padding: 40px 50px;
        position: relative;
        margin: 40px auto;
        max-width: 1200px;
    }

    .section-title {
        color: #fca5a5;
        font-weight: bold;
        text-align: center;
        font-size: 24px;
        margin-bottom: 30px;
    }

    .product-card {
        border: none;
        background: transparent;
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease;
        cursor: pointer;
        margin-bottom: 15px;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .product-info {
        background-color: #ffdad6;
        padding: 15px 10px;
        text-align: center;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        color: #444;
    }

    .product-name {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .product-price {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-details {
        font-size: 11px;
        color: #666;
    }

    .nav-arrow-right {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        color: #555;
        cursor: pointer;
        opacity: 0.6;
    }

    .nav-arrow-right:hover {
        opacity: 1;
    }

    .btn-tambah {
        background: #4FA8A6;
        color: #fff;
        border: none;
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 12px;
        cursor: pointer;
        margin-top: 10px;
    }

    .btn-tambah:hover {
        background: #3b7d7b;
    }

    @media (max-width: 768px) {
        .favorite-section {
            padding: 30px 20px;
            border-radius: 15px;
        }

        .nav-arrow-right {
            display: none;
            /* Hilangkan panah di HP */
        }
    }
</style>

<div id="top-service" class="container">
    <div class="favorite-section">

        <h3 class="section-title">Paling disukai, nih</h3>

        <div class="row g-4">
            <div class="col-6 col-lg-3">
                <div class="product-card">
                    <img src="{{ asset('img/baby.jpeg') }}" class="product-img" alt="Pijat Bayi">
                    <div class="product-info">
                        <div class="product-name">Pijat Bayi</div>
                        <div class="product-price">Rp 88.000</div>
                        <div class="product-details">
                            4050+ suka<br>
                            Cabang Malang
                        </div>
                        <button class="btn-tambah">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="product-card">
                    <img src="{{ asset('img/baby.jpeg') }}" class="product-img" alt="Pijat Bayi">
                    <div class="product-info">
                        <div class="product-name">Pijat Bayi</div>
                        <div class="product-price">Rp 88.000</div>
                        <div class="product-details">
                            4050+ suka<br>
                            Cabang Malang
                        </div>
                        <button class="btn-tambah">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="product-card">
                    <img src="{{ asset('img/baby.jpeg') }}" class="product-img" alt="Pijat Bayi">
                    <div class="product-info">
                        <div class="product-name">Pijat Bayi</div>
                        <div class="product-price">Rp 88.000</div>
                        <div class="product-details">
                            4050+ suka<br>
                            Cabang Malang
                        </div>
                        <button class="btn-tambah">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="product-card">
                    <img src="{{ asset('img/baby.jpeg') }}" class="product-img" alt="Pijat Bayi">
                    <div class="product-info">
                        <div class="product-name">Pijat Bayi</div>
                        <div class="product-price">Rp 88.000</div>
                        <div class="product-details">
                            4050+ suka<br>
                            Cabang Malang
                        </div>
                        <button class="btn-tambah">
                            <i class="fas fa-plus"></i> Tambah
                    </div>
                </div>
            </div>

        </div> <i class="fas fa-chevron-right nav-arrow-right"></i>

    </div>
</div>