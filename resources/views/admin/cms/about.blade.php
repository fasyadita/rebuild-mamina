@extends('admin.layouts.app')

@section('title', 'Tentang Mamina — CMS')
@section('page-title', 'Tentang Mamina')
@section('page-subtitle', 'Kelola konten section "Kenapa Bunda Percaya Mamina?"')

@section('content')

<form action="{{ route('admin.cms.about.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-thumbtack"></i> Header Section</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="badge_text">Badge Text</label>
                        <input type="text" id="badge_text" name="badge_text" class="form-control"
                            value="{{ old('badge_text', $about->badge_text ?? 'TENTANG MAMINA') }}"
                            placeholder="TENTANG MAMINA">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="title">Judul <span class="required">*</span></label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $about->title ?? 'Kenapa Bunda percaya') }}"
                            required placeholder="Kenapa Bunda percaya">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="title_highlight">Judul (Bagian Warna)</label>
                        <input type="text" id="title_highlight" name="title_highlight" class="form-control"
                            value="{{ old('title_highlight', $about->title_highlight ?? 'Mamina?') }}"
                            placeholder="Mamina?">
                        <div class="form-hint">Bagian ini akan ditampilkan dengan warna berbeda (teal).</div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="description">Deskripsi <span class="required">*</span></label>
                        <textarea id="description" name="description" class="form-control" rows="3" required
                            placeholder="Sejak 2016, Mamina hadir...">{{ old('description', $about->description ?? 'Sejak 2016, Mamina hadir sebagai mitra terpercaya ibu hamil hingga anak usia 7 tahun — dengan pendekatan gentle, tenaga bersertifikat, dan ekosistem layanan yang lengkap.') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-star"></i> Feature Cards</div>
                </div>
                <div class="card-body">
                    <div style="background:#fef9f0; border-radius:8px; padding:10px; margin-bottom:16px; font-size:12.5px; color:#b7791f;">
                        <i class="fas fa-info-circle"></i> Card-card ini tampil di sisi kiri section about.
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card 1 — Judul</label>
                        <input type="text" name="card1_title" class="form-control"
                            value="{{ old('card1_title', $about->card1_title ?? 'Gentle & Comforting') }}"
                            placeholder="Gentle & Comforting">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card 1 — Deskripsi</label>
                        <textarea name="card1_desc" class="form-control" rows="2"
                            placeholder="Deskripsi card 1...">{{ old('card1_desc', $about->card1_desc ?? 'Layanan kami dirancang untuk memberikan kenyamanan nyata bagi ibu dan buah hati.') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card 2 — Judul</label>
                        <input type="text" name="card2_title" class="form-control"
                            value="{{ old('card2_title', $about->card2_title ?? 'Terapis Bersertifikat') }}"
                            placeholder="Terapis Bersertifikat">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card 2 — Deskripsi</label>
                        <textarea name="card2_desc" class="form-control" rows="2"
                            placeholder="Deskripsi card 2...">{{ old('card2_desc', $about->card2_desc ?? 'Prosedur standar, ditangani bidan & terapis dengan sertifikasi resmi nasional.') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card 3 — Judul</label>
                        <input type="text" name="card3_title" class="form-control"
                            value="{{ old('card3_title', $about->card3_title ?? 'Jangkauan Luas') }}"
                            placeholder="Jangkauan Luas">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card 3 — Deskripsi</label>
                        <textarea name="card3_desc" class="form-control" rows="2"
                            placeholder="Deskripsi card 3...">{{ old('card3_desc', $about->card3_desc ?? 'Dari Sabang hingga Merauke, hadir melalui mitra MaminaGO!') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-leaf"></i> Layanan Unggulan (List)</div>
                </div>
                <div class="card-body">
                    <div style="background:#e6fffa; border-radius:8px; padding:10px; margin-bottom:16px; font-size:12.5px; color:#2C7A7B;">
                        <i class="fas fa-info-circle"></i> 3 item list yang tampil di sisi kanan section about.
                    </div>

                    <div class="form-group">
                        <label class="form-label">Layanan 1 — Judul</label>
                        <input type="text" name="service1_title" class="form-control"
                            value="{{ old('service1_title', $about->service1_title ?? 'Dukungan Laktasi Holistik') }}"
                            placeholder="Dukungan Laktasi Holistik">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Layanan 1 — Deskripsi</label>
                        <textarea name="service1_desc" class="form-control" rows="2"
                            placeholder="Deskripsi layanan 1...">{{ old('service1_desc', $about->service1_desc ?? 'Konsultasi, pijat laktasi, dan kelas menyusui — semua dalam satu ekosistem Mamina.') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Layanan 2 — Judul</label>
                        <input type="text" name="service2_title" class="form-control"
                            value="{{ old('service2_title', $about->service2_title ?? 'Layanan 0–7 Tahun') }}"
                            placeholder="Layanan 0–7 Tahun">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Layanan 2 — Deskripsi</label>
                        <textarea name="service2_desc" class="form-control" rows="2"
                            placeholder="Deskripsi layanan 2...">{{ old('service2_desc', $about->service2_desc ?? 'Pijat bayi, baby spa, stimulasi tumbuh kembang — untuk setiap fase si kecil.') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Layanan 3 — Judul</label>
                        <input type="text" name="service3_title" class="form-control"
                            value="{{ old('service3_title', $about->service3_title ?? 'Jangkauan Nasional') }}"
                            placeholder="Jangkauan Nasional">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Layanan 3 — Deskripsi</label>
                        <textarea name="service3_desc" class="form-control" rows="2"
                            placeholder="Deskripsi layanan 3...">{{ old('service3_desc', $about->service3_desc ?? 'Dari Sabang sampai Merauke, mitra MaminaGO! siap hadir ke depan pintu rumah Bunda.') }}</textarea>
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
