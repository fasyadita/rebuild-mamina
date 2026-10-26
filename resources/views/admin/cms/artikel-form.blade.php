@extends('admin.layouts.app')

@section('title', ($item ? 'Edit Artikel' : 'Tambah Artikel') . ' — Mamina CMS')
@section('page-title', $item ? 'Edit Artikel' : 'Tambah Artikel')
@section('page-subtitle', 'Kelola postingan artikel untuk landing page')

@section('content')

<form action="{{ $item ? route('admin.cms.artikel.update', $item->id) : route('admin.cms.artikel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($item)
        @method('PUT')
    @endif

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-file-alt"></i> Konten Artikel</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="title">Judul Artikel <span class="required">*</span></label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $item->title ?? '') }}"
                            placeholder="Judul artikel yang menarik..." required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="category">Kategori</label>
                        <input type="text" id="category" name="category" class="form-control"
                            value="{{ old('category', $item->category ?? 'Perawatan Bayi') }}"
                            placeholder="contoh: Perawatan Bayi / Kesehatan Ibu">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="excerpt">Ringkasan (Excerpt) <span class="required">*</span></label>
                        <textarea id="excerpt" name="excerpt" class="form-control" rows="3"
                            placeholder="Ringkasan singkat yang tampil di card landing..." required>{{ old('excerpt', $item->excerpt ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="content">Isi Artikel Lengkap</label>
                        <textarea id="content" name="content" class="form-control" rows="6"
                            placeholder="Tulis artikel lengkap di sini...">{{ old('content', $item->content ?? '') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-image"></i> Media & Penulis</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Foto Sampul (Cover Image)</label>
                        @if(!empty($item->cover_image))
                            <div style="margin-bottom:10px;">
                                <img src="{{ str_starts_with($item->cover_image, 'http') ? $item->cover_image : asset($item->cover_image) }}"
                                     alt="Cover" style="max-height:120px; border-radius:8px; border:1px solid #ddd; object-fit:cover;">
                            </div>
                        @endif
                        <input type="file" name="cover_image" class="form-control" accept="image/*">
                        <div class="form-hint" style="margin-top:6px;">Atau masukkan URL gambar:</div>
                        <input type="url" name="cover_url" class="form-control" style="margin-top:4px;"
                            value="{{ old('cover_url', $item->cover_image ?? '') }}" placeholder="https://...">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="author_name">Nama Penulis</label>
                        <input type="text" id="author_name" name="author_name" class="form-control"
                            value="{{ old('author_name', $item->author_name ?? 'Nadira Azzahra') }}"
                            placeholder="contoh: Nadira Azzahra">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Foto Penulis</label>
                        @if(!empty($item->author_photo))
                            <div style="margin-bottom:8px;">
                                <img src="{{ str_starts_with($item->author_photo, 'http') ? $item->author_photo : asset($item->author_photo) }}"
                                     alt="Author" style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                            </div>
                        @endif
                        <input type="file" name="author_photo" class="form-control" accept="image/*">
                        <input type="url" name="author_photo_url" class="form-control" style="margin-top:4px;"
                            value="{{ old('author_photo_url', $item->author_photo ?? '') }}" placeholder="https://... foto URL">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="published_at">Tanggal Publikasi</label>
                        <input type="date" id="published_at" name="published_at" class="form-control"
                            value="{{ old('published_at', $item->published_at ?? date('Y-m-d')) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Opsi</label>
                        <div style="display:flex; flex-direction:column; gap:10px;">
                            <div class="toggle-wrap">
                                <label class="toggle">
                                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $item->is_featured ?? 0) ? 'checked' : '' }}>
                                    <span class="toggle-slider"></span>
                                </label>
                                <span style="font-size:13px; font-weight:600;">Jadikan Artikel Pilihan Utama (Big Card)</span>
                            </div>
                            <div class="toggle-wrap">
                                <label class="toggle">
                                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $item->is_active ?? 1) ? 'checked' : '' }}>
                                    <span class="toggle-slider"></span>
                                </label>
                                <span style="font-size:13px; font-weight:600;">Publikasikan (Aktif)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.cms.artikel') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ $item ? 'Simpan Perubahan' : 'Terbitkan Artikel' }}
        </button>
    </div>
</form>

@endsection
