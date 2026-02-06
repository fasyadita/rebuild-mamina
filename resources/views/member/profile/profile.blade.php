@extends('member.layouts.app')
<style>
    body {
        background-color: #FFFDEB;
        /* Cream Background */
        font-family: 'Nunito', sans-serif;
        color: #333;
    }

    .profile-container {
        max-width: 1100px;
        margin: 140px auto;
        padding: 0 20px;
    }

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

    .profile-header-card {
        background-color: #ffdad1;
        /* Pink Salem */
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        position: relative;
    }

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
        padding: 6px 20px;
        margin-top: 10px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-reset-pass:hover {
        background-color: #359c8f;
        color: white;
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
        gap: 6px;
        width: 200px !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
    }

    .stats-container {
        display: flex;
        gap: 15px;
        justify-content: flex-end;
    }

    .stat-box {
        background-color: #e0e0e0;
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

    .data-card {
        background-color: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .data-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }

    .section-title {
        color: #3fb6a8;
        font-weight: 600;
        font-size: 18px;
        margin: 0;
    }

    .btn-edit-profile {
        background-color: #3fb6a8;
        color: white;
        border: none;
        border-radius: 50px;
        padding: 6px 20px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
    }

    .btn-edit-profile:hover {
        background-color: #359c8f;
        color: white;
    }

    .data-label {
        font-size: 13px;
        color: #888;
        margin-bottom: 4px;
    }

    .data-value {
        font-size: 15px;
        color: #333;
        font-weight: 500;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .profile-header-card {
            text-align: center;
        }

        .profile-img-wrapper {
            margin: 0 auto 15px auto;
        }

        .stats-container {
            justify-content: center;
            margin-top: 20px;
        }

        .referral-box {
            float: none;
            margin-top: 15px;
            display: inline-flex;
        }

        .col-md-3 {
            width: 50%;
        }
    }
</style>

<div class="profile-container">

    <div class="page-title">Profile Saya</div>

    <div class="profile-header-card">
        <div class="row align-items-center">

            <div class="referral-box">
                Kode Referral :
                <span id="kodeReferral">ABC123456</span>
                <i class="far fa-copy"
                    style="cursor: pointer;"
                    onclick="salinReferral()"></i>
            </div>

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
                <a href="{{ url('/member/reset-password') }}" class="btn-reset-pass">Reset Password</a>
            </div>

            <div class="col-md-auto mt-3 mt-md-0">
                <div class="text-end text-center-mobile">



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


    <div class="data-card">

        <div class="data-header">
            <h4 class="section-title">Data Pribadi</h4>
            <a href="/member/edit-profile" class="btn-edit-profile">
                <i class="fas fa-pencil-alt me-1"></i> Edit Profil
            </a>
        </div>

        <div class="row">
            <div class="col-6 col-md-3">
                <div class="data-label">Nama</div>
                <div class="data-value">Nadira Azzahra</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">No. Hp</div>
                <div class="data-value">081234567898</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Email</div>
                <div class="data-value">nadira@gmail.com</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Outlet Mamina Terdekat</div>
                <div class="data-value">Malang</div>
            </div>

            <div class="col-6 col-md-3">
                <div class="data-label">Alamat</div>
                <div class="data-value">Jln. Bunga Mawar No 1</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Provinsi</div>
                <div class="data-value">Jawa Timur</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Kota</div>
                <div class="data-value">Malang</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Kecamatan</div>
                <div class="data-value">Lowokwaru</div>
            </div>

            <div class="col-6 col-md-3">
                <div class="data-label">Kelurahan</div>
                <div class="data-value">Jatimulyo</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Jenis Kelamin</div>
                <div class="data-value">Perempuan</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Tgl Lahir</div>
                <div class="data-value">12 Januari 1995</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Instagram</div>
                <div class="data-value">@nadira_azza</div>
            </div>

            <div class="col-6 col-md-3">
                <div class="data-label">Pekerjaan</div>
                <div class="data-value">Ibu Rumah Tangga</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="data-label">Agama</div>
                <div class="data-value">Islam</div>
            </div>
        </div>

    </div>

</div>

<script>
    function salinReferral() {
        const kode = document.getElementById('kodeReferral').innerText;

        navigator.clipboard.writeText(kode).then(() => {
            alert('Kode referral berhasil disalin ✨');
        });
    }
</script>