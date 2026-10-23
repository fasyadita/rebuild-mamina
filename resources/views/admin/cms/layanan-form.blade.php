@extends('admin.layouts.app')

@section('title', ($item ? 'Edit' : 'Tambah') . ' Layanan — CMS')
@section('page-title', $item ? 'Edit Layanan' : 'Tambah Layanan Baru')
@section('page-subtitle', 'Kelola kartu layanan unggulan')

@section('content')

<form action="{{ $item ? route('admin.cms.layanan.update', $item->id) : route('admin.cms.layanan.store') }}"
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
                        <label class="form-label" for="title">Nama Layanan <span class="required">*</span></label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $item->title ?? '') }}"
                            placeholder="contoh: Pijat Bayi" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="description">Deskripsi <span class="required">*</span></label>
                        <textarea id="description" name="description" class="form-control" rows="4"
                            placeholder="Deskripsi singkat layanan..." required>{{ old('description', $item->description ?? '') }}</textarea>
                        <div class="form-hint">Akan tampil sebagai deskripsi kartu layanan di landing page.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="price">Harga</label>
                        <input type="text" id="price" name="price" class="form-control"
                            value="{{ old('price', $item->price ?? '') }}"
                            placeholder="contoh: Rp 88.000">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sort_order">Urutan Tampil</label>
                        <input type="number" id="sort_order" name="sort_order" class="form-control"
                            value="{{ old('sort_order', $item->sort_order ?? 0) }}"
                            placeholder="0" min="0">
                        <div class="form-hint">Semakin kecil angka, semakin duluan tampil.</div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-image"></i> Gambar</div>
                </div>
                <div class="card-body">
                    @if($item && $item->image)
                        <div style="margin-bottom:14px;">
                            <div style="font-size:12px; color:var(--text-light); margin-bottom:6px;">Gambar saat ini:</div>
                            <img src="{{ $item->image }}" alt="preview"
                                style="width:100%; max-height:180px; object-fit:cover; border-radius:10px; border:1px solid var(--border);">
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="form-label" for="image">Upload Gambar Baru</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                        <div class="form-hint">Format: JPG, PNG, WEBP. Maks: 2MB.</div>
                    </div>

                    <div style="text-align:center; font-size:12px; color:var(--text-light); margin:10px 0;">— atau —</div>

                    <div class="form-group">
                        <label class="form-label" for="image_url">URL Gambar</label>
                        <input type="text" id="image_url" name="image_url" class="form-control"
                            value="{{ old('image_url', $item->image ?? '') }}"
                            placeholder="https://...atau /img/nama.png">
                        <div class="form-hint">Bisa pakai URL gambar dari internet atau path lokal.</div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-cog"></i> Pengaturan Tampil</div>
                </div>
                <div class="card-body">
                    <div style="display:flex; flex-direction:column; gap:14px;">
                        <div class="toggle-wrap">
                            <label class="toggle">
                                <input type="checkbox" name="show_on_main" {{ old('show_on_main', $item->show_on_main ?? true) ? 'checked' : '' }}>
                                <span class="toggle-slider"></span>
                            </label>
                            <div>
                                <div style="font-weight:700; font-size:13.5px;">Tampil di Main Landing</div>
                                <div style="font-size:12px; color:var(--text-light);">Section Layanan Unggulan (beranda umum)</div>
                            </div>
                        </div>

                        <div class="toggle-wrap">
                            <label class="toggle">
                                <input type="checkbox" name="show_on_guest" {{ old('show_on_guest', $item->show_on_guest ?? true) ? 'checked' : '' }}>
                                <span class="toggle-slider"></span>
                            </label>
                            <div>
                                <div style="font-weight:700; font-size:13.5px;">Tampil di Guest Landing</div>
                                <div style="font-size:12px; color:var(--text-light);">Section Top Service (halaman guest)</div>
                            </div>
                        </div>

                        <div class="toggle-wrap">
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
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.cms.layanan') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ $item ? 'Update Layanan' : 'Simpan Layanan' }}
        </button>
    </div>
</form>

@endsection
