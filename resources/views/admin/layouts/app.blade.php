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
            --sidebar-width: 260px;
            --header-height: 64px;
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
            transition: transform .3s ease;
        }

        .sidebar-logo {
            padding: 22px 24px 18px;
            border-bottom: 1px solid #ECE4D2;
        }

        .sidebar-logo .logo-text {
            font-family: 'Fredoka', sans-serif;
            font-size: 26px;
            color: #A8706E;
            display: block;
        }

        .sidebar-logo .logo-text .i-letter {
            color: #557A72;
        }

        .sidebar-logo .admin-badge {
            font-size: 10px;
            color: #A39B95;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 2px;
            display: block;
            font-weight: 700;
        }

        .sidebar-nav {
            flex: 1;
            padding: 16px 14px;
            overflow-y: auto;
        }

        .nav-section-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.6px;
            color: #C29587;
            padding: 14px 12px 6px;
            font-weight: 800;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10.5px 14px;
            border-radius: 12px;
            color: #52605C;
            text-decoration: none;
            font-size: 13.5px;
            font-weight: 600;
            transition: all .2s ease;
            margin-bottom: 3px;
        }

        .nav-item i {
            width: 20px;
            text-align: center;
            font-size: 14px;
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
            box-shadow: 0 4px 14px rgba(85, 122, 114, 0.28);
        }

        .nav-item.active i {
            color: #FFFFFF;
        }

        .sidebar-footer {
            padding: 16px 14px 20px;
            border-top: 1px solid #ECE4D2;
            background: var(--sidebar-bg);
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            background: #FFFFFF;
            border-radius: 16px;
            margin-bottom: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .04);
            border: 1px solid rgba(220, 214, 200, 0.45);
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #E8DDD2;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #557A72;
            font-size: 14px;
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
            font-size: 13px;
            font-weight: 800;
            color: #2D3734;
            line-height: 1.2;
        }

        .admin-role {
            font-size: 10.5px;
            color: #929C97;
            margin-top: 2px;
            font-weight: 500;
        }

        .btn-logout {
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
            padding: 11px 14px;
            background: #A8706E;
            color: #FFFFFF;
            border: none;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            font-family: 'Nunito', sans-serif;
            cursor: pointer;
            transition: all .2s ease;
            text-decoration: none;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(168, 112, 110, 0.28);
        }

        .btn-logout:hover {
            background: #95605E;
            color: #FFFFFF;
            box-shadow: 0 6px 16px rgba(168, 112, 110, 0.35);
        }

        /* ===================== MAIN CONTENT ===================== */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .topbar {
            height: var(--header-height);
            background: var(--bg-card);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .04);
        }

        .topbar-title {
            font-size: 17px;
            font-weight: 800;
            color: var(--dark);
        }

        .topbar-subtitle {
            font-size: 12px;
            color: var(--text-light);
            margin-top: 1px;
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
            padding: 28px;
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

        @media (max-width: 768px) {

            .grid-2,
            .grid-3 {
                grid-template-columns: 1fr;
            }

            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-wrapper {
                margin-left: 0;
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

    <!-- =================== SIDEBAR =================== -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <span class="logo-text">mam<span class="i-letter">i</span>na</span>
            <span class="admin-badge">Content Management System</span>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-section-label">Utama</div>
            <a href="{{ route('admin.dashboard') }}"
                class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-pie"></i> Dashboard
            </a>

            <div class="nav-section-label" style="margin-top:10px">Landing Page — Main</div>
            <a href="{{ route('admin.cms.hero') }}"
                class="nav-item {{ request()->routeIs('admin.cms.hero') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Hero / Home
            </a>
            <a href="{{ route('admin.cms.about') }}"
                class="nav-item {{ request()->routeIs('admin.cms.about') ? 'active' : '' }}">
                <i class="fas fa-info-circle"></i> Tentang Mamina
            </a>
            <a href="{{ route('admin.cms.layanan') }}"
                class="nav-item {{ request()->routeIs('admin.cms.layanan*') ? 'active' : '' }}">
                <i class="fas fa-leaf"></i> Layanan Unggulan
            </a>
            <a href="{{ route('admin.cms.katalog-layanan') }}"
                class="nav-item {{ request()->routeIs('admin.cms.katalog-layanan*') ? 'active' : '' }}">
                <i class="fas fa-spa"></i> Semua Layanan
            </a>
            <a href="{{ route('admin.cms.terapis') }}"
                class="nav-item {{ request()->routeIs('admin.cms.terapis*') ? 'active' : '' }}">
                <i class="fas fa-user-nurse"></i> Tim Terapis
            </a>
            <a href="{{ route('admin.cms.artikel') }}"
                class="nav-item {{ request()->routeIs('admin.cms.artikel*') ? 'active' : '' }}">
                <i class="fas fa-newspaper"></i> Artikel
            </a>
            <a href="{{ route('admin.cms.testimony') }}"
                class="nav-item {{ request()->routeIs('admin.cms.testimony*') ? 'active' : '' }}">
                <i class="fas fa-star"></i> Testimoni
            </a>
            <a href="{{ route('admin.cms.cabang') }}"
                class="nav-item {{ request()->routeIs('admin.cms.cabang*') ? 'active' : '' }}">
                <i class="fas fa-map-marker-alt"></i> Cabang
            </a>
            <a href="{{ route('admin.cms.faq') }}"
                class="nav-item {{ request()->routeIs('admin.cms.faq*') ? 'active' : '' }}">
                <i class="fas fa-question-circle"></i> FAQ
            </a>

            <div class="nav-section-label" style="margin-top:10px">Landing Page — Guest</div>
            <a href="{{ route('admin.cms.guest-hero') }}"
                class="nav-item {{ request()->routeIs('admin.cms.guest-hero*') ? 'active' : '' }}">
                <i class="fas fa-user-clock"></i> Guest Hero Section
            </a>

            <div class="nav-section-label" style="margin-top:10px">Pengaturan</div>
            <a href="{{ route('admin.cms.settings') }}"
                class="nav-item {{ request()->routeIs('admin.cms.settings') ? 'active' : '' }}">
                <i class="fas fa-cog"></i> Site Settings
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
                <button type="submit" class="btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Keluar
                </button>
            </form>
        </div>
    </aside>

    <!-- =================== MAIN =================== -->
    <div class="main-wrapper">
        <header class="topbar">
            <div>
                <div class="topbar-title">@yield('page-title', 'Dashboard')</div>
                <div class="topbar-subtitle">@yield('page-subtitle', 'Mamina CMS Admin Panel')</div>
            </div>
            <div class="topbar-actions">
                <a href="/" target="_blank" class="view-site-btn">
                    <i class="fas fa-external-link-alt"></i> Lihat Situs
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

    @stack('scripts')
</body>

</html>