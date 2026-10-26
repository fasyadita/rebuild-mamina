@extends('admin.layouts.app')

@section('title', 'FAQ — CMS')
@section('page-title', 'FAQ')
@section('page-subtitle', 'Kelola pertanyaan yang sering diajukan')

@section('content')

<div style="display:flex; justify-content:flex-end; margin-bottom:20px;">
    <a href="{{ route('admin.cms.faq.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah FAQ
    </a>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title"><i class="fas fa-question-circle"></i> Daftar FAQ</div>
        <div style="font-size:13px; color:var(--text-light)">{{ $faqs->count() }} pertanyaan</div>
    </div>

    @if($faqs->isEmpty())
        <div class="empty-state">
            <i class="fas fa-question-circle"></i>
            <p>Belum ada FAQ. Klik "Tambah FAQ" untuk mulai.</p>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th>Urutan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faqs as $i => $item)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td style="max-width:220px; font-weight:600; color:var(--dark)">{{ $item->question }}</td>
                        <td style="max-width:320px; font-size:13px; color:var(--text-light)">
                            {{ Str::limit($item->answer, 100) }}
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
                                <a href="{{ route('admin.cms.faq.edit', $item->id) }}" class="btn btn-outline btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.cms.faq.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus FAQ ini?')">
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
