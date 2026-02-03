@extends('member.layouts.app')

@section('title', 'Riwayat Reservasi')

@section('content')
<style>
    .history-section {
        padding: 40px 20px;
        max-width: 1200px;
        margin: 60px auto;
        align-content: center;
    }

    .section-title {
        color: #3fb6a8;
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 15px;
        margin-top: 30px;
    }

    .history-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        margin-bottom: 20px;
        min-height: 150px;
    }

    .custom-table {
        width: 100%;
        margin-bottom: 0;
        border-collapse: collapse;
    }

    .custom-table thead {
        background-color: #ffdad6;
    }

    .custom-table thead th {
        color: #555;
        font-weight: 500;
        font-size: 14px;
        padding: 18px 15px;
        border: none;
        text-align: left;
        white-space: nowrap;
    }

    .custom-table tbody td {
        padding: 15px;
        color: #666;
        border-bottom: 1px solid #f0f0f0;
        font-size: 14px;
    }

    .text-success {
        color: #28a745;
        font-weight: 600;
    }

    .text-danger {
        color: #dc3545;
        font-weight: 600;
    }

    .empty-space {
        height: 20px;
        background-color: white;
    }

    .table-responsive {
        border-radius: 20px;
    }
</style>


<div class="history-section">

    <h3 class="section-title">Riwayat Reservasi</h3>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Catatan</th>
                        <th>Kasir</th>
                        <th>Bayar Via</th>
                        <th>Total</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TRX-20231001-005</td>
                        <td>01 Okt 2023</td>
                        <td>Paket Family (Meja 4)</td>
                        <td>Siti Aminah</td>
                        <td>QRIS</td>
                        <td>Rp 350.000</td>
                        <td>Rp 350.000</td>
                        <td>Rp 0</td>
                    </tr>
                    <tr>
                        <td>TRX-20230925-012</td>
                        <td>25 Sep 2023</td>
                        <td>Makan Siang</td>
                        <td>Budi Santoso</td>
                        <td>Tunai</td>
                        <td>Rp 75.000</td>
                        <td>Rp 100.000</td>
                        <td>Rp 25.000</td>
                    </tr>
                    <tr>
                        <td>TRX-20230910-003</td>
                        <td>10 Sep 2023</td>
                        <td>Meeting Room A</td>
                        <td>Rina</td>
                        <td>Transfer BCA</td>
                        <td>Rp 1.200.000</td>
                        <td>Rp 1.200.000</td>
                        <td>Rp 0</td>
                    </tr>
                </tbody>
            </table>
            <div class="empty-space"></div>
        </div>
    </div>


    <h3 class="section-title">Riwayat Poin</h3>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Tanggal</th>
                        <th style="width: 60%;">Note</th>
                        <th style="width: 20%; text-align: right;">Poin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01 Okt 2023</td>
                        <td>Reward Transaksi TRX-20231001-005</td>
                        <td style="text-align: right;" class="text-success">+ 35</td>
                    </tr>
                    <tr>
                        <td>30 Sep 2023</td>
                        <td>Penukaran Voucher Diskon 50k</td>
                        <td style="text-align: right;" class="text-danger">- 100</td>
                    </tr>
                    <tr>
                        <td>25 Sep 2023</td>
                        <td>Reward Transaksi TRX-20230925-012</td>
                        <td style="text-align: right;" class="text-success">+ 7</td>
                    </tr>
                    <tr>
                        <td>25 Sep 2023</td>
                        <td>Bonus Member Baru</td>
                        <td style="text-align: right;" class="text-success">+ 50</td>
                    </tr>
                </tbody>
            </table>
            <div class="empty-space"></div>
        </div>
    </div>

</div>
@endsection