<style>
.product-section{
    background:#FFFDF4;
}

.circle{
    width:46px;
    height:46px;
    border-radius:50%;
    background:#FFDCD6;
}

.section-badge{
    background:#FFE0DA;
    color:#d58b87;
    padding:12px 24px;
    border-radius:30px;
    font-weight:700;
    font-size:14px;
}

.section-title{
    font-size:64px;
    font-weight:800;
    line-height:1.1;
    color:#E59A94;
    margin-bottom:20px;
}

.section-title span{
    color:#4F9D9A;
}

.section-desc{
    max-width:760px;
    color:#777;
    font-size:24px;
    line-height:1.7;
}

.product-card{
    background:#fff;
    border-radius:35px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(173,190,107,.18);
    transition:.3s;
    height:100%;
}

.product-card:hover{
    transform:translateY(-8px);
}

.product-image img{
    width:100%;
    display:block;
}

.product-body{
    padding:28px;
}

.category{
    color:#888;
    letter-spacing:1px;
    text-transform:uppercase;
}

.product-body h4{
    font-size:34px;
    font-weight:700;
    margin:8px 0;
}

.product-body p{
    color:#777;
    line-height:1.8;
    min-height:75px;
}

.price{
    color:#4F9D9A;
    font-size:38px;
    font-weight:700;
    margin:0;
}

.btn-buy{
    padding:12px 24px;
    background:#5EA7A5;
    color:#fff;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
}

.btn-buy:hover{
    color:#fff;
    background:#4a9794;
}

.marketplace{
    background:#fff;
    border-radius:35px;
    padding:28px 35px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 15px 35px rgba(173,190,107,.15);
}

.marketplace h3{
    color:#E59A94;
    font-weight:700;
    margin-bottom:8px;
}

.marketplace p{
    color:#888;
    margin:0;
}

.market-btn{
    display:flex;
    gap:15px;
}

.btn-shopee,
.btn-tokopedia{
    padding:12px 24px;
    border-radius:30px;
    color:white;
    text-decoration:none;
    font-weight:600;
}

.btn-shopee{
    background:#58A8A7;
}

.btn-tokopedia{
    background:#E8A2A0;
}

.btn-shopee:hover,
.btn-tokopedia:hover{
    color:#fff;
}    .product-section {
    padding: 80px 0;
    background: #fff;
    position: relative;
}

.section-header .circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ef8f8f;
    border: 3px solid #fff;
    box-shadow: 0 0 15px rgba(239, 143, 143, 0.3);
}

.section-badge {
    display: inline-block;
    padding: 6px 22px;
    background: #ef8f8f;
    color: white;
    border-radius: 30px;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.section-title {
    font-size: 42px;
    font-weight: 700;
    color: #4a3b4a;
    margin-top: 18px;
}

.section-title span {
    color: #ef8f8f;
}

.section-desc {
    max-width: 700px;
    color: #555;
    margin-top: 12px;
}

.product-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 5px 18px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: 0.3s;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}

.product-image img {
    width: 100%;
    height: 260px;
    object-fit: cover;
}

.product-body {
    padding: 20px;
}

.product-body small.category {
    color: #ef8f8f;
    font-size: 13px;
    font-weight: 600;
}

.product-body h4 {
    margin: 10px 0;
    font-size: 18px;
    font-weight: 700;
    color: #4a3b4a;
}

.product-body p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-body .price {
    font-size: 20px;
    font-weight: 700;
    color: #ef8f8f;
}

.btn-buy {
    display: inline-block;
    background: #ef8f8f;
    color: white;
    padding: 8px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-buy:hover {
    background: #d97373;
    color: white;
}

.marketplace {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
    background: #FFF6E5;
    padding: 28px 35px;
    border-radius: 20px;
    margin-top: 50px;
}

.marketplace h3 {
    font-size: 20px;
    font-weight: 700;
    color: #4a3b4a;
}

.marketplace p {
    margin: 5px 0 0;
    color: #666;
    font-size: 14px;
}

.market-btn {
    display: flex;
    gap: 15px;
}

.btn-shopee,
.btn-tokopedia {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 25px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s;
}

.btn-shopee {
    background: #FF5722;
    color: white;
}

.btn-tokopedia {
    background: #00B140;
    color: white;
}

.btn-shopee:hover {
    background: #e64a19;
}

.btn-tokopedia:hover {
    background: #009d35;
}

@media(max-width:992px){
    .marketplace{
        flex-direction:column;
        align-items:stretch;
        text-align:center;
    }
    .market-btn{
        justify-content:center;
    }
    .section-title{
        font-size:32px;
    }
}
</style>
<section id="essentials" class="product-section py-5">
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
<div class="row g-4">

    {{-- Product 1 --}}
    <div class="col-lg-4 col-md-6">
        <div class="product-card">

            <div class="product-image">
                <img src="{{ asset('assets/images/product-1.jpg') }}"
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
                <img src="{{ asset('assets/images/product-2.jpg') }}"
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
                <img src="{{ asset('assets/images/product-3.jpg') }}"
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