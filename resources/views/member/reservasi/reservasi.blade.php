@extends('member.layouts.app')

@section('title', 'Riwayat Reservasi')

@push('styles')
<style>
    body {
        background-color: #FFFDF3;
    }

    .history-section {
        padding: 20px 20px;
        max-width: 1250px;
        margin: 0px auto;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        margin-top: 25px;
    }

    .section-title {
        color: #5BA7A0;
        font-size: 28px;
        font-weight: 700;
        margin: 0;
    }

    .history-card {
        background: white;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        margin-bottom: 40px;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 0;
    }

    .custom-table thead {
        background: #FFD9D4;
    }

    .custom-table thead th {
        padding: 18px 20px;
        font-size: 15px;
        font-weight: 600;
        background: #ffdad1;
        color: #666;
        border: none;
        text-align: center;
        white-space: nowrap;
    }

    .custom-table tbody td {
        padding: 18px 20px;
        text-align: center;
        color: #666;
        border-bottom: 1px solid #f3f3f3;
        vertical-align: middle;
    }

    .empty-state {
        height: 140px;
        text-align: center;
        color: #b1b1b1;
        font-size: 16px;
    }

    .text-success {
        color: #28a745;
        font-weight: 600;
    }

    .text-danger {
        color: #dc3545;
        font-weight: 600;
    }

    @media(max-width:768px) {
        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .section-title {
            font-size: 22px;
        }

        .custom-table thead th,
        .custom-table tbody td {
            font-size: 13px;
            padding: 14px 10px;
        }
    }
</style>
@endpush

@section('content')
<div class="history-section">

    <div class="section-header">
        <h3 class="section-title">Riwayat Reservasi</h3>
    </div>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Catatan</th>
                        <th>Bayar Via</th>
                        <th>Total</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reservations as $res)
                    <tr>
                        <td>{{ $res->id_number }}</td>
                        <td>{{ \Carbon\Carbon::parse($res->date)->translatedFormat('d M Y') }}</td>
                        <td>{{ $res->note ?? '-' }}</td>
                        <td>{{ $res->via ?? '-' }}</td>
                        <td>Rp {{ number_format($res->total, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($res->paid, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($res->change, 0, ',', '.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="empty-state">Belum ada data reservasi</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


    <div class="section-header">
        <h3 class="section-title">Riwayat Poin</h3>
    </div>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Tanggal</th>
                        <th style="width: 60%; text-align: left;">Note</th>
                        <th style="width: 20%;">Poin</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($points as $p)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($p->created_at)->translatedFormat('d M Y') }}</td>
                        <td style="text-align: left;">{{ $p->note }}</td>
                        <td>
                            @if($p->point_in > 0)
                                <span class="text-success">+ {{ $p->point_in }}</span>
                            @elseif($p->point_out > 0)
                                <span class="text-danger">- {{ $p->point_out }}</span>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="empty-state">Belum ada riwayat poin</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection