@extends('member.layouts.app')

@section('title', 'Anak')

@section('content')

<style>
    body {
        background-color: #FFFDF3;
    }

    .history-section {
        padding: 20px 20px;
        max-width: 1250px;
        margin: 0px auto;
    }

    .growth-section {
        padding: 20px 20px;
        max-width: 1250px;
        margin: 0px auto;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        margin-top: 25px;
    }

    .section-title {
        color: #5BA7A0;
        font-size: 28px;
        font-weight: 700;
        margin: 0;
    }

    .section-actions {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .refresh-btn {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #5BA7A0;
        color: white;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .3s;
    }

    .refresh-btn:hover {
        background: #4a918a;
    }

    .add-btn {
        background: #5BA7A0;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        transition: .3s;
        text-decoration: none;
    }

    .add-btn:hover {
        background: #4a918a;
        color: white;
    }

    .history-card {
        background: white;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        margin-bottom: 40px;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 0;
    }

    .custom-table thead {
        background: #FFD9D4;
    }

    .custom-table thead th {
        padding: 18px 20px;
        font-size: 15px;
        font-weight: 600;
        background: #ffdad1;
        color: #666;
        border: none;
        text-align: center;
        white-space: nowrap;
    }

    .custom-table tbody td {
        padding: 18px 20px;
        text-align: center;
        color: #666;
        border-bottom: 1px solid #f3f3f3;
        vertical-align: middle;
    }

    .empty-state {
        height: 140px;
        text-align: center;
        color: #b1b1b1;
        font-size: 16px;
    }

    .gender-badge {
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 500;
    }

    .male {
        background: #d8f3ff;
        color: #3190b5;
    }

    .female {
        background: #ffe0ea;
        color: #d45b87;
    }

    .custom-modal {
        border-radius: 24px;
        border: none;
        overflow: hidden;
        background: #fff;
    }

    .modal-title-custom {
        text-align: center;
        color: #5BA7A0;
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .form-group-custom {
        display: flex;
        align-items: center;
        margin-bottom: 18px;
        gap: 18px;
    }

    .form-group-custom label {
        min-width: 120px;
        font-size: 16px;
        color: #555;
        font-weight: 500;
    }

    .form-group-custom label span {
        color: #ff7d7d;
    }

    .custom-input {
        border-radius: 30px;
        border: 1px solid #d8cfcf;
        background: #f9f3f2;
        height: 45px;
        padding: 10px 18px;
        box-shadow: none !important;
    }

    textarea.custom-input {
        height: auto;
        border-radius: 20px;
    }

    .custom-input:focus {
        border-color: #5BA7A0;
    }

    .modal-btn-area {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        margin-top: 28px;
    }

    .btn-cancel {
        border: none;
        background: #A8BCBC;
        color: white;
        padding: 10px 28px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        transition: .3s;
    }

    .btn-save {
        border: none;
        background: #5BA7A0;
        color: white;
        padding: 10px 28px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        transition: .3s;
    }

    .btn-save i {
        margin-right: 5px;
    }

    .btn-cancel:hover {
        background: #93a7a7;
    }

    .btn-save:hover {
        background: #4c938d;
    }

    @media(max-width:768px) {

        .form-group-custom {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .form-group-custom label {
            min-width: 100%;
        }

        .modal-title-custom {
            font-size: 24px;
        }

        .modal-btn-area {
            justify-content: center;
        }
    }

    @media(max-width:768px) {

        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .section-title {
            font-size: 22px;
        }

        .custom-table thead th,
        .custom-table tbody td {
            font-size: 13px;
            padding: 14px 10px;
        }

        .add-btn {
            padding: 8px 14px;
            font-size: 13px;
        }
    }
</style>

<div class="history-section">
    {{-- DAFTAR ANAK --}}

    <div class="section-header">
        <h3 class="section-title">Daftar Anak</h3>
        <div class="section-actions">
            <button class="add-btn" data-bs-toggle="modal" data-bs-target="#modalAnak">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($kids as $index => $kid)

                    @php
                    $birth = $kid->birthdate
                    ? \Carbon\Carbon::parse($kid->birthdate)
                    : null;

                    $birthFormatted = $birth
                    ? $birth->translatedFormat('d F Y')
                    : '-';

                    $age = $birth
                    ? $birth->age . ' Tahun'
                    : '-';

                    $sex = $kid->sex == 'L'
                    ? 'Laki-laki'
                    : 'Perempuan';
                    @endphp

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <strong>{{ $kid->name }}</strong>
                        </td>
                        <td>{{ $birthFormatted }}</td>
                        <td>{{ $age }}</td>
                        <td>
                            <span class="gender-badge {{ $kid->sex == 'L' ? 'male' : 'female' }}">
                                {{ $sex }}
                            </span>
                        </td>
                        <td>
                            {{ $kid->description ?? '-' }}
                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="6" class="empty-state">
                            Belum ada data anak
                        </td>
                    </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="growth-section">

    {{-- PERTUMBUHAN ANAK --}}
    <div class="section-header">
        <h3 class="section-title">Pertumbuhan Anak</h3>
        <div class="section-actions">
            <button class="add-btn" data-bs-toggle="modal" data-bs-target="#modalGrowth">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="history-card">
        <div class="table-responsive">
            <table class="table custom-table">
                {{-- PERTUMBUHAN ANAK --}}
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Anak</th>
                        <th>Tanggal Cek</th>
                        <th>Berat (Kg)</th>
                        <th>Tinggi (Cm)</th>
                        <th>Lingkar Kepala (Cm)</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($growths as $index => $growth)

                    @php
                    $checkDate = $growth->check_date
                    ? \Carbon\Carbon::parse($growth->check_date)->translatedFormat('d F Y')
                    : '-';
                    @endphp

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><strong>{{ $growth->kid->name ?? '-' }}</strong></td>
                        <td>{{ $checkDate }}</td>
                        <td>{{ $growth->weight ?? '-' }}</td>
                        <td>{{ $growth->height ?? '-' }}</td>
                        <td>{{ $growth->head_circumference ?? '-' }}</td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="6" class="empty-state">
                            Belum ada data pertumbuhan anak
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH ANAK --}}
<div class="modal fade" id="modalAnak" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal">
            <div class="modal-body p-4">
                <h4 class="modal-title-custom">
                    Form Anak
                </h4>
                <form action="{{ route('member.anak.store') }}" method="POST">
                    @csrf
                    {{-- Nama --}}
                    <div class="form-group-custom">
                        <label>
                            Nama <span>*</span>
                        </label>
                        <input type="text"
                            name="name"
                            class="form-control custom-input"
                            required>
                    </div>

                    {{-- Tanggal Lahir --}}
                    <div class="form-group-custom">
                        <label>
                            Tgl Lahir <span>*</span>
                        </label>
                        <input type="date"
                            name="birthdate"
                            class="form-control custom-input"
                            required>
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="form-group-custom">
                        <label>
                            Jenis Kelamin <span>*</span>
                        </label>
                        <select name="sex"
                            class="form-select custom-input"
                            required>
                            <option value="">Pilih</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="form-group-custom">
                        <label>
                            Deskripsi
                        </label>
                        <textarea name="description"
                            rows="3"
                            class="form-control custom-input"></textarea>
                    </div>

                    {{-- BUTTON --}}
                    <div class="modal-btn-area">
                        <button type="button"
                            class="btn-cancel"
                            data-bs-dismiss="modal">
                            Batal
                        </button>

                        <button type="submit"
                            class="btn-save">
                            <i class="fa-solid fa-check"></i>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MODAL PERKEMBANGAN ANAK --}}
 
