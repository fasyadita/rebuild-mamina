@extends('admin.layouts.app')

@section('title', 'Hero Section — Mamina CMS')
@section('page-title', 'Hero / Home Section')
@section('page-subtitle', 'Kelola konten utama landing page (main / beranda)')

@section('content')

<form action="{{ route('admin.cms.hero.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-file-alt"></i> Konten Utama</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="title">Judul Utama <span class="required">*</span></label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $hero->title ?? 'mamina') }}"
                            placeholder="contoh: mamina" required>
                        <div class="form-hint">Judul besar yang tampil di bagian hero. Huruf "i" otomatis diberi warna toska.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="subtitle">Subtitle</label>
                        <input type="text" id="subtitle" name="subtitle" class="form-control"
                            value="{{ old('subtitle', $hero->subtitle ?? 'Baby Spa & Pijat Laktasi') }}"
                            placeholder="contoh: Baby Spa & Pijat Laktasi">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="description">Deskripsi <span class="required">*</span></label>
                        <textarea id="description" name="description" class="form-control" rows="4"
                            placeholder="Deskripsi singkat tentang Mamina..." required>{{ old('description', $hero->description ?? 'Mamina Baby Spa dan Pijat Laktasi merupakan penyedia layanan kebidanan komplementer berpusat di Kota Malang berupa layanan ibu dan bayi.') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gambar Latar Belakang (Opsional)</label>
                        @if(!empty($hero->bg_image))
                            <div style="margin-bottom:8px;">
                                <img src="{{ str_starts_with($hero->bg_image, 'http') ? $hero->bg_image : asset($hero->bg_image) }}"
                                     alt="Preview Background" style="max-height:100px; border-radius:8px; border:1px solid #ddd;">
                            </div>
                        @endif
                        <input type="file" name="bg_image" class="form-control" accept="image/*">
                        <div class="form-hint" style="margin-top:4px;">Atau masukkan URL gambar latar:</div>
                        <input type="url" name="bg_image_url" class="form-control" style="margin-top:4px;"
                            value="{{ old('bg_image_url', $hero->bg_image ?? '') }}" placeholder="https://...">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-link"></i> Tombol CTA</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="cta_text">Teks Tombol <span class="required">*</span></label>
                        <input type="text" id="cta_text" name="cta_text" class="form-control"
                            value="{{ old('cta_text', $hero->cta_text ?? 'Reservasi') }}"
                            placeholder="contoh: Reservasi" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="cta_link">Link Tombol <span class="required">*</span></label>
                        <input type="text" id="cta_link" name="cta_link" class="form-control"
                            value="{{ old('cta_link', $hero->cta_link ?? '/guest/login') }}"
                            placeholder="contoh: /guest/login" required>
                        <div class="form-hint">Gunakan path relatif, misal: /guest/login atau /reservasi</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preview Tombol</label>
                        <div style="padding:16px; background:#f0fdf4; border-radius:10px; border:1px dashed #86efac;">
                            <a href="#" style="display:inline-block; background:#3fb6a8; color:#fff; padding:12px 26px; border-radius:999px; text-decoration:none; font-weight:600; font-size:13px;">
                                {{ old('cta_text', $hero->cta_text ?? 'Reservasi') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title">ℹ️ Info Section</div>
                </div>
                <div class="card-body">
                    <p style="font-size:13px; color:var(--text-light); line-height:1.7;">
                        Section ini tampil pada halaman utama <strong>beranda (main/welcome)</strong> yang bisa diakses oleh semua pengunjung sebelum memilih guest atau member.
                    </p>
                    <div style="margin-top:12px; padding:12px; background:#EBF8FF; border-radius:8px; font-size:12.5px; color:#2B6CB0;">
                        <i class="fas fa-info-circle"></i>
                        Warna teks pada tampilan tidak bisa diubah di sini — sudah diatur dari stylesheet landing page.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Perubahan
        </button>
    </div>
</form>

@endsection
