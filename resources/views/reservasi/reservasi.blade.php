@extends('layouts.app')

<section id="reservasi" class="reservasi-section">
    <div class="container">
        <div class="reservasi-card">

            <h2 class="reservasi-title">Reservasi Treatment Mamina</h2>

            <form action="#" class="reservasi-form">
                <div class="form-group">
                    <select class="form-select custom-dropdown" required>
                        <option value="" selected disabled>Pilih reservasi</option>
                        <option value="baby-spa">Baby Spa</option>
                        <option value="pijat-laktasi">Pijat Laktasi</option>
                        <option value="kids-treatment">Kids Treatment</option>
                        <option value="home-care">Home Care</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-select custom-dropdown" required>
                        <option value="" selected disabled>Pilih Outlet</option>
                        <option value="malang">Malang</option>
                        <option value="surabaya">Surabaya</option>
                        <option value="sidoarjo">Sidoarjo</option>
                        <option value="jember">Jember</option>
                    </select>
                </div>
                    <div class="btn-wrapper">
                        <button type="submit" class="btn-next">Next</button>
                    </div>
            </form>

        </div>
    </div>
</section>

<style>
    /* 1. Container Utama */
    .reservasi-section {
        padding: 60px 20px;
        background-color: #fffaf3;
        /* Cream Background (sama dengan section lain) */
        display: flex;
        justify-content: center;
        margin-top: 90px;
    }

    /* 2. Kartu Hijau Mint */
    .reservasi-card {
        background-color: #d0f0e4;
        /* Warna Mint Pastel */
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        /* Bayangan lembut */
        width: 100%;
        max-width: 900px;
        /* Lebar maksimal agar tidak terlalu lebar di layar besar */
        margin: 0 auto;
    }

    /* 3. Judul Pink */
    .reservasi-title {
        text-align: center;
        font-family: 'Fredoka', sans-serif;
        /* Pastikan font ini sudah di-load */
        font-size: 28px;
        font-weight: 600;
        color: #ff9a8c;
        /* Pink Salmon lembut */
        margin-bottom: 40px;
    }

    /* 4. Styling Dropdown (Select) */
    .form-group {
        position: relative;
        margin-bottom: 40px;
        border-radius: 50%;
    }

    .custom-dropdown {
        width: 100%;
        padding: 15px 25px;
        font-size: 16px;
        color: #666;
        background-color: white;
        border: none;
        border-radius: 30px;
        /* Membuat bentuk Pill/Lonjong */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        appearance: none;
        /* Menghilangkan panah bawaan browser jelek */
        cursor: pointer;
        font-family: 'Nunito', sans-serif;
        /* Opsional: sesuaikan font body */
    }

    .custom-dropdown:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(61, 159, 158, 0.2);
        /* Efek glow saat diklik */
    }

    /* 5. Tombol Next */
    .btn-wrapper {
        display: flex;
        justify-content: flex-start;
        /* Posisi Kiri */
    }

    .btn-next {
        background-color: #3ea898;
        /* Warna Tosca Gelap */
        color: white;
        font-family: sans-serif;
        font-weight: 600;
        font-size: 14px;
        padding: 12px 40px;
        border: none;
        border-radius: 50px;
        /* Bentuk Pill */
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(62, 168, 152, 0.3);
        transition: background-color 0.3s;
    }

    .btn-next:hover {
        background-color: #2e8578;
        /* Gelap sedikit saat di-hover */
    }

    /* Responsif untuk HP */
    @media (max-width: 768px) {
        .reservasi-card {
            padding: 30px 20px;
        }

        .reservasi-title {
            font-size: 24px;
        }
    }
</style>