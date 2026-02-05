<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .slider-container {
        max-width: 1000px;
        margin: 150px auto;
    }

    .swiper-slide {
        width: 100%;
        height: 100%;
        background: #fff;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transition: all 0.4s ease;
        transform: scale(0.85);
        opacity: 0.6;
        filter: blur(2px) grayscale(20%);
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide.swiper-slide-active {
        transform: scale(1.1);
        opacity: 1;
        filter: blur(0) grayscale(0);
        z-index: 10;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

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
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            spaceBetween: 30,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    });
</script>