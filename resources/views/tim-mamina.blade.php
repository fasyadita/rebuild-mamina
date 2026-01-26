@extends('layouts.app')

@section('title', 'Tim Mamina')

@section('content')

<section class="tim-section">
    <h2 class="section-title">Tim Mamina Malang</h2>

    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('images/tim-mamina.jpeg') }}" alt="Tim Mamina">
            <h3>Intania Putri W., S.Tr.Keb, CPHT</h3>
            <p>Terapis & Fasilitator Prenatal Yoga</p>

            <a href="#" class="ig-btn">
                <img src="{{ asset('images/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

<section class="tim-section">
    <h2 class="section-title">Tim Mamina Kediri</h2>

    <div class="tim-grid">
        @for ($i = 0; $i < 4; $i++)
        <div class="tim-card">
            <img src="{{ asset('images/tim-mamina.jpeg') }}" alt="Tim Mamina">
            <h3>Intania Putri W., S.Tr.Keb, CPHT</h3>
            <p>Terapis & Fasilitator Prenatal Yoga</p>

            <a href="#" class="ig-btn">
                <img src="{{ asset('images/instagram.jpeg') }}">
            </a>
        </div>
        @endfor
    </div>
</section>

@endsection
