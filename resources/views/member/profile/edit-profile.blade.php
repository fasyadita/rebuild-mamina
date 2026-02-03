@extends('member.layouts.app')
@section('title', 'Edit Profile')

<style>
    /* --- Global Style --- */
    body {
        background-color: #FFFDEB;
        /* Cream Background */
        font-family: 'Nunito', sans-serif;
        color: #555;
        padding-bottom: 50px;
    }

    .profile-container {
        max-width: 1100px;
        margin: 140px auto;
        padding: 0 20px;
    }

    /* --- Judul Page --- */
    .page-title {
        color: #3fb6a8;
        /* Hijau Tosca */
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

    /* --- 1. CARD HEADER (PINK) --- */
    .profile-header-card {
        background-color: #ffdad1;
        /* Pink Salem */
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        position: relative;
    }

    /* Foto Profile */
    .profile-img-wrapper {
        position: relative;
        width: 100px;
        height: 100px;
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

    /* Info User */
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

    .btn-reset-pass {
        background-color: #3fb6a8;
        color: white;
        border: none;
        border-radius: 50px;
        padding: 5px 20px;
        font-size: 12px;
        font-weight: 600;
        margin-top: 10px;
        transition: 0.3s;
    }

    .btn-reset-pass:hover {
        background-color: #359c8f;
        color: white;
    }

    /* Bagian Kanan (Referral & Stats) */
    .referral-box {
        background: rgba(255, 255, 255, 0.5);
        padding: 5px 15px;
        border-radius: 10px;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
        float: right;
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
        padding: 10px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
        float: right;
        /* Posisi kanan */
    }

    .btn-simpan:hover {
        background-color: #359c8f;
        color: white;
        box-shadow: 0 4px 10px rgba(63, 182, 168, 0.3);
        transform: translateY(-2px);
    }

    /* Responsif */
    @media (max-width: 768px) {
        .form-label {
            margin-bottom: 5px;
            margin-top: 0;
        }

        .form-card {
            padding: 25px;
        }
    }
</style>
</head>

<body>

    <div class="profile-container">
        <div class="page-title">Profile Saya</div>

        <div class="profile-header-card">
            <div class="row align-items-center">

                <div class="col-md-auto text-center">
                    <div class="profile-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Profile" class="profile-img">
                        <div class="edit-icon-badge">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="user-name">Nadira Azzahra</div>
                    <div class="user-detail">nadira@gmail.com</div>
                    <div class="user-detail">081234567898</div>
                    <button class="btn btn-reset-pass">Reset Password</button>
                </div>

                <div class="col-md-auto mt-3 mt-md-0">
                    <div class="text-end text-center-mobile">
                        <div class="referral-box">
                            Kode Refeal : ABC123456
                            <i class="far fa-copy" style="cursor: pointer;"></i>
                        </div>

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
        </div>

        <div class="container">
            <div class="form-card">

                <h4 class="form-title">Data Pribadi</h4>
                <div class="divider"></div>

                <form action="#" method="POST">

                    <div class="row">

                        <div class="col-lg-6 pe-lg-5">
                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Nama <span class="required-star">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="nama" required>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">No. Hp <span class="required-star">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="no_hp" required>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Email <span class="required-star">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="custom-input" name="email" required>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="custom-input" name="alamat"></textarea>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Provinsi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="provinsi">
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Agama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="agama">
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6 ps-lg-4">
                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Kota</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="kota">
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Kecamatan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="kecamatan">
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Kelurahan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="kelurahan">
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="jenis_kelamin" list="genderList">
                                    <datalist id="genderList">
                                        <option value="Laki-laki">
                                        <option value="Perempuan">
                                    </datalist>
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Tgl Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="custom-input" name="tgl_lahir">
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Instagram</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="instagram">
                                </div>
                            </div>

                            <div class="row form-group-row">
                                <label class="col-sm-4 form-label">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="custom-input" name="pekerjaan">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12 text-end">
                                    <a href="/member/profile" class="btn-simpan">
                                        <i class="fas fa-check"></i> Simpan
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>