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
                <label class="form-label" style="margin-bottom: 10px; display: block;">Link Drive CV / STR</label>
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

</section>