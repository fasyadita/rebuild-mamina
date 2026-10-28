@extends('admin.layouts.app')

@section('title', 'Dashboard — Mamina CMS')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Selamat datang di Mamina Content Management System')

@section('content')

<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 18px;
        margin-bottom: 28px;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0,0,0,.1);
    }

    .stat-icon {
        width: 44px; height: 44px;
        border-radius: 11px;
        display: flex; align-items: center; justify-content: center;
        font-size: 18px;
    }

    .stat-value {
        font-size: 28px;
        font-weight: 800;
        color: var(--dark);
        line-height: 1;
    }

    .stat-label {
        font-size: 12px;
        color: var(--text-light);
        font-weight: 600;
    }

    .cms-sections {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 18px;
    }

    .section-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 14px;
        padding: 22px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
        transition: .2s;
        text-decoration: none;
        color: inherit;
        box-shadow: 0 2px 12px rgba(0,0,0,.05);
    }

    .section-card:hover {
        border-color: var(--primary);
        box-shadow: 0 6px 20px rgba(90,169,163,.15);
        transform: translateY(-2px);
        color: inherit;
    }

    .section-icon {
        width: 48px; height: 48px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .section-title {
        font-size: 15px;
        font-weight: 800;
        color: var(--dark);
        margin-bottom: 4px;
    }

    .section-desc {
        font-size: 12.5px;
        color: var(--text-light);
        line-height: 1.5;
    }

    .section-badge {
        margin-top: 8px;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-size: 11px;
        color: var(--primary);
        font-weight: 700;
    }
</style>

<!-- CMS Sections -->
<div class="card" style="margin-bottom: 24px;">
    <div class="card-header">
        <div class="card-title">Kelola Konten Landing Page</div>
    </div>
    <div class="card-body">
        <div class="cms-sections">

            <a href="{{ route('admin.cms.hero') }}" class="section-card">
                <div class="section-icon" style="background:#EBF8FF; color:#2B6CB0">
                    <i class="fas fa-home"></i>
                </div>
                <div>
                    <div class="section-title">Hero / Home</div>
                    <div class="section-desc">Judul besar, deskripsi, teks tombol CTA utama pada landing page main.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.about') }}" class="section-card">
                <div class="section-icon" style="background:#F0FFF4; color:#276749">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div>
                    <div class="section-title">Tentang Mamina</div>
                    <div class="section-desc">Konten section "Kenapa Bunda Percaya Mamina?" beserta fitur-fitur unggulan.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.layanan') }}" class="section-card">
                <div class="section-icon" style="background:#FAF5FF; color:#6B46C1">
                    <i class="fas fa-leaf"></i>
                </div>
                <div>
                    <div class="section-title">Layanan Unggulan</div>
                    <div class="section-desc">Kartu layanan yang tampil di main dan guest landing page dengan harga.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.katalog-layanan') }}" class="section-card">
                <div class="section-icon" style="background:#E6FFFA; color:#319795">
                    <i class="fas fa-spa"></i>
                </div>
                <div>
                    <div class="section-title">Semua Layanan (Katalog)</div>
                    <div class="section-desc">Kelola detail harga, durasi, deskripsi, status aktif, dan foto semua layanan.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola ({{ $stats['semua_layanan'] ?? 0 }})</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.terapis') }}" class="section-card">
                <div class="section-icon" style="background:#FFF5F5; color:#DD6B20">
                    <i class="fas fa-user-nurse"></i>
                </div>
                <div>
                    <div class="section-title">Tim Terapis & Konselor</div>
                    <div class="section-desc">Kelola data terapis: informasi kontak, cabang, spesialisasi, dan foto profil.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola ({{ $stats['terapis'] ?? 0 }})</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.artikel') }}" class="section-card">
                <div class="section-icon" style="background:#FFF5F5; color:#C53030">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div>
                    <div class="section-title">Artikel</div>
                    <div class="section-desc">Artikel pilihan yang ditampilkan pada section artikel di landing page.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.testimony') }}" class="section-card">
                <div class="section-icon" style="background:#FFFBEB; color:#D69E2E">
                    <i class="fas fa-star"></i>
                </div>
                <div>
                    <div class="section-title">Testimoni (Testimommy)</div>
                    <div class="section-desc">Ulasan para bunda yang telah merasakan layanan Mamina.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.cabang') }}" class="section-card">
                <div class="section-icon" style="background:#FFF5F0; color:#C05621">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <div class="section-title">Cabang Mamina</div>
                    <div class="section-desc">Daftar cabang dengan alamat, jam operasional, dan info kontak.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.faq') }}" class="section-card">
                <div class="section-icon" style="background:#F7FAFC; color:#2D3748">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div>
                    <div class="section-title">FAQ</div>
                    <div class="section-desc">Pertanyaan yang sering diajukan beserta jawabannya pada landing page.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.guest-hero') }}" class="section-card">
                <div class="section-icon" style="background:#E6FFFA; color:#2C7A7B">
                    <i class="fas fa-user-clock"></i>
                </div>
                <div>
                    <div class="section-title">Guest Hero Section</div>
                    <div class="section-desc">Konten hero pada halaman guest (sebelum login) — judul, deskripsi, badge.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

            <a href="{{ route('admin.cms.settings') }}" class="section-card">
                <div class="section-icon" style="background:#EDF2F7; color:#4A5568">
                    <i class="fas fa-cog"></i>
                </div>
                <div>
                    <div class="section-title">Site Settings</div>
                    <div class="section-desc">Pengaturan umum situs: nomor WA, rating, jumlah member, dll.</div>
                    <div class="section-badge"><i class="fas fa-arrow-right"></i> Kelola</div>
                </div>
            </a>

        </div>
    </div>
</div>

@endsection
