@extends('admin.layouts.app')

@section('title', ($item ? 'Edit Layanan' : 'Tambah Layanan') . ' — Mamina CMS')
@section('page-title', $item ? 'Edit Layanan' : 'Tambah Layanan')
@section('page-subtitle', 'Kelola informasi lengkap, harga, durasi, dan foto layanan')

@section('content')

<form action="{{ $item ? route('admin.cms.katalog-layanan.update', $item->id) : route('admin.cms.katalog-layanan.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if($item) @method('PUT') @endif

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-file-alt"></i> Informasi Layanan</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Nama Layanan <span class="required">*</span></label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{ old('name', $item->name ?? '') }}"
                            placeholder="contoh: Pijat Bayi / Massage Hamil" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="category_id">Kategori Layanan <span class="required">*</span></label>
                        <select id="category_id" name="category_id" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('category_id', $item->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sale_price">Harga (Rp) <span class="required">*</span></label>
                        <input type="number" id="sale_price" name="sale_price" class="form-control"
                            value="{{ old('sale_price', $item->sale_price ?? '') }}"
                            placeholder="contoh: 88000" min="0" step="500" required>
                        <div class="form-hint">Masukkan angka tanpa titik atau koma (misal: 88000).</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="duration">Durasi Perawatan (Menit)</label>
                        <input type="number" id="duration" name="duration" class="form-control"
                            value="{{ old('duration', $item->duration ?? 0) }}"
                            placeholder="contoh: 45" min="0">
                        <div class="form-hint">Isi dalam satuan menit (contoh: 45 atau 60). Kosongkan/0 jika tidak ditentukan.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="description">Deskripsi Layanan</label>
                        <textarea id="description" name="description" class="form-control" rows="4"
                            placeholder="Penjelasan manfaat dan prosedur layanan...">{{ old('description', $item->description ?? '') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-image"></i> Foto Layanan</div>
                </div>
                <div class="card-body">
                    @php
                        $photoUrl = null;
                        if ($item && $item->image) {
                            if (str_starts_with($item->image, 'http') || str_starts_with($item->image, '/')) {
                                $photoUrl = $item->image;
                            } elseif (file_exists(public_path('storage/' . $item->image))) {
                                $photoUrl = asset('storage/' . $item->image);
                            } elseif (file_exists(public_path($item->image))) {
                                $photoUrl = asset($item->image);
                            } else {
                                $photoUrl = asset('storage/' . $item->image);
                            }
                        }
                    @endphp

                    @if($photoUrl)
                        <div style="margin-bottom:14px;">
                            <div style="font-size:12px; color:var(--text-light); margin-bottom:6px;">Foto saat ini:</div>
                            <img src="{{ $photoUrl }}" alt="preview"
                                onerror="this.onerror=null;this.src='{{ asset('img/mamina.png') }}';"
                                style="width:100%; max-height:200px; object-fit:cover; border-radius:10px; border:1px solid var(--border);">
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="form-label" for="image">Upload Foto Baru</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                        <div class="form-hint">Format: JPG, PNG, WEBP. Maksimum: 3MB.</div>
                    </div>

                    <div style="text-align:center; font-size:12px; color:var(--text-light); margin:12px 0;">— atau —</div>

                    <div class="form-group">
                        <label class="form-label" for="image_url">URL Foto</label>
                        <input type="text" id="image_url" name="image_url" class="form-control"
                            value="{{ old('image_url', $item->image ?? '') }}"
                            placeholder="https://... atau path gambar">
                        <div class="form-hint">Bisa berupa link URL langsung gambar dari internet.</div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-toggle-on"></i> Status Layanan</div>
                </div>
                <div class="card-body">
                    <div class="toggle-wrap">
                        <label class="toggle">
                            <input type="checkbox" name="is_active" {{ old('is_active', ($item ? $item->is_active == '1' : true)) ? 'checked' : '' }}>
                            <span class="toggle-slider"></span>
                        </label>
                        <div>
                            <div style="font-weight:700; font-size:13.5px;">Aktif & Tampilkan</div>
                            <div style="font-size:12px; color:var(--text-light);">Layanan dapat dilihat dan dipesan pelanggan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.cms.katalog-layanan') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ $item ? 'Perbarui Layanan' : 'Simpan Layanan' }}
        </button>
    </div>
</form>

@endsection
