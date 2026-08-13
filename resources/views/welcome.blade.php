@extends('main.layouts.app')

@section('title', 'Mamina')

@section('content')
    @include('main.landing.home')
    @include('main.landing.tentang-mamina')
    @include('main.landing.artikel')
    @include('main.landing.layanan-unggulan')
    @include('main.landing.mamina-essentials')
    @include('main.landing.gentle-living')
    @include('main.landing.lactasi-class').
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