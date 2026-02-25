<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>

    .slider-container {
        max-width: 1000px;
        margin: 150px auto;
        background-color: #FFFDEB;
    }

    /* --- Styling Card Slider --- */
    .swiper-slide {
        width: 100%;
        height: 100%;
        background: #fff;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;

        /* TRANSISI & EFEK NON-AKTIF (SAMPING) */
        transition: all 0.4s ease;
        transform: scale(0.85);
        /* Mengecil */
        opacity: 0.6;
        /* Pudar */
        filter: blur(2px) grayscale(20%);
        /* Blur & agak abu */
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Gambar full memenuhi kotak */
    }

    /* --- KONDISI AKTIF (TENGAH) --- */
    .swiper-slide.swiper-slide-active {
        transform: scale(1.1);
        /* Zoom In */
        opacity: 1;
        /* Jelas */
        filter: blur(0) grayscale(0);
        /* Tajam */
        z-index: 10;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        /* Bayangan biar pop-up */
    }

    /* --- Navigasi Panah --- */
    .swiper-button-next,
    .swiper-button-prev {
        color: #555;
        background: rgba(255, 255, 255, 0.7);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        backdrop-filter: blur(4px);
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 18px;
        font-weight: bold;
    }
</style>

<div id="home" class="slider-section">
    <div class="slider-container">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="{{ asset('img/banner1.png') }}" alt="Produk 1">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('img/benner2.png') }}" alt="Produk 2">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('img/banner3.png') }}" alt="Produk 3">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('img/banner4.png') }}" alt="Produk 4">
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <div class="swiper-pagination"></div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true, // PENTING: Agar fokus di tengah
            slidesPerView: "auto", // PENTING: Agar lebar mengikuti CSS
            loop: true, // Infinite scroll
            spaceBetween: 30, // Jarak antar slide

            autoplay: {
                delay: 3000,                // 5000ms = 5 detik
                disableOnInteraction: false, // Tetap jalan walau sudah digeser manual user
                pauseOnMouseEnter: true,     // (Opsional) Berhenti pas kursor nempel (biar user bisa baca)
            },

            // Konfigurasi Efek 3D/Zoom
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false, // Matikan shadow bawaan krn kita pakai CSS
            },

            // Navigasi
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // (Opsional) Titik navigasi bawah
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    });
</script>