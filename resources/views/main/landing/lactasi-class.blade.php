<style>
    .section {
      width: 100%;
      background: #f4f1e4;
      border-radius: 6px;
      padding: 24px;
      display: flex;
      gap: 28px;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #efd7d1;
      color: #d48779;
      font-size: 11px;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 999px;
      margin-bottom: 16px;
      text-transform: uppercase;
    }

    .badge .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #e8b8ac;
    }

    h1 {
      font-size: 34px;
      line-height: 1.2;
      color: #4f8b8b;
      margin-bottom: 14px;
      font-weight: 700;
    }

    .desc {
      color: #666;
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 22px;
      max-width: 560px;
    }

    .features {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .feature {
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }

    .icon {
      height: 28px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #4f8b8b;
      font-weight: 700;
      font-size: 16px;
      flex-shrink: 0;
    }

    .feature p {
      color: #555;
      font-size: 13px;
      line-height: 1.6;
    }

    /* RIGHT */
    .right {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .course-card {
      background: #f8f6ee;
      border: 1px solid #d8d2c0;
      border-radius: 18px;
      padding: 18px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      box-shadow: 0 1px 0 rgba(0,0,0,0.03);
    }

    .course-info h3 {
      font-size: 16px;
      color: #222;
      margin-bottom: 6px;
      font-weight: 600;
    }

    .course-info p {
      font-size: 13px;
      color: #666;
      line-height: 1.5;
      max-width: 360px;
      margin-bottom: 8px;
    }

    .price {
      color: #2b9c7f;
      font-weight: 700;
      font-size: 15px;
    }

    .course-actions {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
      justify-content: flex-end;
      min-width: 200px;
    }

    .tag {
      padding: 6px 12px;
      border-radius: 999px;
      background: #efefef;
      color: #666;
      font-size: 11px;
      white-space: nowrap;
    }

    .btn {
      background: #4f8b8b;
      color: white;
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 500;
      transition: 0.2s ease;
      white-space: nowrap;
    }

    .btn:hover {
      background: #3f7777;
    }

    .bottom-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 12px;
      margin-top: 4px;
      flex-wrap: wrap;
    }

    .btn-outline {
      background: #6f7b7b;
    }

    .btn-outline:hover {
      background: #5c6666;
    }

    @media (max-width: 900px) {
      .section {
        flex-direction: column;
      }

      h1 {
        font-size: 28px;
      }

      .course-card {
        flex-direction: column;
        align-items: flex-start;
      }

      .course-actions {
        width: 100%;
        justify-content: flex-start;
      }

      .bottom-buttons {
        justify-content: flex-start;
      }
    }
  </style>

  <section id="kelas-pro" class="section">
    <div class="left">
      <div class="badge">
        <span class="dot"></span>
        Untuk Tenaga Kesehatan
      </div>

      <h1>Tingkatkan Kompetensi Laktasimu</h1>

      <p class="desc">
        Kelas laktasi Mamina dirancang khusus untuk bidan, perawat, dokter,
        dan nakes yang ingin meningkatkan kompetensi pendampingan menyusui.
      </p>

      <div class="features">
        <div class="feature">
          <div class="icon">✓</div>
          <p>Kurikulum berbasis WHO, UNICEF, ABM Protocol & evidence-based practice terkini</p>
        </div>

        <div class="feature">
          <div class="icon">✓</div>
          <p>Sertifikat diakui oleh organisasi profesi kebidanan & keperawatan nasional</p>
        </div>

        <div class="feature">
          <div class="icon">✓</div>
          <p>Online (live Zoom) maupun offline di kota pilihan</p>
        </div>

        <div class="feature">
          <div class="icon">✓</div>
          <p>Modul, rekaman, dan akses komunitas profesional Mamina</p>
        </div>
      </div>
    </div>

    <div class="right">
      <div class="course-card">
        <div class="course-info">
          <h3>Konselor Laktasi Dasar</h3>
          <p>Anatomi, fisiologi menyusui, assessment, dan problem-solving umum untuk nakes pemula.</p>
          <div class="price">Rp 1.200.000</div>
        </div>

        <div class="course-actions">
          <span class="tag">online & offline</span>
          <a href="#" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <div class="course-card">
        <div class="course-info">
          <h3>Konselor Laktasi Dasar</h3>
          <p>Anatomi, fisiologi menyusui, assessment, dan problem-solving umum untuk nakes pemula.</p>
          <div class="price">Rp 1.200.000</div>
        </div>

        <div class="course-actions">
          <span class="tag">online & offline</span>
          <a href="#" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <div class="course-card">
        <div class="course-info">
          <h3>Konselor Laktasi Dasar</h3>
          <p>Anatomi, fisiologi menyusui, assessment, dan problem-solving umum untuk nakes pemula.</p>
          <div class="price">Rp 1.200.000</div>
        </div>

        <div class="course-actions">
          <span class="tag">offline only</span>
          <a href="#" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <div class="bottom-buttons">
        <a href="#" class="btn">Lihat Semua Kelas</a>
        <a href="#" class="btn btn-outline">Unduh Silabus</a>
      </div>
    </div>
  </section>
</body>