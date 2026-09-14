<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .form-page {
        display: flex;
        width: 100%;
        height: 100%;
        min-height: calc(100vh - 90px);
        font-family: 'Nunito', sans-serif;
        background: #fffdf0;
    }

    /* =========================
       SIDEBAR KIRI
    ========================= */
    .form-sidebar {
        width: 35%;
        background: #439294;
        padding: 60px 40px;
        color: white;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        display: flex;
        flex-direction: column;
    }

    .sidebar-title {
        font-size: 36px;
        font-family: 'Fredoka', sans-serif;
        font-weight: 600;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .sidebar-description {
        font-size: 14px;
        margin-bottom: 40px;
        line-height: 1.6;
        color: #e0f2f1;
    }

    .benefit-card {
        background: rgba(255, 255, 255, 0.15);
        border-radius: 12px;
        padding: 16px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .benefit-card .icon {
        background: #fffdf0;
        color: #439294;
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .benefit-card h4 {
        font-size: 14px;
        margin-bottom: 4px;
        font-weight: 700;
        color: #fff;
    }

    .benefit-card p {
        font-size: 11px;
        color: #e0f2f1;
        margin: 0;
    }

    /* =========================
       FORM KANAN
    ========================= */
    .form-content {
        flex: 1;
        padding: 50px 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-title {
        color: #f1a89f;
        /* Warna pink/coral lembut */
        font-family: 'Fredoka', sans-serif;
        font-size: 34px;
        margin-bottom: 30px;
        font-weight: 600;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-label {
        font-size: 11px;
        font-weight: 700;
        color: #777;
        margin-bottom: 8px;
        margin-left: 2px;
    }

    .form-control {
        background: #f2f1e8;
        border: 1px solid #e4e3da;
        border-radius: 10px;
        padding: 12px 16px;
        font-size: 12.5px;
        color: #555;
        outline: none;
        transition: 0.2s;
        font-family: 'Nunito', sans-serif;
        width: 100%;
    }

    .form-control:focus {
        border-color: #439294;
        background: #fff;
    }

    .form-control::placeholder {
        color: #aaa;
    }

    select.form-control {
        appearance: none;
        -webkit-appearance: none;
        background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23000000%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 10px auto;
        padding-right: 30px;
    }

    .upload-group {
        margin-bottom: 25px;
    }

    .upload-area {
        background: #f2f1e8;
        border: 1.5px dashed #cccbc3;
        border-radius: 12px;
        padding: 35px 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .upload-area:hover {
        background: #ebeadfc9;
        border-color: #439294;
    }

    .upload-title {
        font-size: 13.5px;
        font-weight: 700;
        color: #555;
        margin-bottom: 12px;
    }

    .upload-icon {
        width: 40px;
        height: 40px;
        background: #439294;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-bottom: 12px;
    }

    .upload-icon svg {
        width: 20px;
        height: 20px;
        fill: white;
    }

    .upload-format {
        font-size: 11.5px;
        color: #888;
    }

    .terms-wrapper {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 30px;
    }

    .terms-checkbox {
        margin-top: 2px;
        accent-color: #439294;
        width: 15px;
        height: 15px;
    }

    .terms-text {
        font-size: 10.5px;
        color: #888;
        line-height: 1.5;
    }

    .terms-text a {
        color: #439294;
        text-decoration: none;
        font-weight: 700;
    }

    .terms-text a:hover {
        text-decoration: underline;
    }

    .form-footer {
        display: flex;
        justify-content: flex-end;
    }

    .btn-submit {
        background: #439294;
        color: #fff;
        border: none;
        border-radius: 20px;
        padding: 9px 32px;
        font-size: 13px;
        font-family: 'Nunito', sans-serif;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .btn-submit:hover {
        background: #377d7f;
        transform: translateY(-1px);
    }

    /* =========================
       RESPONSIVE
    ========================= */
    @media(max-width: 900px) {
        .form-page {
            flex-direction: column;
        }

        .form-sidebar {
            width: 100%;
            border-radius: 0 0 30px 30px;
            padding: 40px 30px;
        }

        .form-content {
            padding: 40px 30px;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }
    }

    @media(max-width: 600px) {
        .sidebar-title {
            font-size: 30px;
        }

        .form-title {
            font-size: 28px;
        }

        .form-content {
            padding: 30px 20px;
        }
    }
</style>

<section class="form-page">

    <aside class="form-sidebar">
        <h1 class="sidebar-title">
            Gabung Jadi<br>
            Mitra MaminaGo!
        </h1>

        <p class="sidebar-description">
            Wujudkan karir fleksibel sebagai bidan, terapis, atau nakes profesional dengan penghasilan Rp 5-15 juta/bulan.
        </p>

        <div class="benefit-card">
            <div class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>
            <div>
                <h4>Waktu Fleksibel</h4>
                <p>Atur jam kerjamu sendiri</p>
            </div>
        </div>

        <div class="benefit-card">
            <div class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                    <line x1="2" y1="10" x2="22" y2="10"></line>
                </svg>
            </div>
            <div>
                <h4>Penghasilan Tinggi</h4>
                <p>Lorem Ipsum</p>
            </div>
        </div>

        <div class="benefit-card">
            <div class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
            </div>
            <div>
                <h4>Waktu Fleksibel</h4>
                <p>Atur jam kerjamu sendiri</p>
            </div>
        </div>
    </aside>

    <main class="form-content">
        <h2 class="form-title">Formulir Pendaftaran</h2>

        <form action="{{ route('maminago.submit') }}" method="POST">
            @csrf

            <div class="form-grid">
                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Contoh: Fasya Dita" required>
                </div>

                <!-- Profesi -->
                <div class="form-group">
                    <label class="form-label" for="profesi">Profesi</label>
                    <select id="profesi" name="profesi" class="form-control" required>
                        <option value="" disabled selected>Pilih Profesi</option>
                        <option value="bidan">Bidan</option>
                        <option value="terapis">Terapis</option>
                        <option value="nakes_lain">Nakes Lainnya</option>
                    </select>
                </div>

                <!-- Kota Operasi -->
                <div class="form-group">
                    <label class="form-label" for="kota_operasi">Kota Operasi</label>
                    <input type="text" id="kota_operasi" name="kota_operasi" class="form-control" placeholder="Contoh: Jakarta Selatan" required>
                </div>

                <!-- Pengalaman (Tahun) -->
                <div class="form-group">
                    <label class="form-label" for="pengalaman">Pengalaman (Tahun)</label>
                    <input type="number" id="pengalaman" name="pengalaman" class="form-control" placeholder="Misal: 3" min="0" required>
                </div>

                <!-- Nomor WhatsApp -->
                <div class="form-group">
                    <label class="form-label" for="whatsapp">Nomor WhatsApp</label>
                    <div style="display: flex; gap: 8px;">
                        <input type="text" class="form-control" value="+62" style="width: 60px; text-align: center; font-weight: bold;" readonly>
                        <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="8156324895" style="flex: 1;" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="nama@gmail.com" required>
                </div>
            </div>

            <!-- Upload CV/STR -->
            <div class="upload-group">
                <label class="form-label" style="margin-bottom: 10px; display: block;">Link Drive CV / Sertifikat</label>
                <div class="form-group">
                    <input type="text" id="cv" name="cv" class="form-control" placeholder="drive.google.com/file/d/..." required>
                </div>
            </div>

            <!-- Syarat dan Ketentuan -->
            <div class="terms-wrapper">
                <input type="checkbox" id="terms" name="terms" class="terms-checkbox" required>
                <label for="terms" class="terms-text">
                    Saya menyetujui <a href="#">Syarat & Ketentuan</a> serta <a href="#">Kebijakan Privasi</a> yang berlaku sebagai Mitra MaminaGo!
                </label>
            </div>

            <!-- Button Daftar -->
            <div class="form-footer">
                <button type="submit" class="btn-submit">Daftar</button>
            </div>

        </form>
    </main>

    <!-- MODAL SUCCESS -->
    <div id="successModal" class="success-modal-overlay" style="display: none;">
        <div class="mamina-modal-content success-cart-modal">
            <div class="success-icon-wrapper">
                <div class="success-circle">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="bubble bubble-1"></div>
                <div class="bubble bubble-2"></div>
            </div>
            
            <h3 class="modal-title-success">Pendaftaran<br>Berhasil!</h3>
            
            <p class="modal-description-success">
                Terima kasih telah mendaftar. Tim kami akan segera meninjau data Anda dan menghubungi melalui WhatsApp.
            </p>
            
            <div class="modal-buttons-vertical">
                <button type="button" class="btn-lihat-keranjang" onclick="closeSuccessModal()">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <style>
        .success-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(50, 70, 70, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-cart-modal {
            max-width: 380px !important;
            background: #fcfaee !important;
            border-radius: 25px !important;
            padding: 45px 30px 40px !important;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            animation: modalIn 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        @keyframes modalIn {
            from { opacity: 0; transform: translateY(20px) scale(0.96); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .success-icon-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-circle {
            width: 80px;
            height: 80px;
            background: #55a3a4;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 35px;
            z-index: 2;
            position: relative;
        }
        
        .success-circle::before {
            content: '';
            position: absolute;
            inset: -15px;
            background: #eaf8f6;
            border-radius: 50%;
            z-index: -1;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
        }

        .bubble-1 {
            width: 20px;
            height: 20px;
            background: #eaf8f6;
            top: 0;
            right: 5px;
        }

        .bubble-2 {
            width: 14px;
            height: 14px;
            background: #ffffff;
            border: 2px solid #eaf8f6;
            bottom: 10px;
            left: 5px;
        }

        .modal-title-success {
            font-family: 'Fredoka', sans-serif;
            font-size: 26px;
            font-weight: 600;
            color: #55a3a4;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .modal-description-success {
            font-family: 'Nunito', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 30px;
        }

        .btn-lihat-keranjang {
            background: #55a3a4;
            color: #ffffff;
            border: none;
            width: 100%;
            padding: 12px 20px;
            border-radius: 20px;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-lihat-keranjang:hover {
            background: #438f91;
        }
    </style>

    <script>
        function closeSuccessModal() {
            document.getElementById('successModal').style.display = 'none';
        }
    </script>

    @if(session('wa_link'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tampilkan modal sukses
            document.getElementById('successModal').style.display = 'flex';
            
            // Buka WhatsApp di tab baru
            window.open('{!! session('wa_link') !!}', '_blank');
        });
    </script>
    @endif
</section>