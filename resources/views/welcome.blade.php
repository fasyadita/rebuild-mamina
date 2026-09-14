@extends('main.layouts.app')

@section('title', 'Mamina')

@section('content')
    @if(session('success'))
        <div id="success-popup" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; z-index: 9999;">
            <div style="background: #fffdf0; padding: 40px; border-radius: 20px; text-align: center; max-width: 400px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                <div style="background: #6bb0aa; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fa-solid fa-check" style="color: white; font-size: 30px;"></i>
                </div>
                <h2 style="color: #6bb0aa; font-family: 'Fredoka', sans-serif; font-size: 28px; margin-bottom: 15px;">Pendaftaran<br>Berhasil!</h2>
                <p style="color: #666; font-size: 14px; margin-bottom: 30px; line-height: 1.5;">
                    Terima kasih telah mendaftar. Tim kami akan segera meninjau data Anda dan menghubungi melalui WhatsApp.
                </p>
                <button onclick="document.getElementById('success-popup').style.display='none'" style="background: #6bb0aa; color: white; border: none; padding: 12px 40px; border-radius: 25px; font-weight: bold; cursor: pointer; font-family: 'Nunito', sans-serif;">
                    Tutup
                </button>
            </div>
        </div>
    @endif
    
    @include('main.landing.home')
    @include('main.landing.tentang-mamina')
    @include('main.landing.artikel')
    @include('main.landing.layanan-unggulan')
    @include('main.landing.mamina-essentials')
    @include('main.landing.gentle-living')
    @include('main.landing.lactasi-class')
    @include('main.landing.maminago')
    @include('main.landing.testimony')
    @include('main.landing.cabang')
    @include('main.landing.faq')
    {{-- Tambahkan bagian lain yang diperlukan --}}
@endsection

@push('styles')
    <!-- Styles khusus untuk landing page -->
    <style>
        /* Tambahan styles untuk landing page */
    </style>
@endpush

@push('scripts')
    <!-- Scripts khusus untuk landing page -->
    <script>
        // Script untuk landing page
    </script>
@endpush