@extends('main.layouts.app')

@section('title', 'Detail Jadwal Terapis - Mamina')

@section('content')

@php
    // Generate the next 7 days dynamically starting from today
    $dates = [];
    for ($i = 0; $i < 7; $i++) {
        $dates[] = \Carbon\Carbon::now()->addDays($i);
    }
@endphp

<section class="bg-[#F7F4E8] min-h-screen py-10 px-5 font-nunito">

    <div class="max-w-6xl mx-auto">

        {{-- BACK BUTTON --}}
        <div class="mb-4">
            <a href="{{ route('jadwal-terapis') }}" class="inline-flex items-center gap-2 text-[#5AA6A5] hover:text-[#4B9594] font-semibold text-sm transition no-underline">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Jadwal
            </a>
        </div>

        {{-- TITLE --}}
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-[#62A8A5] font-fredoka">
                Jadwal Terapis
            </h2>
        </div>

        {{-- THERAPIST BADGE --}}
        <div class="max-w-xl mx-auto mb-10">
            <div class="bg-[#F2D8D5] rounded-2xl shadow-sm px-6 py-4 flex items-center justify-center gap-4">
                
                {{-- Avatar --}}
                <div class="w-14 h-14 rounded-full overflow-hidden bg-[#DDE8E2] flex items-center justify-center flex-shrink-0 shadow-sm border-2 border-white">
                    @if($terapi && !empty($terapi->thumb))
                        <img src="{{ asset($terapi->thumb) }}" alt="{{ $terapi->name }}" class="w-full h-full object-cover" onerror="this.onerror=null;this.src='';">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#2F2F2F]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 100 8 4 4 0 000-8zm-7 14a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    @endif
                </div>

                {{-- Name --}}
                <div>
                    <h3 class="text-lg font-bold text-[#2F2F2F] leading-snug m-0">
                        {{ $terapi->name ?? 'Intania Putri W., S.Tr.Keb. CPHCT' }}
                    </h3>
                </div>

            </div>
        </div>

        {{-- SCHEDULE CONTAINER --}}
        <div class="w-full">
            
            {{-- DATE CIRCLES ROW --}}
            <div class="grid grid-cols-7 gap-3 mb-6 max-w-5xl mx-auto px-4 justify-items-center">
                @foreach ($dates as $date)
                    <div class="flex flex-col items-center justify-center w-[76px] h-[76px] md:w-[90px] md:h-[90px] rounded-full bg-[#E8F7F3] shadow-sm border border-[#CBF1E8] hover:scale-105 transition duration-300">
                        <span class="text-xl md:text-2xl font-bold text-[#2F2F2F] leading-none mb-1">
                            {{ $date->format('d') }}
                        </span>
                        <span class="text-xs md:text-sm font-bold text-[#555] uppercase leading-none">
                            {{ $date->translatedFormat('M') }}
                        </span>
                    </div>
                @endforeach
            </div>

            {{-- TIME SLOTS GRID CARD --}}
            <div class="bg-white rounded-[32px] shadow-sm border border-[#E9E5D9] p-6 md:p-8 max-w-5xl mx-auto overflow-x-auto">
                <div class="grid grid-cols-7 gap-4 min-w-[700px]">
                    
                    {{-- Generate 7 columns corresponding to 7 days --}}
                    @for ($col = 0; $col < 7; $col++)
                        <div class="flex flex-col gap-4">
                            
                            {{-- Row 1: 08.00 (Booked/Grey) --}}
                            <div class="bg-[#EBEBEB] text-[#A0A0A0] border border-[#D1D1D1] rounded-xl text-center py-2.5 text-sm font-semibold select-none">
                                08.00
                            </div>

                            {{-- Row 2: 14.00 (Available/White) --}}
                            <div class="bg-white text-[#555] border border-[#62A8A5] rounded-xl text-center py-2.5 text-sm font-semibold hover:bg-[#62A8A5] hover:text-white transition cursor-pointer shadow-sm">
                                14.00
                            </div>

                            {{-- Row 3: 08.00 (Booked/Grey) --}}
                            <div class="bg-[#EBEBEB] text-[#A0A0A0] border border-[#D1D1D1] rounded-xl text-center py-2.5 text-sm font-semibold select-none">
                                08.00
                            </div>

                            {{-- Row 4: 14.00 (Available/White) --}}
                            <div class="bg-white text-[#555] border border-[#62A8A5] rounded-xl text-center py-2.5 text-sm font-semibold hover:bg-[#62A8A5] hover:text-white transition cursor-pointer shadow-sm">
                                14.00
                            </div>

                            {{-- Row 5: 08.00 (Booked/Grey) --}}
                            <div class="bg-[#EBEBEB] text-[#A0A0A0] border border-[#D1D1D1] rounded-xl text-center py-2.5 text-sm font-semibold select-none">
                                08.00
                            </div>

                            {{-- Row 6: 14.00 (Available/White) --}}
                            <div class="bg-white text-[#555] border border-[#62A8A5] rounded-xl text-center py-2.5 text-sm font-semibold hover:bg-[#62A8A5] hover:text-white transition cursor-pointer shadow-sm">
                                14.00
                            </div>

                            {{-- Row 7: 08.00 (Booked/Grey) --}}
                            <div class="bg-[#EBEBEB] text-[#A0A0A0] border border-[#D1D1D1] rounded-xl text-center py-2.5 text-sm font-semibold select-none">
                                08.00
                            </div>

                            {{-- Row 8: 14.00 (Available/White) --}}
                            <div class="bg-white text-[#555] border border-[#62A8A5] rounded-xl text-center py-2.5 text-sm font-semibold hover:bg-[#62A8A5] hover:text-white transition cursor-pointer shadow-sm">
                                14.00
                            </div>

                            {{-- Row 9: 14.00 (Available/White) --}}
                            <div class="bg-white text-[#555] border border-[#62A8A5] rounded-xl text-center py-2.5 text-sm font-semibold hover:bg-[#62A8A5] hover:text-white transition cursor-pointer shadow-sm">
                                14.00
                            </div>

                        </div>
                    @endfor

                </div>
            </div>

        </div>

    </div>

</section>

@endsection

@push('styles')
    <!-- Tailwind Play CDN for compiling dynamic styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        fredoka: ['fredoka', 'sans-serif'],
                        nunito: ['nunito', 'sans-serif'],
                    }
                }
            }
        }
    </script>
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
        
        .no-underline {
            text-decoration: none !important;
        }
    </style>
@endpush
