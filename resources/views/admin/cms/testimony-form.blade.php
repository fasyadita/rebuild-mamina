@extends('admin.layouts.app')

@section('title', ($item ? 'Edit' : 'Tambah') . ' Testimoni — CMS')
@section('page-title', $item ? 'Edit Testimoni' : 'Tambah Testimoni')
@section('page-subtitle', 'Kelola ulasan para bunda')

@section('content')

<form action="{{ $item ? route('admin.cms.testimony.update', $item->id) : route('admin.cms.testimony.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if($item) @method('PUT') @endif

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-user"></i> Informasi Reviewer</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="reviewer_name">Nama Reviewer <span class="required">*</span></label>
                        <input type="text" id="reviewer_name" name="reviewer_name" class="form-control"
                            value="{{ old('reviewer_name', $item->reviewer_name ?? '') }}"
                            placeholder="contoh: Bunda Fia" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="reviewer_desc">Deskripsi (Opsional)</label>
                        <input type="text" id="reviewer_desc" name="reviewer_desc" class="form-control"
                            value="{{ old('reviewer_desc', $item->reviewer_desc ?? '') }}"
                            placeholder="contoh: Member Mamina, Ibu dari 2 anak">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="rating">Rating (1-5) <span class="required">*</span></label>
                        <select id="rating" name="rating" class="form-control">
                            @for($r = 5; $r >= 1; $r--)
                                <option value="{{ $r }}" {{ old('rating', $item->rating ?? 5) == $r ? 'selected' : '' }}>
                                    {{ $r }} Bintang {{ $r == 5 ? '(Sempurna)' : '' }}
                                </option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sort_order">Urutan Tampil</label>
                        <input type="number" id="sort_order" name="sort_order" class="form-control"
                            value="{{ old('sort_order', $item->sort_order ?? 0) }}" min="0">
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-image"></i> Foto Reviewer</div>
                </div>
                <div class="card-body">
                    @if($item && $item->reviewer_photo)
                        <img src="{{ $item->reviewer_photo }}" alt="preview"
                            style="width:80px; height:80px; object-fit:cover; border-radius:50%; margin-bottom:14px; border:3px solid var(--border);">
                    @endif

                    <div class="form-group">
                        <label class="form-label">Upload Foto</label>
                        <input type="file" name="reviewer_photo" class="form-control" accept="image/*">
                    </div>

                    <div style="text-align:center; font-size:12px; color:var(--text-light); margin:8px 0;">— atau —</div>

                    <div class="form-group">
                        <label class="form-label">URL Foto</label>
                        <input type="text" name="photo_url" class="form-control"
                            value="{{ old('photo_url', $item->reviewer_photo ?? '') }}"
                            placeholder="https://... atau /img/nama.jpg">
                        <div class="form-hint">Bisa pakai URL dari https://randomuser.me atau upload lokal.</div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-comment-dots"></i> Ulasan</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="review_text">Teks Ulasan <span class="required">*</span></label>
                        <textarea id="review_text" name="review_text" class="form-control" rows="6"
                            placeholder="Tulis ulasan dari reviewer..." required>{{ old('review_text', $item->review_text ?? '') }}</textarea>
                        <div class="form-hint">Teks akan otomatis diberi tanda kutip pada landing page.</div>
                    </div>

                    <div class="toggle-wrap" style="margin-top:16px">
                        <label class="toggle">
                            <input type="checkbox" name="is_active" {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}>
                            <span class="toggle-slider"></span>
                        </label>
                        <div>
                            <div style="font-weight:700; font-size:13.5px;">Aktif / Tampil</div>
                            <div style="font-size:12px; color:var(--text-light);">Nonaktifkan untuk menyembunyikan tanpa menghapus</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.cms.testimony') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ $item ? 'Update Testimoni' : 'Simpan Testimoni' }}
        </button>
    </div>
</form>

@endsection
