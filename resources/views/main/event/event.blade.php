@extends('main.layouts.app')

@section('title', 'Event Kami')

@section('content')

<section id="event" class="event-section">
    <div class="event-header">
        <h1 class="event-title">Kegiatan Kami</h1>
    </div>

    <div class="event-grid">
        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Persiapan Menyusui">
                <span class="event-label">Sedang Berlangsung</span>
            </div>
            <div class="event-content">
                <h3>Kelas Persiapan Menyusui</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Persiapan Menyusui">
                <span class="event-label">Sedang Berlangsung</span>
            </div>
            <div class="event-content">
                <h3>Kelas Persiapan Menyusui</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Persiapan Menyusui">
                <span class="event-label">Sedang Berlangsung</span>
            </div>
            <div class="event-content">
                <h3>Kelas Persiapan Menyusui</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Persiapan Menyusui">
                <span class="event-label">Sedang Berlangsung</span>
            </div>
            <div class="event-content">
                <h3>Kelas Persiapan Menyusui</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Pijat Bayi">
                <span class="event-label">Akan Datang</span>
            </div>
            <div class="event-content">
                <h3>Kelas Pijat Bayi</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Pijat Bayi">
                <span class="event-label">Akan Datang</span>
            </div>
            <div class="event-content">
                <h3>Kelas Pijat Bayi</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Pijat Bayi">
                <span class="event-label">Akan Datang</span>
            </div>
            <div class="event-content">
                <h3>Kelas Pijat Bayi</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>

        <div class="event-card">
            <div class="event-image">
                <img src="{{ asset('img/event.jpeg') }}" alt="Kelas Pijat Bayi">
                <span class="event-label">Akan Datang</span>
            </div>
            <div class="event-content">
                <h3>Kelas Pijat Bayi</h3>
                <div class="event-info">
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        <span>16 Januari 2026</span>
                    </div>
                    <div class="event-time">
                        <i class="fas fa-clock"></i>
                        <span>08:00 - 11:00</span>
                    </div>
                </div>
                <a href="{{ route('event.detail') }}" class="event-btn">Detail</a>
            </div>
        </div>
    </div>
</section>

<style>
    @font-face {
        font-family: 'fredoka';
        src: url('/fonts/Fredoka/static/Fredoka-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'nunito';
        src: url('/fonts/nunito/static/Nunito-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .event-section {
        padding: 60px 80px;
        background: #FFFDEB;
        min-height: 100vh;
    }

    .event-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .event-title {
        font-family: 'fredoka', sans-serif;
        font-size: 36px;
        color: #303030;
        margin: 0;
        font-weight: 600;
    }

    .event-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .event-card {
        background: #DDF5EA;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .event-image {
        position: relative;
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .event-label {
        font-family: 'fredoka', sans-serif;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.4) 100%);
        color: #3D9F9E;
        padding: 12px 14px;
        font-size: 12px;
        font-weight: 600;
    }

    .event-content {
        padding: 18px 16px 20px;
    }

    .event-content h3 {
        font-family: 'fredoka', sans-serif;
        font-size: 14px;
        color: #EE9F9B;
        margin: 0 0 12px 0;
        font-weight: 600;
        line-height: 1.4;
    }

    .event-info {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 14px;
    }

    .event-date,
    .event-time {
        font-family: 'nunito', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
        color: #303030;
    }

    .event-date i,
    .event-time i {
        color: #3D9F9E;
        font-size: 13px;
    }

    .event-btn {
        display: inline-block;
        width: 100%;
        padding: 10px;
        background: #3D9F9E;
        color: white;
        text-align: center;
        border-radius: 30px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        transition: background 0.3s ease;
    }

    .event-btn:hover {
        background: #2f7f7e;
    }

    /* ===== Responsive ===== */
    @media (max-width: 1200px) {
        .event-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .event-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .event-section {
            padding: 40px 20px;
        }
    }

    @media (max-width: 500px) {
        .event-grid {
            grid-template-columns: 1fr;
        }

        .event-title {
            font-size: 26px;
        }
    }
</style>

@endsection
