@extends('admin.layouts.app')

@section('title', 'Artikel — Mamina CMS')
@section('page-title', 'Kelola Artikel')
@section('page-subtitle', 'Daftar artikel yang tampil di landing page')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-newspaper"></i> Daftar Artikel ({{ count($artikels) }})</div>
        <a href="{{ route('admin.cms.artikel.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Artikel
        </a>
    </div>
    <div class="card-body" style="padding:0;">
        @if($artikels->isEmpty())
            <div class="empty-state">
                <i class="fas fa-newspaper"></i>
                <p>Belum ada artikel yang ditambahkan.</p>
                <a href="{{ route('admin.cms.artikel.create') }}" class="btn btn-primary btn-sm" style="margin-top:12px;">
                    <i class="fas fa-plus"></i> Tambah Artikel Pertama
                </a>
            </div>
        @else
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th style="text-align:right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikels as $item)
                            <tr>
                                <td style="width:70px">
                                    @if($item->cover_image)
                                        <img src="{{ str_starts_with($item->cover_image, 'http') ? $item->cover_image : asset($item->cover_image) }}"
                                             alt="Cover" style="width:60px; height:45px; object-fit:cover; border-radius:6px;">
                                    @else
                                        <div style="width:60px; height:45px; background:#EDF2F7; border-radius:6px; display:flex; align-items:center; justify-content:center; color:#A0AEC0;">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $item->title }}</strong>
                                    @if($item->is_featured)
                                        <span class="badge badge-warning" style="margin-left:6px;"><i class="fas fa-star"></i> Featured</span>
                                    @endif
                                </td>
                                <td><span class="badge badge-info">{{ $item->category ?? 'Umum' }}</span></td>
                                <td>{{ $item->author_name ?? '-' }}</td>
                                <td>{{ !empty($item->published_at) ? date('d/m/Y', strtotime($item->published_at)) : '-' }}</td>
                                <td>
                                    @if($item->is_active)
                                        <span class="badge badge-success"><i class="fas fa-check-circle"></i> Aktif</span>
                                    @else
                                        <span class="badge badge-danger"><i class="fas fa-times-circle"></i> Nonaktif</span>
                                    @endif
                                </td>
                                <td style="text-align:right">
                                    <div style="display:inline-flex; gap:6px;">
                                        <a href="{{ route('admin.cms.artikel.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.cms.artikel.destroy', $item->id) }}" method="POST"
                                              onsubmit="return confirm('Hapus artikel ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
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
        @endif
    </div>
</div>

@endsection
