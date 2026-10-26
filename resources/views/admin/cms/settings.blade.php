@extends('admin.layouts.app')

@section('title', 'Site Settings — Mamina CMS')
@section('page-title', 'Site Settings')
@section('page-subtitle', 'Pengaturan informasi umum situs Mamina')

@section('content')

<form action="{{ route('admin.cms.settings.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-cog"></i> Informasi Situs</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="site_name">Nama Situs</label>
                        <input type="text" id="site_name" name="site_name" class="form-control"
                            value="{{ old('site_name', $settings['site_name']->value ?? 'Mamina Baby Spa & Pijat Laktasi') }}"
                            placeholder="Mamina Baby Spa & Pijat Laktasi">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="site_tagline">Tagline</label>
                        <input type="text" id="site_tagline" name="site_tagline" class="form-control"
                            value="{{ old('site_tagline', $settings['site_tagline']->value ?? 'Comforting You') }}"
                            placeholder="Comforting You">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="whatsapp_number">Nomor WhatsApp Pusat</label>
                        <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control"
                            value="{{ old('whatsapp_number', $settings['whatsapp_number']->value ?? '081329913203') }}"
                            placeholder="081329913203">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact_email">Email Kontak</label>
                        <input type="email" id="contact_email" name="contact_email" class="form-control"
                            value="{{ old('contact_email', $settings['contact_email']->value ?? 'care@mamina.id') }}"
                            placeholder="care@mamina.id">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-star"></i> Rating & Testimoni</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="rating_value">Nilai Rating Utama</label>
                        <input type="text" id="rating_value" name="rating_value" class="form-control"
                            value="{{ old('rating_value', $settings['rating_value']->value ?? '4.9') }}"
                            placeholder="contoh: 4.9">
                        <div class="form-hint">Ditampilkan pada header bagian ulasan (Testimommy).</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="rating_subtitle">Subteks Ulasan</label>
                        <input type="text" id="rating_subtitle" name="rating_subtitle" class="form-control"
                            value="{{ old('rating_subtitle', $settings['rating_subtitle']->value ?? 'dari 1.200+ ulasan') }}"
                            placeholder="contoh: dari 1.200+ ulasan">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="instagram_username">Akun Instagram</label>
                        <input type="text" id="instagram_username" name="instagram_username" class="form-control"
                            value="{{ old('instagram_username', $settings['instagram_username']->value ?? '@mamina.id') }}"
                            placeholder="@mamina.id">
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
            <i class="fas fa-save"></i> Simpan Pengaturan
        </button>
    </div>
</form>

@endsection
