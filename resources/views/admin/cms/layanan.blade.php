@extends('admin.layouts.app')

@section('title', 'Layanan Unggulan — CMS')
@section('page-title', 'Layanan Unggulan')
@section('page-subtitle', 'Kelola kartu layanan pada landing page main dan guest')

@section('content')

<div style="display:flex; justify-content:flex-end; margin-bottom:20px;">
    <a href="{{ route('admin.cms.layanan.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Layanan
    </a>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-leaf"></i> Daftar Layanan Unggulan</div>
        <div style="font-size:13px; color:var(--text-light)">{{ $layanan->count() }} layanan</div>
    </div>

    @if($layanan->isEmpty())
        <div class="empty-state">
            <i class="fas fa-leaf"></i>
            <p>Belum ada layanan. Klik "Tambah Layanan" untuk mulai.</p>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul Layanan</th>
                        <th>Harga</th>
                        <th>Tampil Di</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($layanan as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ $item->image }}" alt="{{ $item->title }}"
                                    style="width:60px; height:40px; object-fit:cover; border-radius:6px;">
                            @else
                                <div style="width:60px; height:40px; background:#f0f0f0; border-radius:6px; display:flex; align-items:center; justify-content:center; color:#aaa; font-size:18px;">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div style="font-weight:700; color:var(--dark)">{{ $item->title }}</div>
                            <div style="font-size:12px; color:var(--text-light); margin-top:2px">
                                {{ Str::limit($item->description, 60) }}
                            </div>
                        </td>
                        <td style="font-weight:700; color:#5AA9A3">{{ $item->price ?? '-' }}</td>
                        <td>
                            @if($item->show_on_main)
                                <span class="badge badge-info" style="margin-bottom:4px; display:block; width:fit-content">Main</span>
                            @endif
                            @if($item->show_on_guest)
                                <span class="badge badge-success" style="display:block; width:fit-content">Guest</span>
                            @endif
                        </td>
                        <td>{{ $item->sort_order }}</td>
                        <td>
                            @if($item->is_active)
                                <span class="badge badge-success"><i class="fas fa-check"></i> Aktif</span>
                            @else
                                <span class="badge badge-danger"><i class="fas fa-times"></i> Nonaktif</span>
                            @endif
                        </td>
                        <td>
                            <div style="display:flex; gap:6px;">
                                <a href="{{ route('admin.cms.layanan.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.cms.layanan.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus layanan ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">
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

@endsection
