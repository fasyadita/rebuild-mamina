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
                 </tbody>
             </table>
             <div class="empty-space"></div>
         </div>
     </div>

 </div>