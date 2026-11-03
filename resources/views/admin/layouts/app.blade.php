<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin CMS') — Mamina</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #557A72;
            --primary-dark: #43635C;
            --primary-light: #EBF2F0;
            --accent: #A8706E;
            --accent-light: #F6EAE8;
            --accent-soft: #FAF7EE;
            --dark: #2C3834;
            --text: #4E5956;
            --text-light: #8E9995;
            --bg: #F8F6F0;
            --bg-card: #FFFFFF;
            --border: #EAE3D5;
            --sidebar-bg: #FAF7EE;
            --sidebar-width: 250px;
            --sidebar-collapsed-width: 64px;
            --header-height: 58px;
            --success: #557A72;
            --danger: #A8706E;
            --warning: #F6C05B;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #F8F6F0;
            color: var(--text);
            display: flex;
            min-height: 100vh;
        }

        /* ===================== SIDEBAR ===================== */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
            border-right: 1px solid #ECE4D2;
            box-shadow: 2px 0 16px rgba(0, 0, 0, .03);
            transition: width .25s ease, transform .3s ease;
        }

        .main-wrapper {
            margin-left: var(--sidebar-width);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            transition: margin-left .25s ease;
        }

        .sidebar-logo {
            padding: 16px 16px 14px;
            border-bottom: 1px solid #ECE4D2;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-close-btn {
            display: none;
            background: none;
            border: none;
            color: #A39B95;
            font-size: 16px;
            cursor: pointer;
            padding: 4px;
            border-radius: 6px;
            line-height: 1;
            transition: all .2s;
        }

        .sidebar-close-btn:hover {
            color: var(--accent);
            background: rgba(168, 112, 110, 0.1);
        }

        .sidebar-logo .logo-text {
            font-family: 'Fredoka', sans-serif;
            font-size: 23px;
            color: #A8706E;
            display: block;
            line-height: 1.1;
        }

        .sidebar-logo .logo-text .i-letter {
            color: #557A72;
        }

        .sidebar-logo .admin-badge {
            font-size: 9.5px;
            color: #A39B95;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-top: 1px;
            display: block;
            font-weight: 700;
        }

        .sidebar-nav {
            flex: 1;
            padding: 10px 10px;
            overflow-y: auto;
        }

        .nav-section-label {
            font-size: 9.5px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            color: #C29587;
            padding: 10px 10px 4px;
            font-weight: 800;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 11px;
            border-radius: 10px;
            color: #52605C;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all .2s ease;
            margin-bottom: 2px;
        }

        .nav-item i {
            width: 18px;
            text-align: center;
            font-size: 13.5px;
            flex-shrink: 0;
            color: #557A72;
            transition: color .2s ease;
        }

        .nav-item:hover {
            background: rgba(85, 122, 114, 0.08);
            color: #2D3A37;
        }

        .nav-item.active {
            background: #557A72;
            color: #FFFFFF;
            box-shadow: 0 3px 10px rgba(85, 122, 114, 0.25);
        }

        .nav-item.active i {
            color: #FFFFFF;
        }

        /* ===================== SIDEBAR COLLAPSED (MINI) ===================== */
        body.sidebar-collapsed .sidebar {
            width: var(--sidebar-collapsed-width);
        }

        body.sidebar-collapsed .main-wrapper {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* Saat collapsed pada desktop, tombol burger di topbar disembunyikan */
        @media (min-width: 993px) {
            body.sidebar-collapsed .sidebar-toggle-btn {
                display: none !important;
            }

            body:not(.sidebar-collapsed) .sidebar-logo-burger {
                display: none !important;
            }
        }

        body.sidebar-collapsed .sidebar-logo {
            padding: 12px 0;
            justify-content: center;
        }

        /* Tombol burger di dalam sidebar saat collapsed */
        .sidebar-logo-burger {
            display: none;
            background: var(--bg-card);
            border: 1px solid var(--border);
            color: var(--dark);
            width: 36px;
            height: 36px;
            border-radius: 9px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 15px;
            transition: all .2s ease;
        }

        .sidebar-logo-burger:hover {
            background: var(--primary-light);
            color: var(--primary);
            border-color: var(--primary);
        }

        body.sidebar-collapsed .sidebar-logo-burger {
            display: inline-flex !important;
        }

        body.sidebar-collapsed .sidebar-brand,
        body.sidebar-collapsed .sidebar-logo .logo-text,
        body.sidebar-collapsed .sidebar-logo .admin-badge,
        body.sidebar-collapsed .nav-section-label,
        body.sidebar-collapsed .nav-item span,
        body.sidebar-collapsed .admin-name,
        body.sidebar-collapsed .admin-role,
        body.sidebar-collapsed .btn-logout span {
            display: none !important;
        }

        body.sidebar-collapsed .sidebar-nav {
            padding: 10px 8px;
        }

        body.sidebar-collapsed .nav-item {
            justify-content: center;
            padding: 9px 0;
            margin-bottom: 3px;
            border-radius: 9px;
            position: relative;
        }

        body.sidebar-collapsed .nav-item i {
            font-size: 16px;
            margin: 0;
        }

        body.sidebar-collapsed .sidebar-footer {
            padding: 10px 8px;
        }

        body.sidebar-collapsed .admin-info {
            padding: 4px 0;
            justify-content: center;
            background: transparent;
            border: none;
            box-shadow: none;
            margin-bottom: 8px;
        }

        body.sidebar-collapsed .admin-avatar {
            width: 32px;
            height: 32px;
            font-size: 12px;
            margin: 0 auto;
        }

        body.sidebar-collapsed .btn-logout {
            padding: 8px;
            width: 100%;
        }

        /* Tooltip on hover when collapsed */
        @media (min-width: 993px) {
            body.sidebar-collapsed .nav-item:hover::after {
                content: attr(data-title);
                position: absolute;
                left: calc(100% + 10px);
                top: 50%;
                transform: translateY(-50%);
                background: #2D3A37;
                color: #FFFFFF;
                font-size: 11.5px;
                font-weight: 700;
                padding: 5px 10px;
                border-radius: 7px;
                white-space: nowrap;
                z-index: 1000;
                box-shadow: 0 4px 14px rgba(0,0,0,.15);
                pointer-events: none;
            }

            body.sidebar-collapsed .nav-item:hover::before {
                content: '';
                position: absolute;
                left: calc(100% + 5px);
                top: 50%;
                transform: translateY(-50%);
                border: 4px solid transparent;
                border-right-color: #2D3A37;
                z-index: 1000;
                pointer-events: none;
            }
        }

        .sidebar-footer {
            padding: 12px 10px 14px;
            border-top: 1px solid #ECE4D2;
            background: var(--sidebar-bg);
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 10px;
            background: #FFFFFF;
            border-radius: 12px;
            margin-bottom: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .03);
            border: 1px solid rgba(220, 214, 200, 0.45);
        }

        .admin-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #E8DDD2;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #557A72;
            font-size: 13px;
            font-weight: 800;
            flex-shrink: 0;
            overflow: hidden;
        }

        .admin-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .admin-name {
            font-size: 12px;
            font-weight: 800;
            color: #2D3734;
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .admin-role {
            font-size: 10px;
            color: #929C97;
            margin-top: 1px;
            font-weight: 500;
        }

        .btn-logout {
            display: flex;
            align-items: center;
            gap: 7px;
            width: 100%;
            padding: 9px 12px;
            background: #A8706E;
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            font-size: 12.5px;
            font-weight: 700;
            font-family: 'Nunito', sans-serif;
            cursor: pointer;
            transition: all .2s ease;
            text-decoration: none;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(168, 112, 110, 0.22);
        }

        .btn-logout:hover {
            background: #95605E;
            color: #FFFFFF;
            box-shadow: 0 4px 12px rgba(168, 112, 110, 0.3);
        }

        /* ===================== MAIN CONTENT ===================== */

        .topbar {
            height: var(--header-height);
            background: var(--bg-card);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .04);
            gap: 14px;
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
        }

        .sidebar-toggle-btn {
            display: inline-flex;
            background: var(--bg);
            border: 1px solid var(--border);
            color: var(--dark);
            width: 34px;
            height: 34px;
            border-radius: 9px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 15px;
            flex-shrink: 0;
            transition: all .2s ease;
        }

        .sidebar-toggle-btn:hover {
            background: var(--primary-light);
            color: var(--primary);
            border-color: var(--primary);
        }

        .sidebar-backdrop {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(44, 56, 52, 0.45);
            backdrop-filter: blur(2px);
            z-index: 90;
            opacity: 0;
            transition: opacity .3s ease;
        }

        .sidebar-backdrop.active {
            display: block;
            opacity: 1;
        }

        .topbar-titles {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .topbar-icon {
            width: 34px;
            height: 34px;
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .topbar-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--dark);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2;
        }

        .topbar-subtitle {
            font-size: 11.5px;
            color: var(--text-light);
            margin-top: 1px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2;
        }

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .view-site-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 7px 14px;
            background: var(--primary-light);
            color: var(--primary-dark);
            border-radius: 8px;
            font-size: 12.5px;
            font-weight: 700;
            text-decoration: none;
            transition: .2s;
        }

        .view-site-btn:hover {
            background: var(--primary);
            color: #fff;
        }

        .page-content {
            flex: 1;
            padding: 20px;
        }

        /* ===================== ALERTS ===================== */
        .alert {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #F0FFF4;
            color: #276749;
            border: 1px solid #C6F6D5;
        }

        .alert-error {
            background: #FFF5F5;
            color: #C53030;
            border: 1px solid #FED7D7;
        }

        /* ===================== CARDS ===================== */
        .card {
            background: var(--bg-card);
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .06);
            border: 1px solid var(--border);
        }

        .card-header {
            padding: 20px 24px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--dark);
        }

        .card-body {
            padding: 24px;
        }

        /* ===================== FORMS ===================== */
        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .form-label .required {
            color: var(--accent);
            margin-left: 3px;
        }

        .form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid var(--border);
            border-radius: 9px;
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            color: var(--dark);
            background: var(--bg);
            transition: border-color .2s;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--primary);
            background: #fff;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .form-hint {
            font-size: 11.5px;
            color: var(--text-light);
            margin-top: 5px;
        }

        /* ===================== BUTTONS ===================== */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 10px 20px;
            border-radius: 9px;
            font-family: 'Nunito', sans-serif;
            font-size: 13.5px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: all .2s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: #fff;
            box-shadow: 0 4px 14px rgba(63, 182, 168, .3);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(63, 182, 168, .4);
            color: #fff;
        }

        .btn-success {
            background: linear-gradient(135deg, #48BB78, #276749);
            color: #fff;
            box-shadow: 0 4px 14px rgba(72, 187, 120, .3);
        }

        .btn-danger {
            background: #FFF5F5;
            color: #C53030;
            border: 1.5px solid #FED7D7;
        }

        .btn-danger:hover {
            background: #FED7D7;
        }

        .btn-outline {
            background: transparent;
            border: 1.5px solid var(--border);
            color: var(--text);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
            border-radius: 7px;
        }

        /* ===================== TABLES ===================== */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px 16px;
            font-size: 11.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .7px;
            color: var(--text-light);
            border-bottom: 2px solid var(--border);
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            font-size: 13.5px;
            color: var(--text);
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #F7F8FC;
        }

        /* ===================== BADGES ===================== */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 3px 10px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
        }

        .badge-success {
            background: #F0FFF4;
            color: #276749;
        }

        .badge-danger {
            background: #FFF5F5;
            color: #C53030;
        }

        .badge-warning {
            background: #FFFBEB;
            color: #D69E2E;
        }

        .badge-info {
            background: #EBF8FF;
            color: #2B6CB0;
        }

        /* ===================== TOGGLE ===================== */
        .toggle-wrap {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toggle {
            position: relative;
            width: 42px;
            height: 22px;
        }

        .toggle input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            inset: 0;
            background: #CBD5E0;
            border-radius: 999px;
            cursor: pointer;
            transition: .3s;
        }

        .toggle-slider::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            left: 3px;
            top: 3px;
            background: white;
            border-radius: 50%;
            transition: .3s;
        }

        .toggle input:checked+.toggle-slider {
            background: var(--primary);
        }

        .toggle input:checked+.toggle-slider::before {
            transform: translateX(20px);
        }

        /* ===================== GRID ===================== */
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        /* ===================== RESPONSIVE BREAKPOINTS ===================== */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
                box-shadow: 4px 0 24px rgba(0, 0, 0, .15);
            }

            .sidebar-close-btn {
                display: flex;
            }

            .sidebar-toggle-btn {
                display: inline-flex;
            }

            .main-wrapper {
                margin-left: 0;
            }

            .topbar {
                padding: 0 20px;
            }

            .page-content {
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .grid-2,
            .grid-3 {
                grid-template-columns: 1fr;
            }

            .card-header {
                padding: 16px 18px;
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .card-body {
                padding: 18px;
            }

            .view-site-btn span {
                display: none;
            }

            .view-site-btn {
                padding: 8px 10px;
            }
        }

        @media (max-width: 576px) {
            .topbar {
                padding: 0 14px;
                height: 58px;
            }

            .page-content {
                padding: 14px;
            }

            .topbar-title {
                font-size: 15px;
            }

            .topbar-subtitle {
                display: none;
            }

            .card {
                border-radius: 12px;
            }

            .card-header {
                padding: 14px 16px;
            }

            .card-body {
                padding: 14px 16px;
            }

            .btn {
                padding: 8px 14px;
                font-size: 13px;
            }

            th, td {
                padding: 10px 12px;
                font-size: 12.5px;
            }
        }

        /* ===================== MISC ===================== */
        .empty-state {
            text-align: center;
            padding: 48px;
            color: var(--text-light);
        }

        .empty-state i {
            font-size: 48px;
            margin-bottom: 12px;
            opacity: .3;
        }

        .empty-state p {
            font-size: 14px;
        }
    </style>
    @stack('styles')
</head>

<body>

    <!-- Backdrop for mobile/tablet sidebar -->
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    <!-- =================== SIDEBAR =================== -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-brand">
                <span class="logo-text">mam<span class="i-letter">i</span>na</span>
                <span class="admin-badge">Content Management System</span>
            </div>
            <!-- Tombol burger saat sidebar collapsed di desktop -->
            <button type="button" class="sidebar-logo-burger" id="sidebarCollapsedBurgerBtn" aria-label="Buka Menu">
                <i class="fas fa-bars"></i>
            </button>
            <button type="button" class="sidebar-close-btn" id="sidebarCloseBtn" aria-label="Tutup Menu">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-section-label">Utama</div>
            <a href="{{ route('admin.dashboard') }}"
                class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" data-title="Dashboard">
                <i class="fas fa-chart-pie"></i> <span>Dashboard</span>
            </a>

            <div class="nav-section-label" style="margin-top:10px">Landing Page — Main</div>
            <a href="{{ route('admin.cms.hero') }}"
                class="nav-item {{ request()->routeIs('admin.cms.hero') ? 'active' : '' }}" data-title="Hero / Home">
                <i class="fas fa-home"></i> <span>Hero / Home</span>
            </a>
            <a href="{{ route('admin.cms.about') }}"
                class="nav-item {{ request()->routeIs('admin.cms.about') ? 'active' : '' }}" data-title="Tentang Mamina">
                <i class="fas fa-info-circle"></i> <span>Tentang Mamina</span>
            </a>
            <a href="{{ route('admin.cms.layanan') }}"
                class="nav-item {{ request()->routeIs('admin.cms.layanan*') ? 'active' : '' }}" data-title="Layanan Unggulan">
                <i class="fas fa-leaf"></i> <span>Layanan Unggulan</span>
            </a>
            <a href="{{ route('admin.cms.katalog-layanan') }}"
                class="nav-item {{ request()->routeIs('admin.cms.katalog-layanan*') ? 'active' : '' }}" data-title="Semua Layanan">
                <i class="fas fa-spa"></i> <span>Semua Layanan</span>
            </a>
            <a href="{{ route('admin.cms.terapis') }}"
                class="nav-item {{ request()->routeIs('admin.cms.terapis*') ? 'active' : '' }}" data-title="Tim Terapis">
                <i class="fas fa-user-nurse"></i> <span>Tim Terapis</span>
            </a>
            <a href="{{ route('admin.cms.artikel') }}"
                class="nav-item {{ request()->routeIs('admin.cms.artikel*') ? 'active' : '' }}" data-title="Artikel">
                <i class="fas fa-newspaper"></i> <span>Artikel</span>
            </a>
            <a href="{{ route('admin.cms.testimony') }}"
                class="nav-item {{ request()->routeIs('admin.cms.testimony*') ? 'active' : '' }}" data-title="Testimoni">
                <i class="fas fa-star"></i> <span>Testimoni</span>
            </a>
            <a href="{{ route('admin.cms.cabang') }}"
                class="nav-item {{ request()->routeIs('admin.cms.cabang*') ? 'active' : '' }}" data-title="Cabang">
                <i class="fas fa-map-marker-alt"></i> <span>Cabang</span>
            </a>
            <a href="{{ route('admin.cms.faq') }}"
                class="nav-item {{ request()->routeIs('admin.cms.faq*') ? 'active' : '' }}" data-title="FAQ">
                <i class="fas fa-question-circle"></i> <span>FAQ</span>
            </a>

            <div class="nav-section-label" style="margin-top:10px">Landing Page — Guest</div>
            <a href="{{ route('admin.cms.guest-hero') }}"
                class="nav-item {{ request()->routeIs('admin.cms.guest-hero*') ? 'active' : '' }}" data-title="Guest Hero Section">
                <i class="fas fa-user-clock"></i> <span>Guest Hero Section</span>
            </a>

            <div class="nav-section-label" style="margin-top:10px">Pengaturan</div>
            <a href="{{ route('admin.cms.settings') }}"
                class="nav-item {{ request()->routeIs('admin.cms.settings') ? 'active' : '' }}" data-title="Site Settings">
                <i class="fas fa-cog"></i> <span>Site Settings</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="admin-info">
                <div class="admin-avatar">
                    @if(!empty(auth('cms_admin')->user()->avatar))
                        <img src="{{ asset(auth('cms_admin')->user()->avatar) }}" alt="{{ auth('cms_admin')->user()->name }}">
                    @else
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=face" alt="Admin" onerror="this.onerror=null;this.parentElement.innerHTML='{{ substr(auth('cms_admin')->user()->name ?? 'A', 0, 1) }}'">
                    @endif
                </div>
                <div>
                    <div class="admin-name">{{ auth('cms_admin')->user()->name ?? 'Admin Mamina' }}</div>
                    <div class="admin-role">CMS Administrator</div>
                </div>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout" title="Keluar">
                    <i class="fas fa-sign-out-alt"></i> <span>Keluar</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- =================== MAIN =================== -->
    <div class="main-wrapper">
        <header class="topbar">
            <div class="topbar-left">
                <button type="button" class="sidebar-toggle-btn" id="sidebarToggleBtn" aria-label="Buka Menu">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="topbar-titles">
                    <div class="topbar-icon">
                        <i class="@yield('page-icon', 'fas fa-chart-pie')"></i>
                    </div>
                    <div>
                        <div class="topbar-title">@yield('page-title', 'Dashboard')</div>
                        <div class="topbar-subtitle">@yield('page-subtitle', 'Mamina CMS Admin Panel')</div>
                    </div>
                </div>
            </div>
            <div class="topbar-actions">
                <a href="/" target="_blank" class="view-site-btn">
                    <i class="fas fa-external-link-alt"></i> <span>Lihat Situs</span>
                </a>
            </div>
        </header>

        <main class="page-content">
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            const toggleBtn = document.getElementById('sidebarToggleBtn');
            const closeBtn = document.getElementById('sidebarCloseBtn');
            const collapsedBurgerBtn = document.getElementById('sidebarCollapsedBurgerBtn');

            // Restore collapsed state on desktop from localStorage
            const isCollapsed = localStorage.getItem('mamina_sidebar_collapsed') === 'true';
            if (isCollapsed && window.innerWidth > 992) {
                document.body.classList.add('sidebar-collapsed');
            }

            function isMobile() {
                return window.innerWidth <= 992;
            }

            function openMobileSidebar() {
                if (sidebar) sidebar.classList.add('open');
                if (backdrop) backdrop.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileSidebar() {
                if (sidebar) sidebar.classList.remove('open');
                if (backdrop) backdrop.classList.remove('active');
                document.body.style.overflow = '';
            }

            function toggleSidebar() {
                if (isMobile()) {
                    if (sidebar.classList.contains('open')) {
                        closeMobileSidebar();
                    } else {
                        openMobileSidebar();
                    }
                } else {
                    document.body.classList.toggle('sidebar-collapsed');
                    localStorage.setItem('mamina_sidebar_collapsed', document.body.classList.contains('sidebar-collapsed'));
                }
            }

            if (toggleBtn) toggleBtn.addEventListener('click', toggleSidebar);
            if (collapsedBurgerBtn) collapsedBurgerBtn.addEventListener('click', toggleSidebar);
            if (closeBtn) closeBtn.addEventListener('click', closeMobileSidebar);
            if (backdrop) backdrop.addEventListener('click', closeMobileSidebar);

            // Close on escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && isMobile() && sidebar && sidebar.classList.contains('open')) {
                    closeMobileSidebar();
                }
            });

            // Close sidebar when clicking links inside sidebar on smaller screens
            if (sidebar) {
                const navLinks = sidebar.querySelectorAll('.nav-item');
                navLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        if (isMobile()) {
                            closeMobileSidebar();
                        }
                    });
                });
            }

            // Adjust body classes on window resize
            window.addEventListener('resize', function () {
                if (!isMobile()) {
                    closeMobileSidebar();
                    const state = localStorage.getItem('mamina_sidebar_collapsed') === 'true';
                    if (state) {
                        document.body.classList.add('sidebar-collapsed');
                    }
                } else {
                    document.body.classList.remove('sidebar-collapsed');
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>