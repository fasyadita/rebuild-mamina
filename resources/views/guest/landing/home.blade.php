    <style>

        /* Kotak Pink Pembungkus (seperti di gambar) */
        .slider-container {
            background-color: #ffe4d6;
            /* Warna pink soft */
            padding: 40px;
            border-radius: 20px;
            /* Sudut melengkung */
            width: 80%;
            max-width: 800px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-top : 140px ;
            margin-left: 270px;
        }

        /* Area Gambar */
        .slider-wrapper {
            width: 100%;
            text-align: center;
            overflow: hidden;
            /* Agar gambar tidak bocor keluar */
        }

        /* Gambar itu sendiri */
        .slide-image {
            width: 100%;
            max-width: 500px;
            /* Batas lebar gambar */
            border-radius: 10px;
            display: none;
            /* Sembunyikan semua gambar dulu */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: fadeEffect 0.5s;
            /* Efek transisi halus */
        }

        /* Gambar yang sedang aktif (ditampilkan) */
        .active {
            display: inline-block;
        }

        /* Tombol Panah (Kiri & Kanan) */
        .tombol {
            background: none;
            border: none;
            font-size: 30px;
            color: #555;
            cursor: pointer;
            padding: 10px;
            transition: 0.3s;
        }

        .tombol:hover {
            color: #000;
            transform: scale(1.2);
            /* Membesar sedikit saat di-hover */
        }

        /* Efek kedip halus saat ganti gambar */
        @keyframes fadeEffect {
            from {
                opacity: 0.4
            }

            to {
                opacity: 1
            }
        }
    </style>

    <div id="home" class="slider-container">

        <button class="tombol" onclick="gantiSlide(-1)">&#10094;</button>

        <div class="slider-wrapper">
            <img src="{{ asset('img/spons.jpg') }}" class="slide-image active">
            <img src="{{ asset('img/ghost.jpg') }}" class="slide-image">
            <img src="{{ asset('img/disney.jpg') }}" class="slide-image">
        </div>

        <button class="tombol" onclick="gantiSlide(1)">&#10095;</button>

    </div>
    <script>
        let indexSekarang = 0; // Mulai dari gambar pertama (urutan 0)
        const gambar = document.getElementsByClassName("slide-image");

        function gantiSlide(arah) {
            // Hilangkan gambar yang sedang tampil
            gambar[indexSekarang].classList.remove("active");

            // Hitung urutan gambar baru
            indexSekarang = indexSekarang + arah;

            // Logika putar balik (Looping)
            if (indexSekarang >= gambar.length) {
                indexSekarang = 0; // Kalau sudah di akhir, balik ke awal
            } else if (indexSekarang < 0) {
                indexSekarang = gambar.length - 1; // Kalau di awal klik kiri, ke akhir
            }

            // Munculkan gambar baru
            gambar[indexSekarang].classList.add("active");
        }
    </script>