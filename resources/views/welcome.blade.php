@extends('main.layouts.app')

@section('title', 'Mamina')

@section('content')
    @include('main.landing.home')
    @include('main.landing.about')
    @include('main.landing.why')
    @include('main.landing.info')
    @include('main.landing.testimony')
    @include('main.landing.cabang')
    @include('main.landing.artikel')
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