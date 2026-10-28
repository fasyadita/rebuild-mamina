@extends('admin.layouts.app')

@section('title', ($item ? 'Edit Terapis' : 'Tambah Terapis') . ' — Mamina CMS')
@section('page-title', $item ? 'Edit Terapis' : 'Tambah Terapis')
@section('page-subtitle', 'Kelola informasi pribadi, kontak, spesialisasi, dan foto profil terapis')

@section('content')

<form action="{{ $item ? route('admin.cms.terapis.update', $item->id) : route('admin.cms.terapis.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if($item) @method('PUT') @endif

    <div class="grid-2">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-id-card"></i> Informasi Pribadi</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{ old('name', $item->name ?? '') }}"
                            placeholder="contoh: Mifta Nurhusnah" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="username">Username <span class="required">*</span></label>
                        <input type="text" id="username" name="username" class="form-control"
                            value="{{ old('username', $item->username ?? '') }}"
                            placeholder="contoh: miftanur" required>
                        <div class="form-hint">Digunakan sebagai identitas unik terapis.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="branch_id">Penempatan Cabang <span class="required">*</span></label>
                        <select id="branch_id" name="branch_id" class="form-control" required>
                            <option value="">-- Pilih Cabang --</option>
                            @foreach($branches as $b)
                                <option value="{{ $b->id }}" {{ old('branch_id', $item->branch_id ?? '') == $b->id ? 'selected' : '' }}>
                                    {{ $b->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="roles">Peran / Spesialisasi <span class="required">*</span></label>
                        <input type="text" id="roles" name="roles" class="form-control"
                            value="{{ old('roles', $item->roles ?? 'terapis') }}"
                            placeholder="contoh: terapis atau terapis,konselor" required>
                        <div class="form-hint">Bisa diisi: 'terapis', 'konselor', atau 'terapis,konselor'.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="area">Area Layanan (Khusus Homecare/Luar Area)</label>
                        <input type="text" id="area" name="area" class="form-control"
                            value="{{ old('area', $item->area ?? '') }}"
                            placeholder="contoh: Kota Malang, Batu, dll">
                        <div class="form-hint">Isi jika terapis melayani area homecare tertentu.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="birthdate">Tanggal Lahir</label>
                        <input type="date" id="birthdate" name="birthdate" class="form-control"
                            value="{{ old('birthdate', $item->birthdate ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="address">Alamat Domisili</label>
                        <textarea id="address" name="address" class="form-control" rows="2"
                            placeholder="Alamat lengkap terapis...">{{ old('address', $item->address ?? '') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-camera"></i> Foto Profil Terapis</div>
                </div>
                <div class="card-body">
                    @php
                        $photoUrl = null;
                        if ($item && $item->thumb) {
                            if (str_starts_with($item->thumb, 'http') || str_starts_with($item->thumb, '/')) {
                                $photoUrl = $item->thumb;
                            } elseif (file_exists(public_path('storage/' . $item->thumb))) {
                                $photoUrl = asset('storage/' . $item->thumb);
                            } elseif (file_exists(public_path($item->thumb))) {
                                $photoUrl = asset($item->thumb);
                            } else {
                                $photoUrl = asset('storage/' . $item->thumb);
                            }
                        }
                    @endphp

                    @if($photoUrl)
                        <div style="margin-bottom:14px; text-align:center;">
                            <div style="font-size:12px; color:var(--text-light); margin-bottom:8px;">Foto saat ini:</div>
                            <img src="{{ $photoUrl }}" alt="preview"
                                onerror="this.onerror=null;this.src='{{ asset('img/tim-mamina.jpeg') }}';"
                                style="width:130px; height:130px; object-fit:cover; border-radius:50%; border:3px solid var(--border); box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="form-label" for="photo">Upload Foto Baru</label>
                        <input type="file" id="photo" name="photo" class="form-control" accept="image/*">
                        <div class="form-hint">Format: JPG, PNG, WEBP. Maksimum: 3MB. Disarankan foto portrait/persegi.</div>
                    </div>

                    <div style="text-align:center; font-size:12px; color:var(--text-light); margin:12px 0;">— atau —</div>

                    <div class="form-group">
                        <label class="form-label" for="photo_url">URL Foto</label>
                        <input type="text" id="photo_url" name="photo_url" class="form-control"
                            value="{{ old('photo_url', $item->thumb ?? '') }}"
                            placeholder="https://... atau path foto">
                        <div class="form-hint">Bisa gunakan link foto eksternal atau file lokal.</div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:18px">
                <div class="card-header">
                    <div class="card-title"><i class="fas fa-address-book"></i> Kontak & Media Sosial</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label" for="phone">Nomor Telepon / WhatsApp</label>
                        <input type="text" id="phone" name="phone" class="form-control"
                            value="{{ old('phone', $item->phone ?? '') }}"
                            placeholder="contoh: 08123456789">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ old('email', $item->email ?? '') }}"
                            placeholder="contoh: terapis@mamina.id">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="ig">Akun Instagram</label>
                        <div style="display:flex; align-items:center;">
                            <span style="background:#f1f5f9; border:1px solid var(--border); border-right:none; padding:10px 14px; border-radius:9px 0 0 9px; color:var(--text-light); font-weight:700;">@</span>
                            <input type="text" id="ig" name="ig" class="form-control" style="border-radius:0 9px 9px 0;"
                                value="{{ old('ig', $item->ig ?? '') }}"
                                placeholder="username_ig">
                        </div>
                    </div>

                    <div class="toggle-wrap" style="margin-top:16px;">
                        <label class="toggle">
                            <input type="checkbox" name="is_active" {{ old('is_active', ($item ? $item->is_active == 1 : true)) ? 'checked' : '' }}>
                            <span class="toggle-slider"></span>
                        </label>
                        <div>
                            <div style="font-weight:700; font-size:13.5px;">Terapis Aktif</div>
                            <div style="font-size:12px; color:var(--text-light);">Terapis dapat dipilih saat pemesanan & tampil di halaman tim</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
        <a href="{{ route('admin.cms.terapis') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Batal
        </a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ $item ? 'Perbarui Data Terapis' : 'Simpan Terapis' }}
        </button>
    </div>
</form>

@endsection
