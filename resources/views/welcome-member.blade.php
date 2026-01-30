@extends('member.layouts.app')

@section('title', 'member')

@section('content')
@include('member.landing.home')
@include('member.landing.top-service')
@include('member.landing.service')

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