@extends('main.layouts.app')

@section('title', 'Artikel & Tips - Mamina')

@section('content')

<div class="min-h-screen py-6 sm:py-12 px-4 sm:px-6 font-nunito">

    <main class="max-w-6xl mx-auto">

        {{-- =====================================================
             SECTION 2: KESEHATAN IBU HAMIL
        ====================================================== --}}
        <section class="mb-8 sm:mb-12">

            {{-- Heading --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">

                <div class="flex-grow">
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#2F2F2F] mb-2 sm:mb-3 font-fredoka">
                        Artikel Kesehatan Ibu Hamil
                    </h2>
                    <div class="w-full h-[1px] bg-[#CFC8B7]"></div>
                </div>

                {{-- Navigation --}}
                <div class="hidden sm:flex gap-2 sm:self-auto sm:pl-4 sm:mt-4">
                    <button class="w-8 h-8 rounded-full border border-[#E7B7B0] bg-[#FFFDEB] text-[#E7B7B0] flex items-center justify-center font-bold hover:bg-[#E7B7B0] hover:text-white transition shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="w-8 h-8 rounded-full border border-[#E7B7B0] bg-[#FFFDEB] text-[#E7B7B0] flex items-center justify-center font-bold hover:bg-[#E7B7B0] hover:text-white transition shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

            </div>

            {{-- Cards --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-5">

                {{-- CARD 1 --}}
                <div class="bg-[#DCE8E2] rounded-[20px] sm:rounded-[24px] p-4 sm:p-5 flex flex-col sm:flex-row gap-4 sm:gap-5 shadow-sm border border-transparent hover:border-[#BBCDCE] transition duration-300">
                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-full h-44 sm:w-[160px] sm:h-[180px] rounded-[16px] sm:rounded-[18px] object-cover flex-shrink-0"
                        alt="Konsultasi Kehamilan">

                    <div class="flex flex-col justify-between flex-grow">
                        <div>
                            <span class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-3 py-1 rounded-full w-fit mb-2 block font-semibold">
                                Kesehatan Ibu Hamil
                            </span>

                            <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                                <h3 class="text-[16px] sm:text-[17px] font-bold text-[#358D89] leading-snug mb-2 font-fredoka hover:text-[#4B9594] transition cursor-pointer">
                                    Konsultasi Kehamilan: Langkah Awal Menjamin Tumbuh Kembang Janin yang Optimal
                                </h3>
                            </a>

                            <p class="text-[#666] text-[12px] leading-relaxed mb-3 line-clamp-3 sm:line-clamp-none">
                                Konsultasi kehamilan membantu memantau kesehatan ibu dan perkembangan janin sejak dini. Pemeriksaan rutin meminimalkan deteksi risiko lebih cepat sehingga kehamilan dapat dijalani dengan lebih aman dan tenang.
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-auto pt-2 sm:pt-0 gap-2">
                            <div class="flex items-center gap-2">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="w-7 h-7 sm:w-8 sm:h-8 rounded-full object-cover" alt="author">
                                <div>
                                    <h4 class="font-bold text-[10px] text-[#2F2F2F] leading-none mb-1">Nadira Azzahra</h4>
                                    <p class="text-[9px] text-[#777] leading-none">Mamina Care Team</p>
                                </div>
                            </div>

                            <a href="{{ route('artikel.detail') }}" class="inline-block text-center bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-3.5 py-1.5 sm:px-4 sm:py-2 rounded-full text-[10px] font-semibold transition hover:-translate-y-0.5 shadow-sm hover:shadow-md no-underline flex-shrink-0">
                                Baca Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class="bg-[#DCE8E2] rounded-[20px] sm:rounded-[24px] p-4 sm:p-5 flex flex-col sm:flex-row gap-4 sm:gap-5 shadow-sm border border-transparent hover:border-[#BBCDCE] transition duration-300">
                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-full h-44 sm:w-[160px] sm:h-[180px] rounded-[16px] sm:rounded-[18px] object-cover flex-shrink-0"
                        alt="Konsultasi Kehamilan">

                    <div class="flex flex-col justify-between flex-grow">
                        <div>
                            <span class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-3 py-1 rounded-full w-fit mb-2 block font-semibold">
                                Kesehatan Ibu Hamil
                            </span>

                            <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                                <h3 class="text-[16px] sm:text-[17px] font-bold text-[#358D89] leading-snug mb-2 font-fredoka hover:text-[#4B9594] transition cursor-pointer">
                                    Konsultasi Kehamilan: Langkah Awal Menjamin Tumbuh Kembang Janin yang Optimal
                                </h3>
                            </a>

                            <p class="text-[#666] text-[12px] leading-relaxed mb-3 line-clamp-3 sm:line-clamp-none">
                                Konsultasi kehamilan membantu memantau kesehatan ibu dan perkembangan janin sejak dini. Pemeriksaan rutin meminimalkan deteksi risiko lebih cepat sehingga kehamilan dapat dijalani dengan lebih aman dan tenang.
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-auto pt-2 sm:pt-0 gap-2">
                            <div class="flex items-center gap-2">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="w-7 h-7 sm:w-8 sm:h-8 rounded-full object-cover" alt="author">
                                <div>
                                    <h4 class="font-bold text-[10px] text-[#2F2F2F] leading-none mb-1">Nadira Azzahra</h4>
                                    <p class="text-[9px] text-[#777] leading-none">Mamina Care Team</p>
                                </div>
                            </div>

                            <a href="{{ route('artikel.detail') }}" class="inline-block text-center bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-3.5 py-1.5 sm:px-4 sm:py-2 rounded-full text-[10px] font-semibold transition hover:-translate-y-0.5 shadow-sm hover:shadow-md no-underline flex-shrink-0">
                                Baca Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        {{-- =====================================================
             SECTION 3: PERAWATAN BAYI
        ====================================================== --}}
        <section class="mb-8 sm:mb-12">

            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">

                <div class="flex-grow">
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#2F2F2F] mb-2 sm:mb-3 font-fredoka">
                        Artikel Perawatan Bayi
                    </h2>
                    <div class="w-full h-[1px] bg-[#CFC8B7]"></div>
                </div>

                {{-- Navigation --}}
                <div class="hidden sm:flex gap-2 sm:self-auto sm:pl-4 sm:mt-4">
                    <button class="w-8 h-8 rounded-full border border-[#E7B7B0] bg-[#FFFDEB] text-[#E7B7B0] flex items-center justify-center font-bold hover:bg-[#E7B7B0] hover:text-white transition shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="w-8 h-8 rounded-full border border-[#E7B7B0] bg-[#FFFDEB] text-[#E7B7B0] flex items-center justify-center font-bold hover:bg-[#E7B7B0] hover:text-white transition shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>


            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-5">

                {{-- CARD 1 --}}
                <div class="bg-[#DCE8E2] rounded-[20px] sm:rounded-[24px] p-4 sm:p-5 flex flex-col sm:flex-row gap-4 sm:gap-5 shadow-sm border border-transparent hover:border-[#BBCDCE] transition duration-300">
                    <img
                        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 sm:w-[160px] sm:h-[180px] rounded-[16px] sm:rounded-[18px] object-cover flex-shrink-0"
                        alt="Perawatan Bayi">

                    <div class="flex flex-col justify-between flex-grow">
                        <div>
                            <span class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-3 py-1 rounded-full w-fit mb-2 block font-semibold">
                                Perawatan Bayi
                            </span>

                            <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                                <h3 class="text-[16px] sm:text-[17px] font-bold text-[#358D89] leading-snug mb-2 font-fredoka hover:text-[#4B9594] transition cursor-pointer">
                                    Perawatan Bayi yang Tepat: Panduan Dasar Menjaga Kesehatan dan Kenyamanan Si Kecil
                                </h3>
                            </a>

                            <p class="text-[#666] text-[12px] leading-relaxed mb-3 line-clamp-3 sm:line-clamp-none">
                                Perawatan bayi yang tepat membantu menjaga kesehatan, kebersihan, dan kenyamanan si kecil sejak hari pertama.
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-auto pt-2 sm:pt-0 gap-2">
                            <div class="flex items-center gap-2">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="w-7 h-7 sm:w-8 sm:h-8 rounded-full object-cover" alt="author">
                                <div>
                                    <h4 class="font-bold text-[10px] text-[#2F2F2F] leading-none mb-1">Nadira Azzahra</h4>
                                    <p class="text-[9px] text-[#777] leading-none">Mamina Care Team</p>
                                </div>
                            </div>

                            <a href="{{ route('artikel.detail') }}" class="inline-block text-center bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-3.5 py-1.5 sm:px-4 sm:py-2 rounded-full text-[10px] font-semibold transition hover:-translate-y-0.5 shadow-sm hover:shadow-md no-underline flex-shrink-0">
                                Baca Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD 2 --}}
                <div class="bg-[#DCE8E2] rounded-[20px] sm:rounded-[24px] p-4 sm:p-5 flex flex-col sm:flex-row gap-4 sm:gap-5 shadow-sm border border-transparent hover:border-[#BBCDCE] transition duration-300">
                    <img
                        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 sm:w-[160px] sm:h-[180px] rounded-[16px] sm:rounded-[18px] object-cover flex-shrink-0"
                        alt="Perawatan Bayi">

                    <div class="flex flex-col justify-between flex-grow">
                        <div>
                            <span class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-3 py-1 rounded-full w-fit mb-2 block font-semibold">
                                Perawatan Bayi
                            </span>

                            <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                                <h3 class="text-[16px] sm:text-[17px] font-bold text-[#358D89] leading-snug mb-2 font-fredoka hover:text-[#4B9594] transition cursor-pointer">
                                    Perawatan Bayi yang Tepat: Panduan Dasar Menjaga Kesehatan dan Kenyamanan Si Kecil
                                </h3>
                            </a>

                            <p class="text-[#666] text-[12px] leading-relaxed mb-3 line-clamp-3 sm:line-clamp-none">
                                Perawatan bayi yang tepat membantu menjaga kesehatan, kebersihan, dan kenyamanan si kecil sejak hari pertama.
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-auto pt-2 sm:pt-0 gap-2">
                            <div class="flex items-center gap-2">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="w-7 h-7 sm:w-8 sm:h-8 rounded-full object-cover" alt="author">
                                <div>
                                    <h4 class="font-bold text-[10px] text-[#2F2F2F] leading-none mb-1">Nadira Azzahra</h4>
                                    <p class="text-[9px] text-[#777] leading-none">Mamina Care Team</p>
                                </div>
                            </div>

                            <a href="{{ route('artikel.detail') }}" class="inline-block text-center bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-3.5 py-1.5 sm:px-4 sm:py-2 rounded-full text-[10px] font-semibold transition hover:-translate-y-0.5 shadow-sm hover:shadow-md no-underline flex-shrink-0">
                                Baca Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>

</div>

@endsection


@push('styles')

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