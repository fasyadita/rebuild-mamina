@extends('layouts.app')

@section('title', 'Mamina')

@section('content')
    @include('landing.home')
    @include('landing.our-service')
    @include('landing.about')
    @include('landing.why')
    @include('landing.info')
    @include('landing.testimony')
    @include('landing.cabang')
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