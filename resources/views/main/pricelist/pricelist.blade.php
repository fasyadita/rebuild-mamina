@extends('main.layouts.app')

<div class="pricelist-wrapper">

    <aside class="pricelist-sidebar">
        <div class="sidebar-group">
            <h4>Pricelist</h4>
            <ul>
                <li>Outlet</li>
                <li>Malang</li>
                <li>Kediri</li>
            </ul>
        </div>

        <div class="sidebar-group">
            <h4 class="mt">Pricelist Homecare</h4>
            <ul>
                <li>Jabodetabek</li>
                <li>Luar Jabodetabek</li>
            </ul>
        </div>
    </aside>

    <div class="pricelist-box">
        <iframe
            allowfullscreen
            allow="clipboard-write"
            scrolling="no"
            class="fp-iframe"
            src="https://heyzine.com/flip-book/c23c0066d7.html">
        </iframe>
    </div>

</div>

<style>
    * {
        box-sizing: border-box; /* Mencegah padding merusak ukuran elemen */
    }

    .pricelist-wrapper {
        display: flex;
        gap: 50px;
        margin-top: 95px;
        padding: 24px;
        background: #f3f3ea;
        min-height: calc(100vh - 90px);
        align-items: flex-start; /* PENTING: Agar sidebar tidak ikut memanjang ke bawah menyamai tinggi iframe */
    }

    /* SIDEBAR */
    .pricelist-sidebar {
        width: 240px;
        flex-shrink: 0; /* PENTING: Mencegah sidebar menyusut saat iframe butuh ruang */
        background: #efefe4;
        border-radius: 16px;
        padding: 20px;
    }

    .pricelist-sidebar h4 {
        font-size: 15px;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 12px;
        color: #3fb6a8;
    }

    .pricelist-sidebar .mt {
        margin-top: 20px;
    }

    .pricelist-sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
        margin-bottom: 16px;
    }

    .pricelist-sidebar li {
        font-size: 14px;
        color: #333;
        margin-bottom: 8px;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .pricelist-sidebar li:hover {
        color: #3fb6a8;
    }

    /* CONTENT */
    .pricelist-box {
        flex: 1; /* PENTING: Membuat kotak ini mengambil semua sisa ruang di kanan */
        width: 100%;
        background: #f7f7ef;
        border-radius: 18px;
        padding: 24px;
        display: flex;
        justify-content: center;
    }

    .fp-iframe {
        width: 100%;
        height: 85vh;
        border: none;
        border-radius: 12px;
        display: block; /* Menghilangkan gap misterius di bawah iframe */
    }

    /* --- RESPONSIF UNTUK LAYAR HP --- */
    @media (max-width: 768px) {
        .pricelist-wrapper {
            flex-direction: column; /* Mengubah susunan menjadi atas-bawah */
            gap: 20px;
            padding: 16px;
            margin-top: 80px; /* Jarak atas sedikit dikurangi untuk HP */
        }

        .pricelist-sidebar {
            width: 100%; /* Sidebar membentang penuh di atas */
            display: flex;
            flex-wrap: wrap; /* Memungkinkan isi sidebar berjejer menyamping */
            justify-content: space-between;
            gap: 10px;
        }

        .sidebar-group {
            flex: 1;
            min-width: 140px; /* Lebar minimal tiap grup menu */
        }

        .pricelist-sidebar .mt {
            margin-top: 0; /* Menghapus jarak atas karena sudah ada jarak antar grup */
        }

        .pricelist-box {
            padding: 12px; /* Mengurangi tebal kotak agar iframe lebih leluasa di HP */
        }

        .fp-iframe {
            height: 70vh; /* Tinggi flipbook sedikit dikurangi agar pas di layar HP */
        }
    }
</style>