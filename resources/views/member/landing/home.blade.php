<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    html, body {
    margin: 0;
    padding: 0;
    background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
}
    /* Section Utama */
    .slider-section {
        background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
        padding: 30px 20px;
        display: flex;
        justify-content: center;
        overflow: hidden;
    }

    .slider-container {
        width: 100%;
        max-width: 1100px; 
    }

    /* Wrapper Background Pink */
    /* .banner-wrapper {
        background-color: #FCE8E2; 
        border-radius: 20px;
        padding: 60px 0; 
        position: relative;
    } */

    .swiper {
        width: 100%;
        padding: 40px 0; /* Memberi ruang untuk scale dan shadow agar tidak terpotong */
    }

    /* Gaya Slide Default (Samping/Buram) */
    .swiper-slide {
        width: auto; 
        max-width: 800px;
        transition: all 0.6s ease-in-out; /* Transisi lebih halus */
        filter: blur(8px);
        opacity: 0.5;
        transform: scale(0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1; /* Slide samping berada di layer bawah */
    }

    .swiper-slide img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 20px;
        display: block;
        backface-visibility: hidden; /* Mencegah getaran saat animasi */
    }

    /* KUNCI: Slide Aktif (Tengah/Pop Up) */
    .swiper-slide.swiper-slide-active {
        filter: blur(0);
        opacity: 1;
        transform: scale(1.05); /* Efek pop up lebih terasa */
        z-index: 10 !important; /* Paksa agar selalu di depan saat Next maupun Prev */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    /* Responsif Mobile */
    @media (max-width: 768px) {
        .swiper-slide { width: 85%; }
        .banner-wrapper { padding: 40px 0; }
        .swiper-slide.swiper-slide-active { transform: scale(1.03); }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1.5,
            centeredSlides: true,
            spaceBetween: -80,
            loop: true,
            grabCursor: true,
            speed: 800,
            slideToClickedSlide: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
</script>