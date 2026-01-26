<footer class="mamina-footer">
    <div class="container">
        
        <div class="footer-row">
            
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimommy</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Cabang</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Extra Links</h4>
                <ul>
                    <li><a href="#">Kenali Tim Mamina</a></li>
                    <li><a href="#">Join Member</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Lokasi</h4>
                <ul>
                    <li><a href="#">Malang</a></li>
                    <li><a href="#">Kediri</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Kontak Info</h4>
                <ul>
                    <li><a href="#">0812-3456-7890</a></li>
                    <li><a href="#">admin@mamina.id</a></li>
                    <li><a href="#">ig : @maminaa_</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-copyright">
            <p>Created by Mamina | All rights reserved</p>
        </div>

    </div>
</footer>

<style>
    /* 1. Container Utama Footer */
    .mamina-footer {
        background-color: #e6f7f4; /* Warna Mint Pastel Lembut */
        padding: 60px 20px 30px 20px;
        font-family: sans-serif;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* 2. Grid Layout untuk 4 Kolom */
    .footer-row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap; /* Agar responsif turun ke bawah */
        gap: 40px;
        margin-bottom: 40px;
    }

    /* 3. Styling Judul Kolom (h4) */
    .footer-col h4 {
        font-family: 'Fredoka', sans-serif; /* Font bulat lucu */
        font-size: 18px;
        color: #333;
        margin-bottom: 20px;
        font-weight: 600;
    }

    /* 4. Styling List Link */
    .footer-col ul {
        list-style: none; /* Hilangkan titik bullet */
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 12px;
    }

    .footer-col ul li a {
        text-decoration: none;
        color: #666; /* Abu-abu tua */
        font-size: 14px;
        transition: color 0.3s ease;
    }

    /* Efek Hover (Warna berubah saat mouse mendekat) */
    .footer-col ul li a:hover {
        color: #3fb6a8; /* Hijau Tosca Mamina */
    }

    /* 5. Bagian Copyright (Garis Bawah) */
    .footer-copyright {
        border-top: 1px solid #ccece6; /* Garis pemisah tipis */
        padding-top: 25px;
        text-align: center;
    }

    .footer-copyright p {
        font-size: 14px;
        color: #777;
        margin: 0;
    }

    /* --- Responsif (Tampilan HP) --- */
    @media (max-width: 768px) {
        .footer-row {
            flex-direction: column; /* Kolom jadi turun ke bawah */
            gap: 30px;
            text-align: center; /* Teks jadi rata tengah di HP */
        }
    }
</style>