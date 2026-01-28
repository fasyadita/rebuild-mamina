<style>
    /* Reset dasar agar tidak ada margin bawaan */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        /* Font standar yang bersih */
    }

    /* Styling Footer */
    .footer-container {
        background-color: #fbfbf2;
        /* Warna background cream/kuning pucat */
        color: #757575;
        /* Warna teks abu-abu tua */
        padding: 20px 40px;
        /* Jarak (padding) atas-bawah & kiri-kanan */
        display: flex;
        /* Mengatur tata letak menyamping */
        justify-content: space-between;
        /* Mendorong konten ke ujung kiri & kanan */
        align-items: center;
        /* Posisi vertikal di tengah */
        font-size: 12px;
        /* Ukuran font kecil sesuai gambar */
    }

    /* Link Copyright di kiri */
    .footer-left a {
        color: #757575;
        text-decoration: underline;
        /* Garis bawah */
    }

    /* Container Akun Sosmed di kanan */
    .footer-right {
        display: flex;
        gap: 30px;
        /* Jarak antar teks IG */
    }

    /* Membuat tampilan responsif (menumpuk saat di HP) */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .footer-right {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<footer class="footer-container">

    <div class="footer-left">
        2024&copy; <a href="#">mamina.id</a>
    </div>

    <div class="footer-right">
        <span>IG @maminaa_</span>
        <span>IG @mamina.kediri</span>
        <span>IG @konselormenyusui mamina</span>
        <span>IG @mamina.academy</span>
    </div>

</footer>