<style>

    .footer-container {
        background-color: #FFFDEB;
        color: #757575;
        padding: 20px 40px;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
    }

    .footer-left a {
        color: #757575;
        text-decoration: underline;
    }

    .footer-right {
        display: flex;
        gap: 30px;
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