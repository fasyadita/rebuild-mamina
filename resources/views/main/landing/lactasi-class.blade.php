<style>
  * {
    box-sizing: border-box;
  }

  .kelas-section {

    width: 100%;
    min-height: calc(100vh - 80px);
    padding: 45px 40px 35px;
    background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
    font-family: 'Nunito', sans-serif;
    overflow: hidden;
  }

  .section-heading {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto 25px;
  }

  .kelas-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 45px;

    align-items: flex-start;
  }

  /* =========================
       BAGIAN KIRI
    ========================= */

  .kelas-title {
    max-width: 550px;
    color: #51a4a5;
    font-family: 'Fredoka', sans-serif;
    font-size: 36px;
    line-height: 1.25;
    font-weight: 600;
  }

  .kelas-description {
    max-width: 530px;
    margin: 5px 0 25px;
    color: #777;
    font-size: 15px;
    line-height: 1.5;
  }

  /* =========================
       FEATURE CARDS
    ========================= */

  .kelas-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    max-width: 560px;
  }

  .feature-card {
    min-height: 100px;
    padding: 20px 18px;

    border-radius: 14px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    text-align: center;
  }

  .feature-card.pink {
    background: #f8d3c8;
  }

  .feature-card.green {
    background: #d4eee6;
  }

  .feature-title {
    margin-bottom: 5px;

    color: #1f1f1f;
    font-size: 17px;
    font-weight: 800;
  }

  .feature-text {
    max-width: 220px;

    color: #888;
    font-size: 11.5px;
    line-height: 1.35;
  }

  /* =========================
       BAGIAN KANAN
    ========================= */

  .kelas-right {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .kelas-card {
    min-height: 119px;
    padding: 13px 20px 12px 92px;

    position: relative;

    background: #fffdf0;
    border: 1px solid #dedbcf;
    border-radius: 28px;

    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .kelas-card-title {
    margin: 0 0 5px;

    color: #222;
    font-size: 16px;
    font-weight: 800;
  }

  .kelas-card-description {
    max-width: 360px;
    margin: 0 0 4px;

    color: #666;
    font-size: 13px;
    line-height: 1.4;
  }

  .kelas-card-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;

    max-width: 360px;
  }

  .kelas-price {
    color: #50a1a3;
    font-size: 14px;
    font-weight: 900;
  }

  .kelas-actions {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .kelas-type {
    padding: 4px 12px;

    background: #f2f1ee;
    border: 1px solid #ddd;
    border-radius: 20px;

    color: #777;
    font-size: 10px;
    white-space: nowrap;
  }

  .btn-daftar {
    padding: 5px 13px;

    background: #58a4a5;
    border: none;
    border-radius: 20px;

    color: white;
    font-family: inherit;
    font-size: 11px;
    font-weight: 700;

    cursor: pointer;
    transition: 0.2s ease;
  }

  .btn-daftar:hover {
    background: #438e90;
    transform: translateY(-1px);
  }

  /* =========================
       BUTTON BAWAH
    ========================= */

  .kelas-buttons {
    display: flex;
    justify-content: flex-end;
    gap: 12px;

    margin-top: 2px;
  }

  .btn-semua {
    padding: 10px 22px;

    background: #58a4a5;
    border: none;
    border-radius: 25px;

    color: white;
    font-family: inherit;
    font-size: 13px;
    font-weight: 800;

    cursor: pointer;
  }

  .btn-silabus {
    padding: 10px 18px;

    background: #aec8c9;
    border: none;
    border-radius: 25px;

    color: #454f50;
    font-family: inherit;
    font-size: 13px;
    font-weight: 800;

    cursor: pointer;
  }

  .btn-semua:hover,
  .btn-silabus:hover {
    opacity: 0.9;
  }

  /* =========================
       RESPONSIVE
    ========================= */

  @media (max-width: 1100px) {

    .kelas-container {
      gap: 30px;
    }

    .kelas-title {
      font-size: 38px;
    }

    .kelas-card {
      padding-left: 55px;
    }
  }

  @media (max-width: 900px) {

    .kelas-section {
      padding: 40px 25px;
    }

    .kelas-container {
      grid-template-columns: 1fr;
    }

    .kelas-left {
      align-items: center;
      text-align: center;
    }

    .kelas-description {
      max-width: 650px;
    }

    .kelas-features {
      width: 100%;
      max-width: 650px;
    }

    .kelas-right {
      width: 100%;
      max-width: 650px;
      margin: 0 auto;
    }
  }

  @media (max-width: 600px) {

    .kelas-section {
      padding: 30px 18px;
    }

    .kelas-label {
      margin-bottom: 18px;
    }

    .kelas-label::before {
      width: 35px;
      height: 35px;
    }

    .kelas-label span {
      padding: 10px 14px;
      font-size: 12px;
    }

    .kelas-title {
      font-size: 32px;
    }

    .kelas-description {
      font-size: 13px;
    }

    .kelas-features {
      grid-template-columns: 1fr;
    }

    .feature-card {
      min-height: 90px;
    }

    .kelas-card {
      padding: 18px;
      border-radius: 22px;
    }

    .kelas-card-bottom {
      flex-wrap: wrap;
      gap: 8px;
    }

    .kelas-actions {
      width: 100%;
      justify-content: flex-end;
    }

    .kelas-buttons {
      justify-content: center;
      flex-wrap: wrap;
    }
  }
</style>


<section class="kelas-section" id="kelas-pro">
  <div class="section-heading">
    <div class="flex items-center gap-2 mb-3">

      <div class="w-6 h-6 rounded-full bg-[#FFC6B5]"></div>

      <span
        class="px-3 py-1 rounded-full
              bg-[#FFC6B5]
              text-[#B5706C]
              text-[12px]
              font-semibold
              uppercase
              tracking-widest">

        UNTUK TENAGA KESEHATAN

      </span>

    </div>
  </div>

  <div class="kelas-container">

    <div class="kelas-left">


      <h1 class="kelas-title">
        Tingkatkan Kompetensi<br>
        laktasimu
      </h1>

      <p class="kelas-description">
        Kelas laktasi Mamina dirancang khusus untuk bidan, perawat,
        dokter, dan nakes yang ingin meningkatkan kompetensi
        pendampingan menyusui.
      </p>


      {{-- FEATURE --}}
      <div class="kelas-features">

        <div class="feature-card pink">
          <div class="feature-title">
            Kurikulum Global
          </div>

          <div class="feature-text">
            Berbasis WHO, UNICEF, ABM Protocol &
            evidence-based practice terkini.
          </div>
        </div>


        <div class="feature-card pink">
          <div class="feature-title">
            Sertifikasi Resmi
          </div>

          <div class="feature-text">
            Sertifikat diakui oleh organisasi profesi
            kebidanan & keperawatan nasional.
          </div>
        </div>


        <div class="feature-card green">
          <div class="feature-title">
            Fleksibilitas Belajar
          </div>

          <div class="feature-text">
            Online (live Zoom) maupun offline di
            berbagai kota pilihan.
          </div>
        </div>


        <div class="feature-card green">
          <div class="feature-title">
            Akses Eksklusif
          </div>

          <div class="feature-text">
            Modul, rekaman, dan akses komunitas
            profesional Mamina.
          </div>
        </div>

      </div>

    </div>


    {{-- =========================
             BAGIAN KANAN
        ========================== --}}
    <div class="kelas-right">


      {{-- CARD 1 --}}
      <div class="kelas-card">

        <h3 class="kelas-card-title">
          Konselor Laktasi Dasar
        </h3>

        <p class="kelas-card-description">
          Anatomi, fisiologi menyusui, assessment, dan
          problem-solving umum untuk nakes pemula.
        </p>

        <div class="kelas-card-bottom">

          <div class="kelas-price">
            Rp 1.200.000
          </div>

          <div class="kelas-actions">

            <span class="kelas-type">
              online & offline
            </span>

            <button class="btn-daftar">
              Daftar Sekarang
            </button>

          </div>

        </div>

      </div>


      {{-- CARD 2 --}}
      <div class="kelas-card">

        <h3 class="kelas-card-title">
          Konselor Laktasi Dasar
        </h3>

        <p class="kelas-card-description">
          Anatomi, fisiologi menyusui, assessment, dan
          problem-solving umum untuk nakes pemula.
        </p>

        <div class="kelas-card-bottom">

          <div class="kelas-price">
            Rp 1.200.000
          </div>

          <div class="kelas-actions">

            <span class="kelas-type">
              online & offline
            </span>

            <button class="btn-daftar">
              Daftar Sekarang
            </button>

          </div>

        </div>

      </div>


      {{-- CARD 3 --}}
      <div class="kelas-card">

        <h3 class="kelas-card-title">
          Konselor Laktasi Dasar
        </h3>

        <p class="kelas-card-description">
          Anatomi, fisiologi menyusui, assessment, dan
          problem-solving umum untuk nakes pemula.
        </p>

        <div class="kelas-card-bottom">

          <div class="kelas-price">
            Rp 1.200.000
          </div>

          <div class="kelas-actions">

            <span class="kelas-type">
              offline only
            </span>

            <button class="btn-daftar">
              Daftar Sekarang
            </button>

          </div>

        </div>

      </div>


      {{-- BUTTON --}}
      <div class="kelas-buttons">

        <button class="btn-semua">
          Lihat Semua Kelas
        </button>

        <button class="btn-silabus">
          Unduh Silabus
        </button>

      </div>

    </div>

  </div>

</section>