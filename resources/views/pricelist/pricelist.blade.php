@extends('layouts.app')

<div class="pricelist-wrapper">

    <!-- SIDEBAR -->
    <aside class="pricelist-sidebar">
        <h4>Pricelist</h4>
        <ul>
            <li>Outlet</li>
            <li>Malang</li>
            <li>Kediri</li>
        </ul>

        <h4 class="mt">Pricelist Homecare</h4>
        <ul>
            <li>Jabodetabek</li>
            <li>Luar Jabodetabek</li>
        </ul>
    </aside>

    <!-- CONTENT -->
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
    .pricelist-wrapper {
        display: flex;
        gap: 50px;
        margin-top: 95px;
        padding: 24px;
        background: #f3f3ea;
        min-height: calc(100vh - 90px);
    }

    /* SIDEBAR */
    .pricelist-sidebar {
        width: 240px;
        background: #efefe4;
        border-radius: 16px;
        padding: 20px;
    }

    .pricelist-sidebar h4 {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 12px;
        color: #3fb6a8;
    }

    .fp-iframe {
        width: 100%;
        height: 85vh;
        /* tinggi nyaman */
        border: none;
        border-radius: 12px;
    }

    .pricelist-sidebar ul {
        list-style: none;
        padding: 0;
        margin-bottom: 16px;
    }

    .pricelist-sidebar li {
        font-size: 14px;
        color: #333;
        margin-bottom: 6px;
        cursor: pointer;
    }

    .pricelist-sidebar li:hover {
        color: #3fb6a8;
    }

    .pricelist-sidebar .mt {
        margin-top: 20px;
    }

    /* CONTENT */
    .pricelist-content {
        flex: 1;
    }

    .pricelist-box {
        background: #f7f7ef;
        border-radius: 18px;
        padding: 24px;
        display: flex;
        justify-content: center;
    }

    .pricelist-box img {
        max-width: 735px;
        max-height: 1080px;
        border-radius: 12px;
    }
</style>