<div class="modal fade" id="modalGrowth" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal">
            <div class="modal-body p-4">
                <h4 class="modal-title-custom">
                    Form Pertumbuhan Anak
                </h4>

                <form action="{{ route('member.growth.store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    {{-- PILIH ANAK --}}
                    <div class="form-group-custom">

                        <label>
                            Anak <span>*</span>
                        </label>

                        @php
                        $authKids = auth()->check() ? auth()->user()->kids : $kids;
                        @endphp

                        <select name="kid_id"
                            class="form-select custom-input"
                            required>
                            <option value="">Pilih</option>
                            @foreach($authKids as $kid)
                            <option value="{{ $kid->id }}">
                                {{ $kid->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- TANGGAL PERIKSA --}}
                    <div class="form-group-custom">
                        <label>
                            Tanggal Periksa <span>*</span>
                        </label>
                        <input type="date"
                            name="date"
                            class="form-control custom-input"
                            required>
                    </div>

                    {{-- BERAT --}}
                    <div class="form-group-custom">
                        <label>
                            Berat Badan (kg) <span>*</span>
                        </label>
                        <input type="number"
                            step="0.1"
                            name="weight"
                            class="form-control custom-input"
                            required>
                    </div>

                    {{-- TINGGI --}}
                    <div class="form-group-custom">
                        <label>
                            Tinggi Badan (cm) <span>*</span>
                        </label>
                        <input type="number"
                            step="0.1"
                            name="height"
                            class="form-control custom-input"
                            required>
                    </div>

                    {{-- LINGKAR KEPALA --}}
                    <div class="form-group-custom">
                        <label>
                            Lingkar Kepala (cm)
                        </label>
                        <input type="number"
                            step="0.1"
                            name="head"
                            class="form-control custom-input">
                    </div>

                    {{-- BUTTON --}}
                    <div class="modal-btn-area">
                        <button type="button"
                            class="btn-cancel"
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit"
                            class="btn-save">
                            <i class="fa-solid fa-check"></i>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection