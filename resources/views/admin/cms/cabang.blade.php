@extends('admin.layouts.app')

@section('title', 'Cabang — CMS')
@section('page-title', 'Cabang Mamina')
@section('page-subtitle', 'Kelola daftar cabang Mamina')

@section('content')

<div style="display:flex; justify-content:flex-end; margin-bottom:20px;">
    <a href="{{ route('admin.cms.cabang.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Cabang
    </a>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-map-marker-alt"></i> Daftar Cabang</div>
        <div style="font-size:13px; color:var(--text-light)">{{ $cabangs->count() }} cabang</div>
    </div>

    @if($cabangs->isEmpty())
        <div class="empty-state">
            <i class="fas fa-map-marker-alt"></i>
            <p>Belum ada cabang. Klik "Tambah Cabang" untuk mulai.</p>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Cabang</th>
                        <th>Alamat</th>
                        <th>Jam Operasional</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cabangs as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ $item->image }}" alt="{{ $item->nama_cabang }}"
                                    style="width:70px; height:45px; object-fit:cover; border-radius:7px; border:1px solid var(--border);">
                            @else
                                <div style="width:70px; height:45px; background:#f0f0f0; border-radius:7px; display:flex; align-items:center; justify-content:center; color:#aaa;">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                        </td>
                        <td style="font-weight:700; color:var(--dark)">{{ $item->nama_cabang }}</td>
                        <td style="max-width:200px; font-size:12.5px; color:var(--text-light)">
                            {{ Str::limit($item->alamat, 80) }}
                        </td>
                        <td style="font-size:13px">{{ $item->jam_operasional ?? '-' }}</td>
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
                                <a href="{{ route('admin.cms.cabang.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.cms.cabang.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus cabang ini?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
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
