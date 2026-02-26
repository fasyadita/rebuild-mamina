<footer class="footer-container">

    <div class="footer-left">
        2024 &copy; <a href="#">mamina.id</a>
    </div>

    <div class="footer-right">
        <span>
            <i class="fab fa-instagram"></i> @maminaa_
        </span>
        <span>
            <i class="fab fa-instagram"></i> @mamina.kediri
        </span>
        <span>
            <i class="fab fa-instagram"></i> @konselormenyusui.mamina
        </span>
        <span>
            <i class="fab fa-instagram"></i> @mamina.academy
        </span>
    </div>

</footer>
<style>
    .footer-container {
        background-color: #FFFDEB;
        color: #757575;
        padding: 30px 50px; /* Padding lebih luas agar nafas desain lebih lega */
        
        /* KOREKSI UTAMA: Tambahkan display flex */
        display: flex; 
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        font-family: 'Nunito', sans-serif;
        border-top: 1px solid rgba(0,0,0,0.05); /* Garis tipis pembatas */
    }

    .footer-left a {
        color: #757575;
        text-decoration: none; /* Hilangkan underline agar lebih modern */
        font-weight: 600;
    }

    .footer-left a:hover {
        color: #4db6ac; /* Warna tosca saat hover */
    }

    .footer-right {
        display: flex;
        gap: 20px;
        flex-wrap: wrap; /* Agar jika teks IG kepanjangan, otomatis turun rapi */
        justify-content: center;
    }

    .footer-right span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Responsif Mobile */
    @media (max-width: 992px) {
        .footer-container {
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 20px;
        }

        .footer-right {
            gap: 10px 20px; /* Jarak antar item IG */
        }
    }
</style>