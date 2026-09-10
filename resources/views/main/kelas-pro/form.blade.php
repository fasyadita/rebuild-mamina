<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .form-page {
        display: flex;
        width: 100%;
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
        flex-shrink: 0;
    }

    .sidebar-title {
        font-size: 36px;
        font-family: 'Fredoka', sans-serif;
        font-weight: 600;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .sidebar-title .yellow-text {
        color: #fff2b3;
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
        min-width: 0;
    }

    .form-title {
        color: #f1a89f;
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
        margin-bottom: 15px;
        min-width: 0;
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
        min-width: 0;
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


    /* =========================
       UPLOAD
    ========================= */
    .upload-group {
        margin-bottom: 25px;
    }

    .upload-input {
        display: none;
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
        background: #ebeadf;
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

    .upload-icon i {
        font-size: 20px;
        color: white;
    }

    .upload-format {
        font-size: 11.5px;
        color: #888;
    }


    /* =========================
       TERMS
    ========================= */
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
        flex-shrink: 0;
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


    /* =========================
       BUTTON
    ========================= */
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
       SECTION HEADING
    ========================= */
    .section-heading {
        font-size: 14px;
        font-weight: 700;
        margin: 20px 0 10px;
        color: #444;
    }


    /* ==================================================
       TABLET / LAPTOP KECIL
       ================================================== */
    @media (max-width: 1100px) {

        .form-sidebar {
            width: 32%;
            padding: 50px 30px;
        }

        .sidebar-title {
            font-size: 32px;
        }

        .sidebar-description {
            font-size: 13px;
        }

        .form-content {
            padding: 45px 40px;
        }

        .form-grid {
            gap: 15px;
        }
    }


    /* ==================================================
       TABLET
       ================================================== */
    @media (max-width: 900px) {

        .form-page {
            flex-direction: column;
            min-height: auto;
        }

        /* SIDEBAR JADI BAGIAN ATAS */
        .form-sidebar {
            width: 100%;
            padding: 40px 30px;
            border-radius: 0 0 30px 30px;
        }

        .sidebar-title {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .sidebar-description {
            max-width: 700px;
            margin-bottom: 25px;
        }

        /* Benefit tetap rapi */
        .benefit-card {
            margin-bottom: 10px;
        }

        /* FORM */
        .form-content {
            width: 100%;
            padding: 40px 30px;
        }

        .form-title {
            font-size: 30px;
            margin-bottom: 25px;
        }

        .form-grid {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .section-heading {
            margin-top: 20px;
        }

        .upload-area {
            padding: 30px 20px;
        }
    }


    /* ==================================================
       HP
       ================================================== */
    @media (max-width: 600px) {

        .form-page {
            width: 100%;
        }

        /* SIDEBAR */
        .form-sidebar {
            padding: 30px 20px;
            border-radius: 0 0 25px 25px;
        }

        .sidebar-title {
            font-size: 28px;
            line-height: 1.15;
            margin-bottom: 15px;
        }

        .sidebar-description {
            font-size: 12px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .benefit-card {
            padding: 12px;
            margin-bottom: 8px;
        }

        .benefit-card .icon {
            width: 36px;
            height: 36px;
            font-size: 16px;
            margin-right: 12px;
        }

        .benefit-card h4 {
            font-size: 12px;
        }

        .benefit-card p {
            font-size: 10px;
        }


        /* FORM */
        .form-content {
            padding: 30px 20px;
        }

        .form-title {
            font-size: 27px;
            margin-bottom: 22px;
        }

        .section-heading {
            font-size: 13px;
            margin: 18px 0 10px;
        }

        .form-label {
            font-size: 10.5px;
            margin-bottom: 6px;
        }

        .form-control {
            font-size: 12px;
            padding: 11px 13px;
            border-radius: 9px;
        }


        /* WHATSAPP */
        .form-group>div[style*="display: flex"] {
            gap: 6px !important;
        }

        .form-group>div[style*="display: flex"] input:first-child {
            width: 52px !important;
            flex-shrink: 0;
        }


        /* UPLOAD */
        .upload-area {
            padding: 25px 15px;
        }

        .upload-title {
            font-size: 12px;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .upload-icon {
            width: 38px;
            height: 38px;
            margin-bottom: 10px;
        }

        .upload-icon i {
            font-size: 18px;
        }

        .upload-format {
            font-size: 10px;
        }


        /* TERMS */
        .terms-wrapper {
            gap: 8px;
            margin-bottom: 25px;
        }

        .terms-checkbox {
            width: 14px;
            height: 14px;
        }

        .terms-text {
            font-size: 10px;
        }


        /* BUTTON */
        .form-footer {
            justify-content: stretch;
        }

        .btn-submit {
            width: 100%;
            padding: 11px 25px;
            font-size: 13px;
        }
    }


    /* ==================================================
       HP SANGAT KECIL
       ================================================== */
    @media (max-width: 400px) {

        .form-sidebar {
            padding: 25px 15px;
        }

        .sidebar-title {
            font-size: 25px;
        }

        .sidebar-description {
            font-size: 11px;
        }

        .form-content {
            padding: 25px 15px;
        }

        .form-title {
            font-size: 24px;
        }

        .form-control {
            padding: 10px 12px;
            font-size: 11.5px;
        }

        .upload-area {
            padding: 22px 10px;
        }

        .upload-title {
            font-size: 11px;
        }

        .terms-text {
            font-size: 9.5px;
        }
    }
</style>
<section class="form-page">

    {{-- =========================
         SIDEBAR KIRI
    ========================== --}}
    <aside class="form-sidebar">

        <h1 class="sidebar-title">
            Tingkatkan<br>
            <span class="yellow-text">Kompetensimu!</span>
        </h1>

        <p class="sidebar-description">
            Wujudkan karir fleksibel sebagai bidan,
            terapis, atau nakes profesional dengan
            penghasilan Rp 5–15 juta/bulan.
        </p>

        <div class="benefit-card">
            <div class="icon">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <h4>Waktu Fleksibel</h4>
                <p>Atur jam kerjamu sendiri</p>
            </div>
        </div>

        <div class="benefit-card">
            <div class="icon">
                <i class="fa-solid fa-wallet"></i>
            </div>
            <div>
                <h4>Penghasilan Tinggi</h4>
                <p>Lebih dari sekadar kerja</p>
            </div>
        </div>

        <div class="benefit-card">
            <div class="icon">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <h4>Waktu Fleksibel</h4>
                <p>Atur jam kerjamu sendiri</p>
            </div>
        </div>

    </aside>


    {{-- =========================
         FORM KANAN
    ========================== --}}
    <main class="form-content">

        <h2 class="form-title">
            Formulir Pendaftaran
        </h2>

        <form
            id="formPendaftaran"
            action="#"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            {{-- PROGRAM --}}
            <div class="form-group">
                <label class="form-label">Program</label>
                <input type="text" class="form-control" value="Konselor Laktasi Dasar" readonly>
            </div>


            {{-- =========================
                 1. DATA DIRI
            ========================== --}}
            <h3 class="section-heading">1. Data Diri</h3>
            <div class="form-grid">

                {{-- Nama --}}
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Contoh: Fasya Dita">
                </div>

                {{-- WhatsApp --}}
                <div class="form-group">
                    <label class="form-label">Nomor WhatsApp</label>
                    <div style="display: flex; gap: 8px;">
                        <input type="text" class="form-control" value="+62" style="width: 60px; text-align: center; font-weight: bold;" readonly>
                        <input type="text" name="whatsapp" class="form-control" placeholder="8156324895" style="flex: 1;">
                    </div>
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="nama@gmail.com">
                </div>

                {{-- Jenis Kelamin --}}
                <div class="form-group">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

            </div>


            {{-- =========================
                 2. INFORMASI PROFESI
            ========================== --}}
            <h3 class="section-heading">2. Informasi Profesi</h3>
            <div class="form-grid">

                {{-- Profesi --}}
                <div class="form-group">
                    <label class="form-label">Profesi</label>
                    <select name="profesi" class="form-control">
                        <option value="" selected disabled>Pilih Profesi</option>
                        <option value="Bidan">Bidan</option>
                        <option value="Perawat">Perawat</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Terapis">Terapis</option>
                        <option value="Tenaga Kesehatan Lainnya">Tenaga Kesehatan Lainnya</option>
                    </select>
                </div>

                {{-- Instansi --}}
                <div class="form-group">
                    <label class="form-label">Instansi</label>
                    <input type="text" name="instansi" class="form-control" placeholder="Kemenkes">
                </div>

                {{-- Kota --}}
                <div class="form-group">
                    <label class="form-label">Kota Domisili</label>
                    <input type="text" name="kota_domisili" class="form-control" placeholder="Jakarta Selatan">
                </div>

            </div>


            {{-- =========================
                 3. UPLOAD DOKUMEN
            ========================== --}}
            <div class="upload-group">
                <label class="form-label" style="margin-bottom: 10px; display: block;">Link Drive CV / STR</label>
                <div class="form-group">
                    <input type="text" id="cv" name="cv" class="form-control" placeholder="drive.google.com/file/d/..." required>
                </div>
            </div>


            {{-- =========================
                 AGREEMENT
            ========================== --}}
            <div class="terms-wrapper">
                <input type="checkbox" id="agreement" name="agreement" value="1" class="terms-checkbox">
                <label for="agreement" class="terms-text">
                    Saya menyetujui
                    <a href="#">Syarat & Ketentuan</a>
                    serta
                    <a href="#">Kebijakan Privasi</a>
                    yang berlaku sebagai Mitra MaminaGo!
                </label>
            </div>


            {{-- =========================
                 BUTTON
            ========================== --}}
            <div class="form-footer">
                <button type="submit" class="btn-submit">
                    Daftar
                </button>
            </div>

        </form>

    </main>

</section>


{{-- Font --}}
<link
    href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600&family=Nunito:wght@400;500;600;700&display=swap"
    rel="stylesheet">

{{-- Font Awesome --}}
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<script>
    document.getElementById('formPendaftaran').addEventListener('submit', function(e) {
        e.preventDefault();

        // Ambil data dari form
        const program = document.querySelector('input[value="Konselor Laktasi Dasar"]').value;
        const nama = document.querySelector('input[name="nama_lengkap"]').value;
        const whatsapp = document.querySelector('input[name="whatsapp"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const jenisKelamin = document.querySelector('select[name="jenis_kelamin"]').value;
        const profesi = document.querySelector('select[name="profesi"]').value;
        const instansi = document.querySelector('input[name="instansi"]').value;
        const kota = document.querySelector('input[name="kota_domisili"]').value;
        const cv = document.querySelector('input[name="cv"]').value;

        // Validasi checkbox agreement
        const agreement = document.getElementById('agreement').checked;
        if (!agreement) {
            alert('Anda harus menyetujui Syarat & Ketentuan.');
            return;
        }

        // Nomor WA Admin (081357046700 -> 6281357046700)
        const adminWA = "6281357046700";

        // Format pesan
        let text = `Halo Admin, saya ingin mendaftar Kelas Pro dengan data sebagai berikut:%0A%0A`;
        text += `*Program:* ${program}%0A`;
        text += `*Nama Lengkap:* ${nama}%0A`;
        text += `*WhatsApp:* +62${whatsapp}%0A`;
        text += `*Email:* ${email}%0A`;
        text += `*Jenis Kelamin:* ${jenisKelamin}%0A`;
        text += `*Profesi:* ${profesi}%0A`;
        text += `*Instansi:* ${instansi}%0A`;
        text += `*Kota Domisili:* ${kota}%0A`;
        text += `*Link CV/STR:* ${cv}%0A%0A`;
        text += `Terima kasih.`;

        // Redirect ke WhatsApp
        const waLink = `https://wa.me/${adminWA}?text=${text}`;
        window.open(waLink, '_blank');
    });
</script>