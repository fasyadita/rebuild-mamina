@extends('admin.layouts.app')

@section('title', 'Katalog Semua Layanan — Mamina CMS')
@section('page-title', 'Semua Layanan')
@section('page-subtitle', 'Kelola informasi lengkap, harga, durasi, dan foto untuk semua layanan Mamina')

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
        max-width: 600px;
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
    <form method="GET" action="{{ route('admin.cms.katalog-layanan') }}" class="filter-group">
        <input type="text" name="search" class="form-control" placeholder="Cari nama layanan..." value="{{ $search }}">
        <select name="category_id" class="form-control" style="max-width: 180px;" onchange="this.form.submit()">
            <option value="">Semua Kategori</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $categoryId == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-outline">
            <i class="fas fa-search"></i>
        </button>
        @if($search || $categoryId)
            <a href="{{ route('admin.cms.katalog-layanan') }}" class="btn btn-outline" title="Reset filter">
                <i class="fas fa-times"></i>
            </a>
        @endif
    </form>

    <a href="{{ route('admin.cms.katalog-layanan.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Layanan
    </a>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-spa"></i> Daftar Katalog Layanan</div>
        <div style="font-size:13px; color:var(--text-light)">Total: {{ $layananList->total() }} layanan</div>
    </div>

    @if($layananList->isEmpty())
        <div class="empty-state">
            <i class="fas fa-spa"></i>
            <p>Tidak ada layanan yang ditemukan.</p>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th style="width: 80px;">Foto</th>
                        <th>Nama Layanan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Durasi</th>
                        <th>Status</th>
                        <th style="width: 140px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($layananList as $i => $item)
                    @php
                        $photoUrl = null;
                        if ($item->image) {
                            if (str_starts_with($item->image, 'http') || str_starts_with($item->image, '/')) {
                                $photoUrl = $item->image;
                            } elseif (file_exists(public_path('storage/' . $item->image))) {
                                $photoUrl = asset('storage/' . $item->image);
                            } elseif (file_exists(public_path($item->image))) {
                                $photoUrl = asset($item->image);
                            } else {
                                $photoUrl = asset('storage/' . $item->image);
                            }
                        }
                    @endphp
                    <tr>
                        <td>{{ $layananList->firstItem() + $i }}</td>
                        <td>
                            @if($photoUrl)
                                <img src="{{ $photoUrl }}" alt="{{ $item->name }}"
                                    onerror="this.onerror=null;this.src='{{ asset('img/mamina.png') }}';"
                                    style="width:65px; height:45px; object-fit:cover; border-radius:7px; border:1px solid var(--border); display:block;">
                            @else
                                <div style="width:65px; height:45px; background:#f0f4f4; border-radius:7px; display:flex; align-items:center; justify-content:center; color:#3ca5a5; font-size:18px;">
                                    <i class="fas fa-spa"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div style="font-weight:700; color:var(--dark)">{{ $item->name }}</div>
                            @if($item->description)
                                <div style="font-size:12px; color:var(--text-light); margin-top:3px; max-width: 320px;">
                                    {{ Str::limit($item->description, 70) }}
                                </div>
                            @endif
                        </td>
                        <td>
                            <span class="badge badge-info">{{ $item->category->name ?? 'Umum' }}</span>
                        </td>
                        <td style="font-weight:700; color:#3ca5a5;">
                            Rp {{ number_format($item->sale_price, 0, ',', '.') }}
                        </td>
                        <td>
                            @if($item->duration > 0)
                                <span><i class="far fa-clock" style="color:var(--text-light)"></i> {{ $item->duration }} mnt</span>
                            @else
                                <span style="color:var(--text-light)">-</span>
                            @endif
                        </td>
                        <td>
                            @if($item->is_active == '1')
                                <span class="badge badge-success"><i class="fas fa-check"></i> Aktif</span>
                            @else
                                <span class="badge badge-danger"><i class="fas fa-times"></i> Nonaktif</span>
                            @endif
                        </td>
                        <td>
                            <div style="display:flex; gap:6px;">
                                <a href="{{ route('admin.cms.katalog-layanan.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.cms.katalog-layanan.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus layanan \'{{ addslashes($item->name) }}\'?')">
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
            <div>Menampilkan {{ $layananList->firstItem() }} sampai {{ $layananList->lastItem() }} dari {{ $layananList->total() }} layanan</div>
            <div>{{ $layananList->links() }}</div>
        </div>
    @endif
</div>

@endsection
