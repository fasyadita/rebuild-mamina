<style>
    * {
        box-sizing: border-box;
        margin: 0;
    }

    .form-reservasi-page {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        background: #fffdf0;
        font-family: 'Nunito', sans-serif;
    }

    .form-reservasi-container {
        height: 100%;
        width: 100%;
        display: flex;
        margin: 0;
        padding: 0;
    }

    /* =========================================
       SIDEBAR
    ========================================= */

    .form-sidebar {
        width: 34%;
        padding: 35px 30px;
        background: #edbdb5;
        border-top-right-radius: 32px;
        border-bottom-right-radius: 32px;
        display: flex;
        flex-direction: column;
    }

    .form-sidebar-title {
        margin: 0;
        font-family: 'Fredoka', sans-serif;
        font-size: 38px;
        line-height: 1.25;
        font-weight: 500;

        color: #ffffff;
    }

    .form-sidebar-title span {
        color: #fff1bd;
    }

    .form-sidebar-description {
        width: 270px;
        margin: 10px 0 28px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 12px;
        line-height: 1.6;
    }

    /* RINGKASAN JADWAL */

    .info-reservasi {
        margin-bottom: 20px;
        padding: 14px 16px;

        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 14px;
    }

    .info-reservasi-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 8px;

        margin-bottom: 8px;

        font-size: 11px;
        color: rgba(255, 255, 255, 0.85);
    }

    .info-reservasi-row:last-child {
        margin-bottom: 0;
    }

    .info-reservasi-row strong {
        color: #fff;
        font-size: 11px;
        text-align: right;
    }


    /* =========================================
       CART ITEM
    ========================================= */

    .form-cart-item {
        width: 100%;

        padding: 14px;

        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 17px;

        background: rgba(255, 255, 255, 0.25);

        display: flex;
        align-items: center;

        gap: 14px;

        margin-bottom: 10px;
    }

    .form-cart-image {
        width: 50px;
        height: 50px;

        flex-shrink: 0;

        background: #ffffff;

        border-radius: 10px;

        overflow: hidden;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-cart-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }

    .form-cart-info {
        flex: 1;
        min-width: 0;
    }

    .form-cart-name {
        margin: 0 0 2px;

        color: #222222;

        font-size: 14px;
        font-weight: 800;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .form-cart-qty {
        margin: 0 0 2px;
        color: rgba(60, 60, 60, 0.65);
        font-size: 11px;
    }

    .form-cart-price {
        margin: 0;

        color: #4fa2a4;

        font-size: 13px;
        font-weight: 700;
    }

    .form-cart-empty {
        padding: 24px 0;

        color: rgba(255, 255, 255, 0.7);
        font-size: 12px;
        text-align: center;
    }


    /* =========================================
       SUMMARY
    ========================================= */

    .form-summary {
        margin-top: auto;
        padding: 18px;

        border: 1px solid rgba(255, 255, 255, 0.45);
        border-radius: 17px;

        background: rgba(255, 255, 255, 0.12);
    }

    .form-summary-row {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 10px;

        color: rgba(255, 255, 255, 0.9);

        font-size: 11px;
    }

    .form-summary-row:last-child {
        margin-bottom: 0;
    }

    .form-summary-total {
        margin-top: 5px;
        padding-top: 13px;

        border-top: 1px solid rgba(255, 255, 255, 0.35);

        color: #fff;
        font-size: 15px;
        font-weight: 800;
    }


    /* =========================================
       FORM CONTENT
    ========================================= */

    .form-content {
        flex: 1;

        padding: 50px 65px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-title {
        margin: 0 0 22px;

        font-family: 'Fredoka', sans-serif;

        font-size: 34px;
        line-height: 1.2;
        font-weight: 500;

        color: #55a3a4;
    }


    /* =========================================
       INPUT
    ========================================= */

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .form-field {
        margin-bottom: 12px;
    }

    .form-label {
        display: block;

        margin: 0 0 5px 2px;

        color: #666666;

        font-size: 9.5px;
        font-weight: 700;
        letter-spacing: 0.3px;
    }

    .form-input,
    .form-select,
    .form-textarea {
        width: 100%;
        height: 36px;

        padding: 0 14px;

        border: 1px solid #e8e6dc;
        border-radius: 11px;

        background: #f1f0e7;

        color: #333333;

        font-family: 'Nunito', sans-serif;
        font-size: 11px;

        outline: none;

        transition: border-color 0.2s, background 0.2s;
    }

    .form-textarea {
        height: 70px;
        padding: 10px 14px;
        resize: none;
    }

    .form-select {
        appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
    }

    .form-input::placeholder,
    .form-textarea::placeholder {
        color: #b0adb5;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        border-color: #55a3a4;
        background: #f8f8f2;
    }

    .select-wrapper-form {
        position: relative;
    }

    .select-wrapper-form .arrow {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 9px;
        color: #555;
        pointer-events: none;
    }


    /* =========================================
       SUBMIT / FOOTER
    ========================================= */

    .form-footer {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 14px;
    }

    .btn-back {
        min-width: 100px;
        height: 33px;
        padding: 0 22px;
        border: none;
        border-radius: 20px;
        background: #95a1a1;
        color: white;
        font-family: 'Nunito', sans-serif;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-back:hover {
        background: #7a8d8d;
        color: #fff;
        transform: translateY(-1px);
    }

    .form-submit {
        min-width: 160px;
        height: 33px;
        padding: 0 22px;

        border: none;
        border-radius: 20px;

        background: #55a3a4;

        color: #ffffff;

        font-family: 'Nunito', sans-serif;
        font-size: 12px;
        font-weight: 700;

        cursor: pointer;

        transition: 0.2s ease;
    }

    .form-submit:hover {
        background: #438f91;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(85, 163, 164, 0.3);
    }


    /* =========================================
       RESPONSIVE
    ========================================= */

    @media (max-width: 900px) {

        .form-reservasi-container {
            flex-direction: column;
        }

        .form-sidebar {
            width: 100%;
            min-height: auto;
            border-radius: 0 0 30px 30px;
        }

        .form-summary {
            margin-top: 20px;
        }

        .form-content {
            padding: 40px 30px;
            justify-content: flex-start;
        }
    }


    @media (max-width: 600px) {

        .form-sidebar {
            padding: 30px 20px;
        }

        .form-sidebar-title {
            font-size: 32px;
        }

        .form-content {
            padding: 35px 20px;
        }

        .form-title {
            font-size: 30px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .form-footer {
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-back,
        .form-submit {
            width: 100%;
        }
    }
</style>


<section class="form-reservasi-page">

    <div class="form-reservasi-container">


        {{-- =========================================
             SIDEBAR KERANJANG
        ========================================== --}}

        <aside class="form-sidebar">

            <h1 class="form-sidebar-title">
                Keranjang<br>
                <span>Kamu</span>
            </h1>

            <p class="form-sidebar-description">
                Lengkapi data reservasi untuk pengalaman terbaik bersama Mamina.
            </p>


            {{-- RINGKASAN JADWAL YANG DIPILIH --}}
            <div class="info-reservasi">

                <div class="info-reservasi-row">
                    <span>Outlet</span>
                    <strong>Mamina {{ $branches[$branch] ?? ucfirst($branch) }}</strong>
                </div>

                <div class="info-reservasi-row">
                    <span>Jenis</span>
                    <strong>{{ ucfirst($service) }}</strong>
                </div>

                <div class="info-reservasi-row">
                    <span>Tanggal</span>
                    <strong>{{ \Carbon\Carbon::parse($date)->translatedFormat('d M Y') }}</strong>
                </div>

                @if($time)
                <div class="info-reservasi-row">
                    <span>Sesi</span>
                    <strong>{{ $time }}</strong>
                </div>
                @endif

            </div>


            {{-- DAFTAR ITEM KERANJANG --}}
            @php
            $subtotalAll = 0;
            $totalQty = 0;
            @endphp

            @forelse($cart as $item)
            @php
            $subtotal = ($item['price'] ?? 0) * ($item['qty'] ?? 1);
            $subtotalAll += $subtotal;
            $totalQty += ($item['qty'] ?? 1);

            $imgSrc = !empty($item['image'])
            ? asset('storage/' . $item['image'])
            : 'https://placehold.co/100x100/f7d9d4/b08080?text=✨';
            @endphp

            <div class="form-cart-item">

                <div class="form-cart-image">
                    <img
                        src="{{ $imgSrc }}"
                        alt="{{ $item['name'] }}"
                        onerror="this.src='https://placehold.co/100x100/f7d9d4/b08080?text=✨'">
                </div>

                <div class="form-cart-info">
                    <h3 class="form-cart-name">{{ $item['name'] }}</h3>
                    @if(($item['qty'] ?? 1) > 1)
                    <p class="form-cart-qty">Qty {{ $item['qty'] }}</p>
                    @endif
                    <p class="form-cart-price">Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
                </div>

            </div>

            @empty

            <div class="form-cart-empty">
                🛒 Keranjang kosong
            </div>

            @endforelse


            {{-- SUMMARY --}}
            <div class="form-summary">

                <div class="form-summary-row">
                    <span>Subtotal ({{ $totalQty }} item)</span>
                    <span>Rp {{ number_format($subtotalAll, 0, ',', '.') }}</span>
                </div>

                <div class="form-summary-row">
                    <span>Biaya Layanan</span>
                    <span>Gratis</span>
                </div>

                <div class="form-summary-row form-summary-total">
                    <span>Total</span>
                    <span>Rp {{ number_format($cartTotal, 0, ',', '.') }}</span>
                </div>

            </div>

        </aside>



        {{-- =========================================
     FORM DETAIL RESERVASI
========================================== --}}

        <main class="form-content">

            <h2 class="form-title">
                Detail Reservasi
            </h2>

            @if($errors->any())
            <div style="
            background:#fff7f0;
            border:1px solid #f5c2a0;
            border-radius:11px;
            padding:12px 16px;
            font-size:12px;
            color:#b5703a;
            margin-bottom:18px;
        ">
                ⚠️ Mohon periksa kembali isian di bawah ini.

                <ul style="margin:6px 0 0 15px;">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <form action="{{ route('reservasi.submit') }}" method="POST">
                @csrf


                {{-- =========================================
             DATA RESERVASI YANG SUDAH DIPILIH
        ========================================== --}}

                <input type="hidden" name="branch" value="{{ $branch }}">
                <input type="hidden" name="service" value="{{ $service }}">
                <input type="hidden" name="date" value="{{ $date }}">
                <input type="hidden" name="time" value="{{ $time }}">


                {{-- =========================================
             NAMA CUSTOMER & NOMOR TELEPON
        ========================================== --}}

                <div class="form-row">

                    {{-- NAMA CUSTOMER --}}
                    <div class="form-field">

                        <label class="form-label" for="name">
                            Nama Customer *
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-input"
                            placeholder="Masukkan nama lengkap"
                            value="{{ old('name') }}"
                            required>

                    </div>


                    {{-- NOMOR TELEPON --}}
                    <div class="form-field">

                        <label class="form-label" for="no_tlp">
                            Nomor Telepon *
                        </label>

                        <input
                            type="tel"
                            id="no_tlp"
                            name="no_tlp"
                            class="form-input"
                            placeholder="Contoh: 081234567890"
                            value="{{ old('no_tlp') }}"
                            required>

                    </div>

                </div>


                {{-- =========================================
             USIA KEHAMILAN & NAMA ANAK
        ========================================== --}}

                <div class="form-row">

                    {{-- USIA KEHAMILAN --}}
                    <div class="form-field">

                        <label class="form-label" for="pregnancy_age">
                            Usia Kehamilan
                        </label>

                        <input
                            type="text"
                            id="pregnancy_age"
                            name="pregnancy_age"
                            class="form-input"
                            placeholder="Contoh: 7 bulan"
                            value="{{ old('pregnancy_age') }}">

                    </div>


                    {{-- NAMA ANAK --}}
                    <div class="form-field">

                        <label class="form-label" for="baby_nickname">
                            Nama Anak
                        </label>

                        <input
                            type="text"
                            id="baby_nickname"
                            name="baby_nickname"
                            class="form-input"
                            placeholder="Masukkan nama anak"
                            value="{{ old('baby_nickname') }}">

                    </div>

                </div>


                {{-- =========================================
             USIA ANAK
        ========================================== --}}

                <div class="form-field">

                    <label class="form-label" for="baby_age">
                        Usia Anak
                    </label>

                    <input
                        type="text"
                        id="baby_age"
                        name="baby_age"
                        class="form-input"
                        placeholder="Contoh: 3 bulan"
                        value="{{ old('baby_age') }}">

                </div>


                {{-- =========================================
             ALAMAT LENGKAP
        ========================================== --}}

                <div class="form-field">

                    <label class="form-label" for="address">
                        Alamat Lengkap *
                    </label>

                    <textarea
                        id="address"
                        name="address"
                        class="form-textarea"
                        placeholder="Masukkan alamat lengkap...">{{ old('address') }}</textarea>

                </div>


                {{-- =========================================
             FOOTER BUTTONS
        ========================================== --}}

                <div class="form-footer">

                    <a
                        href="{{ route('reservasi') }}"
                        class="btn-back">
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="form-submit">
                        Kirim Pengajuan Reservasi ✨
                    </button>

                </div>

            </form>

        </main>

    </div>

</section>