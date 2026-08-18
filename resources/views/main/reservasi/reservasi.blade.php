
<style>
    * {
        box-sizing: border-box;
        margin :0;
    }

    .reservasi-page {
        width: 100%;
        min-height: calc(100vh - 90px);
        margin: 0;
        padding: 0;
        background: #fffdf0;
        font-family: 'Nunito', sans-serif;
    }

    .reservasi-container {
        width: 100%;
        min-height: calc(100vh - 90px);
        margin: 0;
        padding: 0;
        display: flex;
    }

    /* =========================
       SIDEBAR KERANJANG
    ========================= */

    .reservasi-sidebar {
        width: 32%;
        min-height: calc(100vh - 80px);

        background: #edbdb5;

        border-top-right-radius: 32px;
        border-bottom-right-radius: 32px;

        padding: 45px 32px;

        display: flex;
        flex-direction: column;
    }

    .sidebar-title {
        margin: 0;

        font-family: 'Fredoka', sans-serif;
        font-size: 40px;
        line-height: 1.2;
        font-weight: 600;
        color: #ffffff;
    }

    .sidebar-title .highlight {
        color: #fff1bd;
    }

    .sidebar-description {
        width: 240px;
        margin: 10px 0 30px;

        color: rgba(255, 255, 255, 0.85);
        font-size: 12px;
        line-height: 1.65;
    }

    /* ITEM KERANJANG */

    .cart-item {
        padding: 15px;

        border: 1px solid rgba(255, 255, 255, 0.55);
        border-radius: 16px;

        background: rgba(255, 255, 255, 0.22);

        display: flex;
        align-items: center;
        gap: 13px;

        margin-bottom: 12px;
    }

    .cart-image {
        width: 52px;
        height: 52px;

        flex-shrink: 0;

        background: #fff;
        border-radius: 10px;

        overflow: hidden;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cart-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-info {
        flex: 1;
        min-width: 0;
    }

    .cart-name {
        margin: 0 0 2px;

        color: #3a3a3a;
        font-size: 14px;
        font-weight: 800;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .cart-qty {
        margin: 0 0 2px;

        color: rgba(60, 60, 60, 0.7);
        font-size: 11px;
    }

    .cart-price {
        margin: 0;

        color: #4fa2a4;
        font-size: 13px;
        font-weight: 700;
    }

    .cart-remove-form {
        flex-shrink: 0;
    }

    .cart-remove {
        width: 28px;
        height: 28px;

        border: none;
        border-radius: 50%;

        background: rgba(255, 255, 255, 0.75);

        color: #e6a29d;
        font-size: 13px;

        display: flex;
        align-items: center;
        justify-content: center;

        cursor: pointer;

        transition: background 0.2s;
    }

    .cart-remove:hover {
        background: #fff;
        color: #c0645e;
    }

    /* CART EMPTY */
    .cart-empty {
        padding: 30px 0;

        color: rgba(255,255,255,0.75);
        font-size: 13px;
        text-align: center;
    }

    /* SUMMARY */

    .cart-summary {
        margin-top: auto;
        padding: 20px 18px;

        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 16px;

        background: rgba(255, 255, 255, 0.12);
    }

    .summary-row {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 11px;

        color: rgba(255, 255, 255, 0.9);
        font-size: 11px;
    }

    .summary-row:last-child {
        margin-bottom: 0;
    }

    .summary-total {
        margin-top: 6px;
        padding-top: 14px;

        border-top: 1px solid rgba(255, 255, 255, 0.3);

        color: #fff;
        font-size: 15px;
        font-weight: 800;
    }


    /* =========================
       FORM RESERVASI
    ========================= */

    .reservasi-content {
        flex: 1;

        padding: 55px 70px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-title {
        margin: 0 0 32px;

        font-family: 'Fredoka', sans-serif;
        font-size: 36px;
        font-weight: 500;

        color: #55a3a4;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;

        margin: 0 0 8px 2px;

        color: #777;
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 0.3px;
    }

    /* SELECT */

    .select-wrapper {
        position: relative;
    }

    .reservation-select {
        width: 100%;
        height: 40px;

        padding: 0 42px 0 16px;

        appearance: none;
        -webkit-appearance: none;

        border: 1px solid #e4e3da;
        border-radius: 11px;

        background: #f2f1e8;

        color: #555;
        font-family: 'Nunito', sans-serif;
        font-size: 11.5px;

        cursor: pointer;
        outline: none;

        transition: border-color 0.2s;
    }

    .reservation-select:focus {
        border-color: #59a5a6;
        background: #fff;
        color: #333;
    }

    .select-arrow {
        position: absolute;
        right: 16px;
        top: 50%;

        transform: translateY(-50%);

        color: #555;
        font-size: 9px;

        pointer-events: none;
    }

    /* DATE INPUT */

    .date-input {
        width: 100%;
        height: 40px;

        padding: 0 16px;

        border: 1px solid #e4e3da;
        border-radius: 11px;

        background: #f2f1e8;

        color: #333;
        font-family: 'Nunito', sans-serif;
        font-size: 11.5px;

        outline: none;

        transition: border-color 0.2s;
    }

    .date-input:focus {
        border-color: #59a5a6;
        background: #fff;
    }

    .date-input::-webkit-calendar-picker-indicator {
        cursor: pointer;
        opacity: 0.6;
    }

    /* =========================
       SLOT WAKTU
    ========================= */

    .slot-label {
        display: block;

        margin: 0 0 10px 2px;

        color: #777;
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 0.3px;
    }

    .slot-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .slot-card {
        min-height: 66px;

        border: 1.5px solid transparent;
        border-radius: 11px;

        background: #f2f1e8;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        cursor: pointer;

        transition: all 0.2s ease;
    }

    .slot-card:hover {
        border-color: #59a5a6;
        background: #f8fffe;
    }

    .slot-card.active {
        border-color: #55a3a4;
        background: #fff;
        box-shadow: 0 2px 10px rgba(85, 163, 164, 0.15);
    }

    .slot-time {
        margin-bottom: 3px;

        color: #1f1f1f;
        font-size: 14px;
        font-weight: 800;
    }

    .slot-available {
        color: #aaa;
        font-size: 9.5px;
    }

    .slot-card.active .slot-available {
        color: #55a3a4;
        font-weight: 700;
    }

    /* =========================
       ALERT
    ========================= */

    .alert-warning {
        padding: 12px 16px;

        border-radius: 11px;
        border: 1px solid #f5c2a0;

        background: #fff7f0;

        color: #b5703a;
        font-size: 12px;

        margin-bottom: 20px;
    }

    /* =========================
       BUTTON LANJUT
    ========================= */

    .form-footer {
        margin-top: 24px;

        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .btn-kembali {
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

    .btn-kembali:hover {
        background: #7a8d8d;
        color: white;
        transform: translateY(-1px);
    }

    .btn-lanjut {
        min-width: 100px;
        height: 33px;

        padding: 0 22px;

        border: none;
        border-radius: 20px;

        background: #55a3a4;

        color: white;
        font-family: 'Nunito', sans-serif;
        font-size: 12px;
        font-weight: 700;

        cursor: pointer;

        transition: all 0.2s ease;
    }

    .btn-lanjut:hover {
        background: #438f91;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(85, 163, 164, 0.3);
    }

    .btn-lanjut:disabled {
        background: #b5c9c9;
        cursor: not-allowed;
        transform: none;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 900px) {

        .reservasi-container {
            flex-direction: column;
        }

        .reservasi-sidebar {
            width: 100%;
            min-height: auto;

            border-radius: 0 0 28px 28px;

            padding: 32px 24px;
        }

        .cart-summary {
            margin-top: 20px;
        }

        .reservasi-content {
            padding: 40px 28px;
            justify-content: flex-start;
        }
    }

    @media (max-width: 600px) {

        .sidebar-title {
            font-size: 34px;
        }

        .reservasi-content {
            padding: 32px 18px;
        }

        .form-title {
            font-size: 30px;
        }

        .slot-grid {
            grid-template-columns: 1fr;
        }

        .form-footer {
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-kembali,
        .btn-lanjut {
            width: 100%;
        }
    }
</style>


<section class="reservasi-page">

    <div class="reservasi-container">


        {{-- =============================================
             SIDEBAR KERANJANG (Kiri)
        ============================================== --}}
        <aside class="reservasi-sidebar">

            <h1 class="sidebar-title">
                Keranjang<br>
                <span class="highlight">Kamu</span>
            </h1>

            <p class="sidebar-description">
                Lengkapi informasi reservasi kamu untuk pengalaman
                terbaik bersama Mamina.
            </p>


            {{-- DAFTAR ITEM DARI SESSION CART --}}
            @php
                $subtotalAll = 0;
                $totalQty    = 0;
            @endphp

            @forelse($cart as $item)
                @php
                    $subtotal     = ($item['price'] ?? 0) * ($item['qty'] ?? 1);
                    $subtotalAll += $subtotal;
                    $totalQty    += ($item['qty'] ?? 1);

                    $imgSrc = !empty($item['image'])
                        ? asset('storage/' . $item['image'])
                        : 'https://placehold.co/100x100/f7d9d4/b08080?text=✨';
                @endphp

                <div class="cart-item">

                    <div class="cart-image">
                        <img
                            src="{{ $imgSrc }}"
                            alt="{{ $item['name'] }}"
                            onerror="this.src='https://placehold.co/100x100/f7d9d4/b08080?text=✨'"
                        >
                    </div>

                    <div class="cart-info">
                        <h3 class="cart-name">{{ $item['name'] }}</h3>
                        @if(($item['qty'] ?? 1) > 1)
                            <p class="cart-qty">Qty {{ $item['qty'] }}</p>
                        @endif
                        <p class="cart-price">Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
                    </div>

                    <form class="cart-remove-form" action="{{ route('cart.remove', $item['id']) }}" method="POST">
                        @csrf
                        <button type="submit" class="cart-remove" title="Hapus item">
                            <a class="fa-solid fa-heart">X</a>
                        </button>
                    </form>

                </div>

            @empty

                <div class="cart-empty">
                    🛒 Keranjang masih kosong.<br>
                    <small>Tambahkan layanan terlebih dahulu.</small>
                </div>

            @endforelse


            {{-- SUMMARY HARGA --}}
            <div class="cart-summary">

                <div class="summary-row">
                    <span>Subtotal ({{ $totalQty }} item)</span>
                    <span>Rp {{ number_format($subtotalAll, 0, ',', '.') }}</span>
                </div>

                <div class="summary-row">
                    <span>Biaya Layanan</span>
                    <span>Gratis</span>
                </div>

                <div class="summary-row summary-total">
                    <span>Total</span>
                    <span>Rp {{ number_format($cartTotal, 0, ',', '.') }}</span>
                </div>

            </div>

        </aside>


        {{-- =============================================
             FORM RESERVASI (Kanan)
        ============================================== --}}
        <main class="reservasi-content">

            <h2 class="form-title">Formulir Reservasi</h2>

            {{-- Alert jika keranjang kosong --}}
            @if(empty($cart))
                <div class="alert-warning">
                    ⚠️ Keranjang kamu masih kosong. Silakan tambahkan layanan terlebih dahulu sebelum melanjutkan reservasi.
                </div>
            @endif

            {{-- Flash error --}}
            @if(session('error'))
                <div class="alert-warning">
                    ⚠️ {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('reservasi.select') }}" method="POST" id="form-reservasi">
                @csrf

                {{-- PILIH CABANG --}}
                <div class="form-group">

                    <label class="form-label" for="pilih-outlet">
                        Pilih Outlet
                    </label>

                    <div class="select-wrapper">

                        <select id="pilih-outlet" name="branch" class="reservation-select" required>
                            <option value="" disabled selected>Pilih lokasi terdekat...</option>
                            @foreach($branches as $key => $label)
                                <option value="{{ $key }}">Mamina {{ $label }}</option>
                            @endforeach
                        </select>

                        <span class="select-arrow">▼</span>

                    </div>

                </div>


                {{-- PILIH JENIS RESERVASI --}}
                <div class="form-group">

                    <label class="form-label" for="pilih-reservasi">
                        Pilih Reservasi
                    </label>

                    <div class="select-wrapper">

                        <select id="pilih-reservasi" name="service" class="reservation-select" required>
                            <option value="" disabled selected>Pilih jenis reservasi...</option>
                            <option value="outlet">Outlet</option>
                            <option value="homecare">Homecare</option>
                        </select>

                        <span class="select-arrow">▼</span>

                    </div>

                </div>


                {{-- TANGGAL KUNJUNGAN --}}
                <div class="form-group">

                    <label class="form-label" for="tanggal-kunjungan">
                        Tanggal Kunjungan / Kedatangan
                    </label>

                    <input
                        type="date"
                        id="tanggal-kunjungan"
                        name="date"
                        class="date-input"
                        value="{{ date('Y-m-d') }}"
                        min="{{ date('Y-m-d') }}"
                    >

                </div>


                {{-- SLOT WAKTU --}}
                <div class="form-group">

                    <label class="slot-label">
                        Sesi Waktu Yang Tersedia
                    </label>

                    <div class="slot-grid" id="slot-grid">

                        <div class="slot-card active" data-slot="08:00 - 10:00" onclick="selectSlot(this)">
                            <div class="slot-time">08:00 – 10:00</div>
                            <div class="slot-available">4 Slot Tersedia</div>
                        </div>

                        <div class="slot-card" data-slot="10:00 - 12:00" onclick="selectSlot(this)">
                            <div class="slot-time">10:00 – 12:00</div>
                            <div class="slot-available">4 Slot Tersedia</div>
                        </div>

                        <div class="slot-card" data-slot="13:00 - 15:00" onclick="selectSlot(this)">
                            <div class="slot-time">13:00 – 15:00</div>
                            <div class="slot-available">4 Slot Tersedia</div>
                        </div>

                        <div class="slot-card" data-slot="15:00 - 17:00" onclick="selectSlot(this)">
                            <div class="slot-time">15:00 – 17:00</div>
                            <div class="slot-available">4 Slot Tersedia</div>
                        </div>

                    </div>

                    {{-- Hidden input untuk nilai slot yang dipilih --}}
                    <input type="hidden" id="selected-slot" name="time" value="08:00 - 10:00">

                </div>


                {{-- BUTTON --}}
                <div class="form-footer">

                    <a href="{{ route('keranjang') }}" class="btn-kembali">
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn-lanjut"
                        id="btn-lanjut"
                        {{ empty($cart) ? 'disabled' : '' }}
                    >
                        Lanjut
                    </button>

                </div>

            </form>

        </main>

    </div>

</section>


<script>
    function selectSlot(el) {
        // Hapus active dari semua slot
        document.querySelectorAll('.slot-card').forEach(function(card) {
            card.classList.remove('active');
        });

        // Set active ke yang diklik
        el.classList.add('active');

        // Update hidden input
        document.getElementById('selected-slot').value = el.dataset.slot;
    }
</script>
