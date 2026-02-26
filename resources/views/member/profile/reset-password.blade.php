@extends('member.layouts.app')
@section('title', 'Edit Profile')

<style>
    html, body {
    margin: 0;
    padding: 0;
    background-color: #fffdeb !important;
}

    body {
        background-color: #FFFDEB;
        font-family: 'Nunito', sans-serif;
        color: #333;
    }

    * {
        box-sizing: border-box;
        /* Memastikan padding tidak merusak lebar elemen */
    }

    .profile-container {
        max-width: 1100px;
        margin: 140px auto 60px;
        /* Tambahkan margin bawah agar tidak mentok */
        padding: 0 20px;
    }

    .page-title {
        color: #3fb6a8;
        font-weight: 700;
        font-size: 24px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
    }

    .page-title::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #e0e0e0;
        margin-left: 20px;
    }

    .profile-header-card {
        background-color: #ffdad1;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        position: relative;
    }

    .referral-box {
        position: absolute;
        top: 14px;
        right: 40px;
        background: #ffffff;
        padding: 4px 10px;
        font-size: 11px;
        border-radius: 15px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        width: 200px !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        z-index: 10;
    }

    .profile-img-wrapper {
        position: relative;
        width: 100px;
        height: 100px;
        margin: 0 auto;
    }

    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #fff;
    }

    .edit-icon-badge {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #fff;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: #333;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }

    .user-name {
        font-weight: 700;
        font-size: 20px;
        margin-bottom: 2px;
        color: #4a4a4a;
    }

    .user-detail {
        font-size: 14px;
        color: #666;
        margin-bottom: 2px;
    }

    .stats-container {
        display: flex;
        gap: 15px;
        justify-content: flex-end;
    }

    .stat-box {
        background-color: #e0e0e0;
        /* Abu-abu sesuai gambar */
        border-radius: 12px;
        padding: 10px 20px;
        text-align: center;
        min-width: 100px;
    }

    .stat-label {
        font-size: 12px;
        color: #777;
        margin-bottom: 0;
    }

    .stat-value {
        font-weight: 600;
        font-size: 14px;
        color: #333;
    }

    .container {
        max-width: 1100px;
        margin-top: 50px;
    }

    /* --- Card Wrapper --- */
    .form-card {
        background-color: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: none;
        position: relative;
    }

    /* --- Judul Section --- */
    .form-title {
        color: #3fb6a8;
        /* Hijau Tosca */
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .divider {
        border-top: 1px solid #e0e0e0;
        margin-bottom: 30px;
    }

    /* --- Styling Input Form --- */
    .form-label {
        font-weight: 500;
        font-size: 15px;
        color: #444;
        margin-top: 8px;
        /* Agar sejajar vertikal dengan input */
    }

    .required-star {
        color: #ff6b6b;
        margin-left: 2px;
    }

    /* Input Box (Pink Background & Rounded) */
    .custom-input {
        background-color: #fceeee;
        /* Pink sangat muda */
        border: 1px solid #f0dada;
        border-radius: 50px;
        /* Membuat lonjong/pill shape */
        padding: 10px 20px;
        font-size: 14px;
        color: #555;
        width: 100%;
        transition: all 0.3s;
    }

    .custom-input:focus {
        background-color: #fff;
        border-color: #3fb6a8;
        box-shadow: 0 0 0 3px rgba(63, 182, 168, 0.1);
        outline: none;
    }

    /* Khusus Textarea (Alamat) */
    textarea.custom-input {
        border-radius: 20px;
        /* Lengkungan sudut lebih kecil untuk kotak besar */
        height: 120px;
        resize: none;
    }

    /* Jarak antar baris form */
    .form-group-row {
        margin-bottom: 20px;
    }

    /* --- Tombol Simpan --- */
    .btn-simpan {
        background-color: #3fb6a8;
        color: white;
        border: none;
        padding: 6px 18px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 12px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
        position: absolute;
        right: 30px;
        bottom: 20px;
    }

    .btn-simpan:hover {
        background-color: #359c8f;
        color: white;
        box-shadow: 0 4px 10px rgba(63, 182, 168, 0.25);
        transform: translateY(-2px);
    }

    /* --- RESPONSIVE UNTUK LAYAR HP --- */
    @media (max-width: 768px) {
        .profile-container {
            margin-top: 100px;
            /* Kurangi jarak atas di HP */
        }

        .profile-header-card {
            padding: 20px;
            text-align: center;
        }

        /* Mengubah posisi Kotak Referral di HP agar tidak melayang / numpuk */
        .referral-box {
            position: relative;
            top: 0;
            right: 0;
            margin: 0 auto 20px auto;
        }

        .stats-container {
            justify-content: center;
            /* Menengahkan kotak Point dan Level di HP */
            width: 100%;
        }

        .data-card {
            padding: 20px;
        }

        .data-header {
            flex-direction: column;
            /* Menyusun Judul dan Tombol Edit Profil ke bawah */
            align-items: flex-start;
        }

        .data-value {
            font-size: 14px;
            /* Teks sedikit dikecilkan di HP */
        }
    }
</style>
</head>

<body>

    <div class="profile-container">
        <div class="page-title">Profile Saya</div>

        <div class="profile-header-card">
            <div class="row align-items-center">

                <div class="referral-box">
                    Kode Referral :
                    <span id="kodeReferral">ABC123456</span>
                    <i class="far fa-copy" style="cursor: pointer;" onclick="salinReferral()"></i>
                </div>

                <div class="col-md-auto text-center">
                    <div class="profile-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Profile" class="profile-img">
                        <div class="edit-icon-badge">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md text-center text-md-start mt-3 mt-md-0">
                    <div class="user-name">Nadira Azzahra</div>
                    <div class="user-detail">nadira@gmail.com</div>
                    <div class="user-detail mb-3">081234567898</div>
                </div>

                <div class="col-md-auto mt-4 mt-md-0">
                    <div class="stats-container">
                        <div class="stat-box">
                            <div class="stat-label">Level</div>
                            <div class="stat-value">Newborn</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-label">Point</div>
                            <div class="stat-value">0</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="form-card">

                <h4 class="form-title">Reset Password</h4>
                <div class="divider"></div>

                <form action="#" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-lg-6 pe-lg-5">
                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Password Lama <span class="required-star">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="custom-input" name="current_password" required>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Password Baru <span class="required-star">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="custom-input" name="password" required>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Konfirmasi Password <span class="required-star">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="custom-input" name="password_confirmation" required>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6 ps-lg-4">

                            <div class="row mt-5">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn-simpan">
                                        <i class="fas fa-check"></i> Ubah Password
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>