@extends('admin.layouts.app')

@section('title', ($item ? 'Edit' : 'Tambah') . ' FAQ — CMS')
@section('page-title', $item ? 'Edit FAQ' : 'Tambah FAQ')
@section('page-subtitle', 'Kelola pertanyaan yang sering diajukan')

@section('content')

<div style="max-width: 780px;">
    <form action="{{ $item ? route('admin.cms.faq.update', $item->id) : route('admin.cms.faq.store') }}"
        method="POST">
        @csrf
        @if($item) @method('PUT') @endif

        <div class="card">
            <div class="card-header">
                <div class="card-title"><i class="fas fa-question-circle"></i> Detail FAQ</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="form-label" for="question">Pertanyaan <span class="required">*</span></label>
                    <input type="text" id="question" name="question" class="form-control"
                        value="{{ old('question', $item->question ?? '') }}"
                        placeholder="contoh: Baby Spa bisa untuk usia berapa?" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="answer">Jawaban <span class="required">*</span></label>
                    <textarea id="answer" name="answer" class="form-control" rows="6"
                        placeholder="Tulis jawaban lengkap..." required>{{ old('answer', $item->answer ?? '') }}</textarea>
                </div>

                <div class="grid-2">
                    <div class="form-group">
                        <label class="form-label" for="sort_order">Urutan Tampil</label>
                        <input type="number" id="sort_order" name="sort_order" class="form-control"
                            value="{{ old('sort_order', $item->sort_order ?? 0) }}" min="0">
                        <div class="form-hint">Semakin kecil angka, semakin duluan tampil.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <div class="toggle-wrap" style="margin-top:8px">
                            <label class="toggle">
                                <input type="checkbox" name="is_active" {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}>
                                <span class="toggle-slider"></span>
                            </label>
                            <span style="font-size:13px; font-weight:600;">Aktif / Tampil</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">
            <a href="{{ route('admin.cms.faq') }}" class="btn btn-outline">
                <i class="fas fa-arrow-left"></i> Batal
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ $item ? 'Update FAQ' : 'Simpan FAQ' }}
            </button>
        </div>
    </form>
</div>

@endsection
