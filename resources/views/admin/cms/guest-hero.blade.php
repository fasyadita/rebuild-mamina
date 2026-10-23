@extends('admin.layouts.app')

@section('title', 'Guest Hero Section — Mamina CMS')
@section('page-title', 'Guest Hero Section')
@section('page-subtitle', 'Kelola tampilan hero section pada landing page guest & member')

@section('content')

<form action="{{ route('admin.cms.guest-hero.update') }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label" for="small_label">Label Kecil (Badge)</label>
                        <input type="text" id="small_label" name="small_label" class="form-control"
                            value="{{ old('small_label', $hero->small_label ?? 'TERPERCAYA DI INDONESIA') }}"
                            placeholder="contoh: TERPERCAYA DI INDONESIA">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="title">Judul Utama <span class="required">*</span></label>
                        <textarea id="title" name="title" class="form-control" rows="3"
                            placeholder="Perawatan Nyaman untuk" required>{{ old('title', $hero->title ?? "Perawatan\nNyaman untuk") }}</textarea>
                        <div class="form-hint">Tekan enter untuk baris baru. Bagian teks utama sebelum teks highlight.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="title_highlight">Teks Highlight (Warna Toska)</label>
                        <input type="text" id="title_highlight" name="title_highlight" class="form-control"
                            value="{{ old('title_highlight', $hero->title_highlight ?? 'Ibu & Si Kecil') }}"
                            placeholder="contoh: Ibu & Si Kecil">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="description">Deskripsi <span class="required">*</span></label>
                        <textarea id="description" name="description" class="form-control" rows="4"
                            placeholder="Deskripsi hero..." required>{{ old('description', $hero->description ?? 'Mamina hadir dengan kasih sayang profesional untuk mendukung tumbuh kembang si kecil dan pemulihan bunda pasca melahirkan.') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-link"></i> Tombol CTA</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="cta_text">Teks Tombol CTA</label>
                        <input type="text" id="cta_text" name="cta_text" class="form-control"
                            value="{{ old('cta_text', $hero->cta_text ?? 'Layanan Unggulan') }}"
                            placeholder="Layanan Unggulan">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="cta_link">Link Tombol CTA</label>
                        <input type="text" id="cta_link" name="cta_link" class="form-control"
                            value="{{ old('cta_link', $hero->cta_link ?? '#top-service') }}"
                            placeholder="#top-service">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-image"></i> Foto & Badges Kanan</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Foto Utama</label>
                        @if(!empty($hero->hero_image))
                            <div style="margin-bottom:10px;">
                                <img src="{{ str_starts_with($hero->hero_image, 'http') ? $hero->hero_image : asset($hero->hero_image) }}"
                                     alt="Preview" style="max-height:120px; border-radius:10px; border:1px solid #ddd;">
                            </div>
                        @endif
                        <input type="file" name="hero_image" class="form-control" accept="image/*">
                        <div class="form-hint" style="margin-top:6px;">Atau masukkan URL foto:</div>
                        <input type="url" name="hero_image_url" class="form-control" style="margin-top:4px;"
                            value="{{ old('hero_image_url', $hero->hero_image ?? '') }}" placeholder="https://...">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="registered_count">Jumlah Moms Terdaftar</label>
                        <input type="text" id="registered_count" name="registered_count" class="form-control"
                            value="{{ old('registered_count', $hero->registered_count ?? '5k+') }}"
                            placeholder="contoh: 5k+">
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <div class="form-group">
                            <label class="form-label">Badge 1 Label</label>
                            <input type="text" name="comfort_label" class="form-control"
                                value="{{ old('comfort_label', $hero->comfort_label ?? 'Pijat Bayi') }}"
                                placeholder="Pijat Bayi">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Badge 1 Value</label>
                            <input type="text" name="comfort_value" class="form-control"
                                value="{{ old('comfort_value', $hero->comfort_value ?? '98% Nyaman') }}"
                                placeholder="98% Nyaman">
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <div class="form-group">
                            <label class="form-label">Badge 2 Label</label>
                            <input type="text" name="rating_label" class="form-control"
                                value="{{ old('rating_label', $hero->rating_label ?? 'Rating') }}"
                                placeholder="Rating">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Badge 2 Value</label>
                            <input type="text" name="rating_value" class="form-control"
                                value="{{ old('rating_value', $hero->rating_value ?? '4.9 / 5.0') }}"
                                placeholder="4.9 / 5.0">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title">ℹ️ Info Tampilan</div>
                </div>
                <div class="card-body">
                    <p style="font-size:13px; color:var(--text-light); line-height:1.7;">
                        Section ini ditampilkan pada landing page <strong>Guest (/guest)</strong> dan hero <strong>Member (/member)</strong>. Perubahan yang disimpan di sini akan langsung diperbarui di kedua halaman tersebut.
                    </p>
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
