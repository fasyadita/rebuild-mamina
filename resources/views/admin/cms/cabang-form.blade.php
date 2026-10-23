@extends('admin.layouts.app')

@section('title', ($item ? 'Edit Cabang' : 'Tambah Cabang') . ' — Mamina CMS')
@section('page-title', $item ? 'Edit Cabang' : 'Tambah Cabang')
@section('page-subtitle', 'Kelola informasi cabang Mamina')

@section('content')

<form action="{{ $item ? route('admin.cms.cabang.update', $item->id) : route('admin.cms.cabang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($item)
        @method('PUT')
    @endif

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-building"></i> Informasi Cabang</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="nama_cabang">Nama Cabang <span class="required">*</span></label>
                        <input type="text" id="nama_cabang" name="nama_cabang" class="form-control"
                            value="{{ old('nama_cabang', $item->nama_cabang ?? '') }}"
                            placeholder="contoh: Mamina Cabang Malang" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="alamat">Alamat Lengkap <span class="required">*</span></label>
                        <textarea id="alamat" name="alamat" class="form-control" rows="3"
                            placeholder="Alamat lengkap cabang..." required>{{ old('alamat', $item->alamat ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="jam_operasional">Jam Operasional</label>
                        <input type="text" id="jam_operasional" name="jam_operasional" class="form-control"
                            value="{{ old('jam_operasional', $item->jam_operasional ?? 'Senin - Minggu | 08.00–19.00') }}"
                            placeholder="contoh: Senin - Minggu | 08.00–19.00">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="no_telepon">Nomor WhatsApp / Telepon</label>
                        <input type="text" id="no_telepon" name="no_telepon" class="form-control"
                            value="{{ old('no_telepon', $item->no_telepon ?? '') }}"
                            placeholder="contoh: 081329913203">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="gmaps_link">Link Google Maps</label>
                        <input type="url" id="gmaps_link" name="gmaps_link" class="form-control"
                            value="{{ old('gmaps_link', $item->gmaps_link ?? '') }}"
                            placeholder="https://maps.app.goo.gl/...">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-camera"></i> Foto Cabang & Pengaturan</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Foto Cabang</label>
                        @if(!empty($item->image))
                            <div style="margin-bottom:10px;">
                                <img src="{{ str_starts_with($item->image, 'http') ? $item->image : asset($item->image) }}"
                                     alt="Preview" style="max-height:140px; border-radius:10px; border:1px solid #ddd; object-fit:cover;">
                            </div>
                        @endif
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <div class="form-hint" style="margin-top:6px;">Atau masukkan URL gambar:</div>
                        <input type="url" name="image_url" class="form-control" style="margin-top:4px;"
                            value="{{ old('image_url', $item->image ?? '') }}" placeholder="https://...">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sort_order">Urutan Tampil</label>
                        <input type="number" id="sort_order" name="sort_order" class="form-control"
                            value="{{ old('sort_order', $item->sort_order ?? 0) }}" min="0">
                        <div class="form-hint">Angka lebih kecil tampil lebih awal.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status Aktif</label>
                        <div class="toggle-wrap">
                            <label class="toggle">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $item->is_active ?? 1) ? 'checked' : '' }}>
                                <span class="toggle-slider"></span>
                            </label>
                            <span style="font-size:13px; font-weight:600;">Aktifkan Cabang ini di Landing Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.cms.cabang') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ $item ? 'Simpan Perubahan' : 'Tambah Cabang' }}
        </button>
    </div>
</form>

@endsection
