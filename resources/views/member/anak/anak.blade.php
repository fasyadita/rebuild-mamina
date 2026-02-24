@extends('member.layouts.app')

@section('title', 'Anak')

@section('content')
<style>
    .history-section {
        padding: 40px 20px;
        max-width: 1200px;
        margin: 60px auto;
        align-content: center;
    }

    /* --- Judul Section (Warna Tosca) --- */
    .section-title {
        color: #3fb6a8;
        /* Hijau Tosca */
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 15px;
        margin-top: 30px;
    }

    /* --- Styling Card Tabel --- */
    .history-card {
        background-color: #fff;
        border-radius: 20px;
        /* Lengkungan sudut card */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        /* Bayangan halus */
        overflow: hidden;
        /* Agar header pink tidak keluar dari lengkungan */
        margin-bottom: 20px;
        min-height: 150px;
        /* Tinggi minimal agar terlihat putih kosong jika tidak ada data */
    }

    /* --- Styling Header Tabel (Pink) --- */
    .custom-table {
        width: 100%;
        margin-bottom: 0;
        border-collapse: collapse;
    }

    .custom-table thead {
        background-color: #ffdad6;
        /* Pink Salem Header */
    }

    .custom-table thead th {
        color: #555;
        font-weight: 500;
        font-size: 14px;
        padding: 18px 15px;
        border: none;
        /* Hilangkan garis border bawaan */
        text-align: left;
        white-space: nowrap;
        /* Agar teks header tidak turun baris */
    }

    /* --- Styling Body Tabel (Isi) --- */
    .custom-table tbody td {
        padding: 15px;
        color: #666;
        border-bottom: 1px solid #f0f0f0;
        /* Garis tipis antar baris (opsional) */
    }

    /* Area Kosong (Empty State) */
    .empty-space {
        height: 100px;
        /* Memberi jarak putih di bawah header */
        background-color: white;
    }

    /* Responsive Wrapper */
    .table-responsive {
        border-radius: 20px;
    }
</style>

<div class="history-section">

    <h3 class="section-title">Daftar Anak</h3>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aaisyah Nur Salsabil</td>
                        <td>30 Nov 2003</td>
                        <td>2 bulan lebih 22 tahun</td>
                        <td>Perempuan</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Fasya Dita</td>
                        <td>14 Feb 2004</td>
                        <td>11 bulan lebih 21 tahun</td>
                        <td>Perempuan</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Rangga Dwi Saputra</td>
                        <td>11 Agustus 2004</td>
                        <td>5 bulan lebih 21 tahun</td>
                        <td>Laki-laki</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bagas Satria Nugroho</td>
                        <td>8 Desember 2004</td>
                        <td>1 bulan lebih 21 tahun</td>
                        <td>Laki-laki</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Gilang Purnomo</td>
                        <td>5 Mei 2005</td>
                        <td>9 bulan lebih 20 tahun</td>
                        <td>Laki-laki</td>
                    </tr>
                </tbody>
            </table>
            <div class="empty-space"></div>
        </div>
    </div>


    <h3 class="section-title">Pertumbuhan Anak</h3>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Anak</th>
                        <th>Tanggal Cek</th>
                        <th>Berat (Kg)</th>
                        <th>Tinggi (Cm)</th>
                        <th>Lingkar Kepala (Cm)</th>
                        <th>Galeri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>Fasya</strong></td>
                        <td>12 Jan 2024</td>
                        <td>8.5</td>
                        <td>72</td>
                        <td>44</td>
                        <td>
                            <a href="#" style="color: #3fb6a8; text-decoration: none; font-weight: 600;">
                                Lihat Foto
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><strong>Aaisyah</strong></td>
                        <td>10 Feb 2024</td>
                        <td>10.2</td>
                        <td>85</td>
                        <td>46</td>
                        <td>
                            <a href="#" style="color: #3fb6a8; text-decoration: none; font-weight: 600;">
                                Lihat Foto
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td><strong>Gilang</strong></td>
                        <td>05 Mar 2024</td>
                        <td>12.5</td>
                        <td>92</td>
                        <td>48</td>
                        <td>
                            <a href="#" style="color: #3fb6a8; text-decoration: none; font-weight: 600;">
                                Lihat Foto
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td><strong>Rangga</strong></td>
                        <td>20 Mar 2024</td>
                        <td>6.8</td>
                        <td>64</td>
                        <td>41</td>
                        <td>
                            <a href="#" style="color: #3fb6a8; text-decoration: none; font-weight: 600;">
                                Lihat Foto
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Satria</strong></td>
                        <td>20 Mar 2024</td>
                        <td>6.8</td>
                        <td>64</td>
                        <td>41</td>
                        <td>
                            <a href="#" style="color: #3fb6a8; text-decoration: none; font-weight: 600;">
                                Lihat Foto
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="empty-space"></div>
        </div>
    </div>

</div>