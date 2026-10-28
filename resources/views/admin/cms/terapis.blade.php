@extends('admin.layouts.app')

@section('title', 'Tim Terapis & Konselor — Mamina CMS')
@section('page-title', 'Tim Terapis & Konselor')
@section('page-subtitle', 'Kelola informasi pribadi, kontak, spesialisasi cabang, dan foto profil terapis')

@section('content')

<style>
    .filter-bar {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .filter-group {
        display: flex;
        gap: 10px;
        flex: 1;
        max-width: 650px;
    }

    .filter-group input, .filter-group select {
        height: 40px;
    }

    .pagination-wrapper {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        color: var(--text-light);
    }

    .pagination-wrapper nav svg {
        width: 18px;
        height: 18px;
    }

    .pagination-wrapper .pagination {
        display: flex;
        gap: 6px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pagination-wrapper .page-item .page-link {
        padding: 6px 12px;
        border-radius: 6px;
        border: 1px solid var(--border);
        color: var(--text);
        text-decoration: none;
    }

    .pagination-wrapper .page-item.active .page-link {
        background: var(--primary);
        color: #fff;
        border-color: var(--primary);
    }
</style>

<div class="filter-bar">
    <form method="GET" action="{{ route('admin.cms.terapis') }}" class="filter-group">
        <input type="text" name="search" class="form-control" placeholder="Cari nama, email, WA..." value="{{ $search }}">
        <select name="branch_id" class="form-control" style="max-width: 180px;" onchange="this.form.submit()">
            <option value="">Semua Cabang</option>
            @foreach($branches as $b)
                <option value="{{ $b->id }}" {{ $branchId == $b->id ? 'selected' : '' }}>{{ $b->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-outline">
            <i class="fas fa-search"></i>
        </button>
        @if($search || $branchId || $roleFilter)
            <a href="{{ route('admin.cms.terapis') }}" class="btn btn-outline" title="Reset filter">
                <i class="fas fa-times"></i>
            </a>
        @endif
    </form>

    <a href="{{ route('admin.cms.terapis.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Terapis
    </a>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-user-nurse"></i> Daftar Terapis & Tim Mamina</div>
        <div style="font-size:13px; color:var(--text-light)">Total: {{ $terapisList->total() }} orang</div>
    </div>

    @if($terapisList->isEmpty())
        <div class="empty-state">
            <i class="fas fa-user-nurse"></i>
            <p>Tidak ada data terapis yang ditemukan.</p>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th style="width: 70px;">Foto</th>
                        <th>Nama & Username</th>
                        <th>Peran (Roles)</th>
                        <th>Cabang / Area</th>
                        <th>Kontak (WA / IG)</th>
                        <th>Status</th>
                        <th style="width: 140px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($terapisList as $i => $item)
                    @php
                        $photoUrl = null;
                        if ($item->thumb) {
                            if (str_starts_with($item->thumb, 'http') || str_starts_with($item->thumb, '/')) {
                                $photoUrl = $item->thumb;
                            } elseif (file_exists(public_path('storage/' . $item->thumb))) {
                                $photoUrl = asset('storage/' . $item->thumb);
                            } elseif (file_exists(public_path($item->thumb))) {
                                $photoUrl = asset($item->thumb);
                            } else {
                                $photoUrl = asset('storage/' . $item->thumb);
                            }
                        }
                    @endphp
                    <tr>
                        <td>{{ $terapisList->firstItem() + $i }}</td>
                        <td>
                            @if($photoUrl)
                                <img src="{{ $photoUrl }}" alt="{{ $item->name }}"
                                    onerror="this.onerror=null;this.src='{{ asset('img/tim-mamina.jpeg') }}';"
                                    style="width:50px; height:50px; object-fit:cover; border-radius:50%; border:2px solid var(--border); display:block;">
                            @else
                                <div style="width:50px; height:50px; background:#edf2f7; border-radius:50%; display:flex; align-items:center; justify-content:center; color:#557A72; font-size:18px; font-weight:700;">
                                    {{ substr($item->name ?? 'T', 0, 1) }}
                                </div>
                            @endif
                        </td>
                        <td>
                            <div style="font-weight:700; color:var(--dark)">{{ $item->name }}</div>
                            <div style="font-size:12px; color:var(--text-light); margin-top:2px;">
                                @<span>{{ $item->username }}</span>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-info" style="text-transform: capitalize;">{{ $item->roles }}</span>
                        </td>
                        <td>
                            @php
                                $branch = $branches->firstWhere('id', $item->branch_id);
                            @endphp
                            <div style="font-weight:600; font-size:13px;">{{ $branch->name ?? 'Pusat' }}</div>
                            @if($item->area)
                                <div style="font-size:11.5px; color:var(--text-light);"><i class="fas fa-map-marker-alt"></i> {{ $item->area }}</div>
                            @endif
                        </td>
                        <td>
                            @if($item->phone)
                                <div style="font-size:12.5px;">
                                    <i class="fab fa-whatsapp" style="color:#25D366"></i> {{ $item->phone }}
                                </div>
                            @endif
                            @if($item->ig)
                                <div style="font-size:12px; color:#C13584; margin-top:2px;">
                                    <i class="fab fa-instagram"></i> {{ $item->ig }}
                                </div>
                            @endif
                            @if(!$item->phone && !$item->ig)
                                <span style="color:var(--text-light); font-size:12px;">-</span>
                            @endif
                        </td>
                        <td>
                            @if($item->is_active == 1)
                                <span class="badge badge-success"><i class="fas fa-check"></i> Aktif</span>
                            @else
                                <span class="badge badge-danger"><i class="fas fa-times"></i> Nonaktif</span>
                            @endif
                        </td>
                        <td>
                            <div style="display:flex; gap:6px;">
                                <a href="{{ route('admin.cms.terapis.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.cms.terapis.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus terapis \'{{ addslashes($item->name) }}\'?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pagination-wrapper" style="padding: 16px 20px;">
            <div>Menampilkan {{ $terapisList->firstItem() }} sampai {{ $terapisList->lastItem() }} dari {{ $terapisList->total() }} orang</div>
            <div>{{ $terapisList->links() }}</div>
        </div>
    @endif
</div>

@endsection
