@extends('admin.layouts.app')

@section('title', 'Testimoni — CMS')
@section('page-title', 'Testimommy')
@section('page-subtitle', 'Kelola testimoni / ulasan para bunda')

@section('content')

<div style="display:flex; justify-content:flex-end; margin-bottom:20px;">
    <a href="{{ route('admin.cms.testimony.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Testimoni
    </a>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-star"></i> Daftar Testimoni</div>
        <div style="font-size:13px; color:var(--text-light)">{{ $testimonies->count() }} ulasan</div>
    </div>

    @if($testimonies->isEmpty())
        <div class="empty-state">
            <i class="fas fa-star"></i>
            <p>Belum ada testimoni. Klik "Tambah Testimoni" untuk mulai.</p>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonies as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            @if($item->reviewer_photo)
                                <img src="{{ $item->reviewer_photo }}" alt="{{ $item->reviewer_name }}"
                                    style="width:44px; height:44px; object-fit:cover; border-radius:50%; border:2px solid var(--border);">
                            @else
                                <div style="width:44px; height:44px; background:linear-gradient(135deg,#5AA9A3,#F29AA0); border-radius:50%; display:flex; align-items:center; justify-content:center; color:#fff; font-weight:700; font-size:14px;">
                                    {{ substr($item->reviewer_name, 0, 1) }}
                                </div>
                            @endif
                        </td>
                        <td>
                            <div style="font-weight:700; color:var(--dark)">{{ $item->reviewer_name }}</div>
                            @if($item->reviewer_desc)
                                <div style="font-size:11px; color:var(--text-light)">{{ $item->reviewer_desc }}</div>
                            @endif
                        </td>
                        <td style="max-width:250px">
                            <div style="font-size:13px; color:var(--text); font-style:italic">
                                "{{ Str::limit($item->review_text, 80) }}"
                            </div>
                        </td>
                        <td>
                            <div style="color:#F6C05B; font-size:12px; display:flex; gap:2px;">
                                @for($r = 0; $r < $item->rating; $r++) <i class="fas fa-star"></i> @endfor
                            </div>
                            <div style="font-size:11px; color:var(--text-light)">{{ $item->rating }}/5</div>
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
                                <a href="{{ route('admin.cms.testimony.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.cms.testimony.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus testimoni ini?')">
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
