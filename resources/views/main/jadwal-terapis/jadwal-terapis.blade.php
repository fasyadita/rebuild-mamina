@extends('main.layouts.app')

@section('title', 'Jadwal Terapis - Mamina')

@section('content')

<section class="bg-[#F7F4E8] min-h-screen py-10 px-5">

    <div class="max-w-5xl mx-auto">

        {{-- TITLE --}}
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-[#62A8A5]">
                Jadwal Terapis
            </h2>
        </div>

        {{-- SEARCH --}}
        <div class="flex items-center justify-center gap-4 mb-10">

            {{-- Search Icon --}}
            <button
                class="w-14 h-14 rounded-full bg-[#DDE8E2] shadow flex items-center justify-center text-[#2F2F2F] text-xl">
                🔍
            </button>

            {{-- Input --}}
            <div class="relative w-full max-w-2xl">
                <input
                    type="text"
                    placeholder="Cari..."
                    class="w-full bg-[#DDE8E2] rounded-full px-6 py-4 outline-none shadow text-[#555] placeholder:text-[#9A9A9A]">

            </div>

            {{-- Filter --}}
            <button
                class="w-14 h-14 rounded-full bg-[#DDE8E2] shadow flex items-center justify-center">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 text-[#2F2F2F]"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 4a1 1 0 011-1h16a1 1 0 01.8 1.6L14 13v5a1 1 0 01-1.447.894l-2-1A1 1 0 0110 17v-4L3.2 4.6A1 1 0 013 4z" />
                </svg>

            </button>

        </div>

        {{-- CARD LIST --}}
        <div class="space-y-8">

            @forelse ($terapis as $t)

                <div
                    class="bg-[#F2D8D5] rounded-xl shadow-md px-8 py-6 flex items-center justify-between gap-10">

                    {{-- LEFT --}}
                    <div class="flex items-center gap-5 min-w-[320px]">

                        {{-- Avatar --}}
                        <div
                            class="w-16 h-16 rounded-full overflow-hidden bg-[#DDE8E2] flex items-center justify-center flex-shrink-0">

                            @if(!empty($t->thumb))
                                <img src="{{ asset($t->thumb) }}" alt="{{ $t->name }}" class="w-full h-full object-cover" onerror="this.onerror=null;this.src='';">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-[#2F2F2F]"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">

                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 100 8 4 4 0 000-8zm-7 14a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif

                        </div>

                        {{-- Name --}}
                        <div>
                            <h3 class="text-lg font-medium text-[#2F2F2F]">
                                {{ $t->name }}
                            </h3>
                            @if(!empty($t->display))
                                <span class="text-xs text-[#5A9794] font-semibold">{{ $t->display }}</span>
                            @endif
                        </div>

                    </div>

                    {{-- CENTER --}}
                    <div class="flex-1 border-l border-[#C9A9A6] pl-8">

                        {{-- Date --}}
                        <p class="text-sm text-[#555] mb-4">
                            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                        </p>

                        {{-- Schedule --}}
                        <div class="grid grid-cols-3 gap-3 max-w-md">

                            <div
                                class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                08.00
                            </div>

                            <div
                                class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                10.00
                            </div>

                            <div
                                class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                12.00
                            </div>

                            <div
                                class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                14.00
                            </div>

                            <div
                                class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                16.00
                            </div>

                            <div
                                class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                --
                            </div>

                        </div>

                    </div>

                    {{-- RIGHT --}}
                    <div class="flex items-end h-full">

                        <a href="{{ route('jadwal-terapis.detail', ['id' => $t->id]) }}"
                            class="inline-block text-center bg-[#66A9A6] hover:bg-[#5A9794] transition text-white text-sm px-6 py-2 rounded-full shadow no-underline">
                            Lihat Detail
                        </a>

                    </div>

                </div>

            @empty

                @for ($i = 0; $i < 5; $i++)

                    <div
                        class="bg-[#F2D8D5] rounded-xl shadow-md px-8 py-6 flex items-center justify-between gap-10">

                        {{-- LEFT --}}
                        <div class="flex items-center gap-5 min-w-[320px]">

                            {{-- Avatar --}}
                            <div
                                class="w-16 h-16 rounded-full bg-[#DDE8E2] flex items-center justify-center flex-shrink-0">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-[#2F2F2F]"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">

                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 100 8 4 4 0 000-8zm-7 14a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>

                            {{-- Name --}}
                            <div>
                                <h3 class="text-lg font-medium text-[#2F2F2F]">
                                    Intania Putri W., S.Tr.Keb., CPHCT
                                </h3>
                            </div>

                        </div>

                        {{-- CENTER --}}
                        <div class="flex-1 border-l border-[#C9A9A6] pl-8">

                            {{-- Date --}}
                            <p class="text-sm text-[#555] mb-4">
                                Rabu, 25 Februari 2026
                            </p>

                            {{-- Schedule --}}
                            <div class="grid grid-cols-3 gap-3 max-w-md">

                                <div
                                    class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                    08.00
                                </div>

                                <div
                                    class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                    10.00
                                </div>

                                <div
                                    class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                    12.00
                                </div>

                                <div
                                    class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                    14.00
                                </div>

                                <div
                                    class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                    16.00
                                </div>

                                <div
                                    class="bg-white border border-[#CFCFCF] rounded text-center py-1 text-sm text-[#777]">
                                    --
                                </div>

                            </div>

                        </div>

                        {{-- RIGHT --}}
                        <div class="flex items-end h-full">

                            <a href="{{ route('jadwal-terapis.detail') }}"
                                class="inline-block text-center bg-[#66A9A6] hover:bg-[#5A9794] transition text-white text-sm px-6 py-2 rounded-full shadow no-underline">
                                Lihat Detail
                            </a>

                        </div>

                    </div>

                @endfor

            @endforelse

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

