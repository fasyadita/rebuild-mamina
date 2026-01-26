@extends('layouts.app')

@section('title', 'Layanan Anak')

@section('content')

<section class="tim-section">
    <h2 class="section-title">Layanan Anak</h2>

    
    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('images/layanan-anak.jpeg') }}" alt="Layanan Anak">
            <h3>Pijat Bayi</h3>
            <h3>Rp 88.000</h3>
            <p>4050+ suka</p>
            <p>Cabang Malang</p>

            {{-- bikin button buat klik tambah --}}
            <a href="#" class="ig-btn">
                <img src="{{ asset('images/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

@endsection
