@extends('guest.layouts.app')

@section('title', 'join member')

@section('content')
    @include('guest.landing.home')
    @include('guest.landing.top-service')
    @include('guest.landing.service')
    
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