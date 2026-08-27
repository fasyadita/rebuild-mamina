<style>
    .about-mamina {
        background: #FDF7ED;
    }

    .badge-about {
        display: inline-block;
        padding: 5px 14px;
        background: #d8f3ef;
        color: #4d908e;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 600;
    }

    .title {
        font-size: 32px;
        font-weight: 700;
        color: #ef8f8f;
        line-height: 1.2;
    }

    .title span {
        display: block;
        color: #4f9d9a;
    }

    .desc {
        color: #6d6d6d;
        margin: 14px 0 22px;
        line-height: 1.8;
        font-size: 14px;
    }

    .feature-card {
        background: #FFC6B5;
        border-radius: 16px;
        padding: 18px;
        height: 100%;
    }

    .feature-main {
        min-height: 140px;
    }

    .small-card {
        min-height: 150px;
        background: #DDF1EC;
    }

    .feature-card h5,
    .feature-card h6 {
        color: #55a7a0;
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .feature-card p {
        font-size: 13px;
        color: #666;
        margin-bottom: 0;
        line-height: 1.6;
    }

    .icon {
        font-size: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .service-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;

        padding: 14px;
        margin-bottom: 14px;

        background: #fff;
        border: 2px solid #5aa9a3;
        border-radius: 14px;
    }

    .service-icon {
        width: 50px;
        height: 50px;
        border: 2px solid #3D9F9E;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .service-item h6 {
        margin-bottom: 5px;
        font-weight: 700;
        color: #4b4b4b;
        font-size: 14px;
    }

    .service-item p {
        margin: 0;
        color: #666;
        line-height: 1.6;
        font-size: 13px;
    }

    .btn-service {
        display: inline-block;
        background: #5aa9a3;
        color: white;
        text-decoration: none;
        padding: 8px 18px;
        border-radius: 30px;
        transition: .3s;
        font-size: 13px;
        font-weight: 600;
    }

    .btn-service:hover {
        background: #4b9993;
        color: white;
    }
</style>

<section id="tentang" class="tentang-mamina py-4">
    <div class="max-w-6xl mx-auto">
        <div class="row align-items-center">

            {{-- Left --}}
            <div class="col-lg-5 mb-3 mb-lg-0">

                <div class="feature-card feature-main text-center">
                    <div class="icon mb-2">
                        💚
                    </div>

                    <h5>Gentle & Comforting</h5>

                    <p>
                        Layanan kami dirancang untuk memberikan kenyamanan nyata
                        bagi ibu dan buah hati — sesuai tagline
                        <strong>"Comforting You."</strong>
                    </p>
                </div>

                <div class="row mt-2 g-2">
                    <div class="col-6">
                        <div class="feature-card small-card text-center">
                            <div class="icon mb-2">
                                🏅
                            </div>

                            <h6>Terapis Bersertifikat</h6>

                            <p>
                                Prosedur standar, ditangani bidan &
                                terapis dengan sertifikasi resmi nasional.
                            </p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="feature-card small-card text-center">
                            <div class="icon mb-2">
                                📍
                            </div>

                            <h6>Terapis Bersertifikat</h6>

                            <p>
                                Prosedur standar, ditangani bidan &
                                terapis dengan sertifikasi resmi nasional.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Right --}}
            <div class="col-lg-7">
                <div class="flex items-center gap-2 mb-3">

                    <div class="w-6 h-6 rounded-full bg-[#CBF1E8]"></div>

                    <span
                        class="px-3 py-1 rounded-full
                bg-[#CBF1E8]
                text-[#3D9F9E]
                text-[12px]
                font-semibold
                uppercase
                tracking-widest">

                        TENTANG MAMINA

                    </span>

                </div>
                <h2 class="title mt-2">
                    Kenapa Bunda percaya
                    <span>Mamina?</span>
                </h2>

                <p class="desc">
                    Sejak 2016, Mamina hadir sebagai mitra terpercaya ibu hamil
                    hingga anak usia 7 tahun — dengan pendekatan gentle,
                    tenaga bersertifikat, dan ekosistem layanan yang lengkap.
                </p>

                <div class="service-item">
                    <div class="service-icon">
                        👩‍⚕️
                    </div>

                    <div>
                        <h6>Dukungan Laktasi Holistik</h6>

                        <p>
                            Konsultasi, pijat laktasi, dan kelas menyusui —
                            semua dalam satu ekosistem Mamina.
                        </p>
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-icon">
                        👶
                    </div>

                    <div>
                        <h6>Layanan 0–7 Tahun</h6>

                        <p>
                            Pijat bayi, baby spa, stimulasi tumbuh kembang —
                            untuk setiap fase si kecil.
                        </p>
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-icon">
                        🌐
                    </div>

                    <div>
                        <h6>Jangkauan Nasional</h6>

                        <p>
                            Dari Sabang sampai Merauke, mitra MaminaGO!
                            siap hadir ke depan pintu rumah Bunda.
                        </p>
                    </div>
                </div>

                <div class="text-end mt-3">
                    <a href="{{ route('tim-mamina') }}" class="btn-service">
                        Lihat Semua Terapis
                    </a>
                    <a href="{{ route('layanan.index') }}" class="btn-service">
                        Lihat Semua Layanan
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>