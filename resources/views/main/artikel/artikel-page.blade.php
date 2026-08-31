@extends('main.layouts.app')

@section('title', 'Artikel & Tips - Mamina')

@section('content')

<div class=" min-h-screen py-12 px-5 font-nunito">

    <main class="max-w-6xl mx-auto">

        {{-- =====================================================
             SECTION 1: ARTIKEL HARI INI
        ====================================================== --}}
        <section class="mb-10">

            {{-- Heading --}}
            <div class="mb-5">

                <h2 class="text-3xl font-bold text-[#2F2F2F] mb-3 font-fredoka">
                    Artikel Hari Ini
                </h2>

                <div class="w-full h-[1px] bg-[#CFC8B7]"></div>

            </div>


            {{-- Grid Layout --}}
            <div class="grid lg:grid-cols-[1.8fr_1fr] gap-6 items-start">


                {{-- =================================================
                     LEFT BIG CARD
                ================================================== --}}
                <div
                    class="bg-[#DCE8E2] rounded-[24px] shadow-sm overflow-hidden
                           border border-transparent hover:border-[#BBCDCE]
                           transition duration-300">

                    {{-- Image --}}
                    <img
                        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-[270px] object-cover"
                        alt="Manfaat Baby Spa"
                    >


                    {{-- Content --}}
                    <div class="p-5">

                        {{-- Meta --}}
                        <div class="flex items-center justify-between mb-4">

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-xs
                                       px-4 py-1.5
                                       rounded-full
                                       font-semibold">
                                Perawatan Bayi
                            </span>


                            <div
                                class="flex items-center gap-1.5
                                       text-[#7B7B7B]
                                       text-xs
                                       font-semibold">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z"
                                    />

                                </svg>

                                <span>27/02/2026</span>

                            </div>

                        </div>


                        {{-- Title --}}
                        <h3
                            class="text-[22px]
                                   leading-snug
                                   font-bold
                                   text-[#358D89]
                                   mb-3
                                   font-fredoka">

                            Manfaat Baby Spa untuk Bayi:
                            Rahasia Stimulasi Tumbuh Kembang
                            dan Kualitas Tidur yang Lebih Optimal

                        </h3>


                        {{-- Description --}}
                        <p
                            class="text-[#4D4D4D]
                                   text-sm
                                   leading-relaxed
                                   mb-5">

                            Baby spa membantu relaksasi dan stimulasi tumbuh
                            kembang bayi melalui pijat lembut dan terapi air
                            hangat. Manfaatnya meliputi ....

                        </p>


                        {{-- Author & Button --}}
                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-3">

                                <img
                                    src="https://randomuser.me/api/portraits/women/65.jpg"
                                    class="w-10 h-10 rounded-full object-cover"
                                    alt="author"
                                >

                                <div>

                                    <h4
                                        class="font-bold
                                               text-[#2F2F2F]
                                               text-xs
                                               leading-none
                                               mb-1">

                                        Nadira Azzahra

                                    </h4>

                                    <p
                                        class="text-[10px]
                                               text-[#777]
                                               leading-none">

                                        Mamina Care Team

                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="inline-block
                                       text-center
                                       bg-[#5AA6A5]
                                       hover:bg-[#4B9594]
                                       text-white
                                       px-5 py-2.5
                                       rounded-full
                                       text-xs
                                       font-semibold
                                       transition
                                       hover:-translate-y-0.5
                                       shadow-sm
                                       hover:shadow-md
                                       no-underline">

                                Baca Selanjutnya

                            </a>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     RIGHT SIDE LIST
                ================================================== --}}
                <div class="flex flex-col gap-4">


                    {{-- CARD 1 --}}
                    <div class="flex gap-4 items-start">

                        <img
                            src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                            class="w-[145px]
                                   h-[105px]
                                   rounded-[18px]
                                   object-cover
                                   flex-shrink-0
                                   shadow-sm"
                            alt="Konsultasi Kehamilan"
                        >

                        <div class="flex flex-col">

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       font-semibold">

                                Kesehatan Ibu Hamil

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[15px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-1.5
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Konsultasi Kehamilan:
                                    Langkah Awal Menjamin Tumbuh
                                    Kembang Janin yang Optimal

                                </h3>

                            </a>


                            <p
                                class="text-[#8A8A8A]
                                       text-[10px]
                                       font-semibold">

                                Fasya Dita | 27 Februari 2026

                            </p>

                        </div>

                    </div>



                    {{-- CARD 2 --}}
                    <div class="flex gap-4 items-start">

                        <img
                            src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                            class="w-[145px]
                                   h-[105px]
                                   rounded-[18px]
                                   object-cover
                                   flex-shrink-0
                                   shadow-sm"
                            alt="Konsultasi Kehamilan"
                        >

                        <div class="flex flex-col">

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       font-semibold">

                                Kesehatan Ibu Hamil

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[15px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-1.5
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Konsultasi Kehamilan:
                                    Langkah Awal Menjamin Tumbuh
                                    Kembang Janin yang Optimal

                                </h3>

                            </a>


                            <p
                                class="text-[#8A8A8A]
                                       text-[10px]
                                       font-semibold">

                                Fasya Dita | 27 Februari 2026

                            </p>

                        </div>

                    </div>



                    {{-- CARD 3 --}}
                    <div class="flex gap-4 items-start">

                        <img
                            src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                            class="w-[145px]
                                   h-[105px]
                                   rounded-[18px]
                                   object-cover
                                   flex-shrink-0
                                   shadow-sm"
                            alt="Konsultasi Kehamilan"
                        >

                        <div class="flex flex-col">

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       font-semibold">

                                Kesehatan Ibu Hamil

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[15px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-1.5
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Konsultasi Kehamilan:
                                    Langkah Awal Menjamin Tumbuh
                                    Kembang Janin yang Optimal

                                </h3>

                            </a>


                            <p
                                class="text-[#8A8A8A]
                                       text-[10px]
                                       font-semibold">

                                Fasya Dita | 27 Februari 2026

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =====================================================
             SECTION 2
        ====================================================== --}}
        <section class="mb-10">

            {{-- Heading --}}
            <div class="flex items-center justify-between mb-5">

                <div class="flex-grow">

                    <h2
                        class="text-3xl
                               font-bold
                               text-[#2F2F2F]
                               mb-3
                               font-fredoka">

                        Artikel Kesehatan Ibu Hamil

                    </h2>

                    <div class="w-full h-[1px] bg-[#CFC8B7]"></div>

                </div>


                {{-- Navigation --}}
                <div class="flex gap-2 pl-4 mt-4">

                    <button
                        class="w-8 h-8
                               rounded-full
                               border border-[#E7B7B0]
                               bg-[#FFFDEB]
                               text-[#E7B7B0]
                               flex items-center justify-center
                               font-bold
                               hover:bg-[#E7B7B0]
                               hover:text-white
                               transition
                               shadow-sm">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M15 19l-7-7 7-7"
                            />

                        </svg>

                    </button>


                    <button
                        class="w-8 h-8
                               rounded-full
                               border border-[#E7B7B0]
                               bg-[#FFFDEB]
                               text-[#E7B7B0]
                               flex items-center justify-center
                               font-bold
                               hover:bg-[#E7B7B0]
                               hover:text-white
                               transition
                               shadow-sm">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M9 5l7 7-7 7"
                            />

                        </svg>

                    </button>

                </div>

            </div>



            {{-- Cards --}}
            <div class="grid md:grid-cols-2 gap-5">


                {{-- CARD --}}
                <div
                    class="bg-[#DCE8E2]
                           rounded-[24px]
                           p-5
                           flex gap-5
                           shadow-sm
                           border border-transparent
                           hover:border-[#BBCDCE]
                           transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-[160px]
                               h-[180px]
                               rounded-[18px]
                               object-cover
                               flex-shrink-0"
                        alt="Konsultasi Kehamilan"
                    >


                    <div class="flex flex-col justify-between flex-grow">

                        <div>

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       block
                                       font-semibold">

                                Kesehatan Ibu Hamil

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[17px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-2
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Konsultasi Kehamilan:
                                    Langkah Awal Menjamin Tumbuh
                                    Kembang Janin yang Optimal

                                </h3>

                            </a>


                            <p
                                class="text-[#666]
                                       text-[10px]
                                       leading-relaxed
                                       mb-3">

                                Konsultasi kehamilan membantu memantau
                                kesehatan ibu dan perkembangan janin sejak
                                dini. Pemeriksaan rutin meminimalkan deteksi
                                risiko lebih cepat sehingga kehamilan dapat
                                dijalani dengan lebih aman dan tenang.

                            </p>

                        </div>


                        <div class="flex items-center justify-between mt-auto">

                            <div class="flex items-center gap-2">

                                <img
                                    src="https://randomuser.me/api/portraits/women/65.jpg"
                                    class="w-8 h-8 rounded-full object-cover"
                                    alt="author"
                                >

                                <div>

                                    <h4
                                        class="font-bold
                                               text-[10px]
                                               text-[#2F2F2F]
                                               leading-none
                                               mb-1">

                                        Nadira Azzahra

                                    </h4>

                                    <p
                                        class="text-[9px]
                                               text-[#777]
                                               leading-none">

                                        Mamina Care Team

                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="inline-block
                                       text-center
                                       bg-[#5AA6A5]
                                       hover:bg-[#4B9594]
                                       text-white
                                       px-4 py-2
                                       rounded-full
                                       text-[10px]
                                       font-semibold
                                       transition
                                       hover:-translate-y-0.5
                                       shadow-sm
                                       hover:shadow-md
                                       no-underline">

                                Baca Selanjutnya

                            </a>

                        </div>

                    </div>

                </div>



                {{-- CARD 2 --}}
                <div
                    class="bg-[#DCE8E2]
                           rounded-[24px]
                           p-5
                           flex gap-5
                           shadow-sm
                           border border-transparent
                           hover:border-[#BBCDCE]
                           transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-[160px]
                               h-[180px]
                               rounded-[18px]
                               object-cover
                               flex-shrink-0"
                        alt="Konsultasi Kehamilan"
                    >


                    <div class="flex flex-col justify-between flex-grow">

                        <div>

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       block
                                       font-semibold">

                                Kesehatan Ibu Hamil

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[17px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-2
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Konsultasi Kehamilan:
                                    Langkah Awal Menjamin Tumbuh
                                    Kembang Janin yang Optimal

                                </h3>

                            </a>


                            <p
                                class="text-[#666]
                                       text-[10px]
                                       leading-relaxed
                                       mb-3">

                                Konsultasi kehamilan membantu memantau
                                kesehatan ibu dan perkembangan janin sejak
                                dini. Pemeriksaan rutin meminimalkan deteksi
                                risiko lebih cepat sehingga kehamilan dapat
                                dijalani dengan lebih aman dan tenang.

                            </p>

                        </div>


                        <div class="flex items-center justify-between mt-auto">

                            <div class="flex items-center gap-2">

                                <img
                                    src="https://randomuser.me/api/portraits/women/65.jpg"
                                    class="w-8 h-8 rounded-full object-cover"
                                    alt="author"
                                >

                                <div>

                                    <h4
                                        class="font-bold
                                               text-[10px]
                                               text-[#2F2F2F]
                                               leading-none
                                               mb-1">

                                        Nadira Azzahra

                                    </h4>

                                    <p
                                        class="text-[9px]
                                               text-[#777]
                                               leading-none">

                                        Mamina Care Team

                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="inline-block
                                       text-center
                                       bg-[#5AA6A5]
                                       hover:bg-[#4B9594]
                                       text-white
                                       px-4 py-2
                                       rounded-full
                                       text-[10px]
                                       font-semibold
                                       transition
                                       hover:-translate-y-0.5
                                       shadow-sm
                                       hover:shadow-md
                                       no-underline">

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
        <section class="mb-10">

            <div class="flex items-center justify-between mb-5">

                <div class="flex-grow">

                    <h2
                        class="text-3xl
                               font-bold
                               text-[#2F2F2F]
                               mb-3
                               font-fredoka">

                        Artikel Perawatan Bayi

                    </h2>

                    <div class="w-full h-[1px] bg-[#CFC8B7]"></div>

                </div>


                <div class="flex gap-2 pl-4 mt-4">

                    <button
                        class="w-8 h-8
                               rounded-full
                               border border-[#E7B7B0]
                               bg-[#FFFDEB]
                               text-[#E7B7B0]
                               flex items-center justify-center
                               font-bold
                               hover:bg-[#E7B7B0]
                               hover:text-white
                               transition
                               shadow-sm">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M15 19l-7-7 7-7"
                            />

                        </svg>

                    </button>


                    <button
                        class="w-8 h-8
                               rounded-full
                               border border-[#E7B7B0]
                               bg-[#FFFDEB]
                               text-[#E7B7B0]
                               flex items-center justify-center
                               font-bold
                               hover:bg-[#E7B7B0]
                               hover:text-white
                               transition
                               shadow-sm">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M9 5l7 7-7 7"
                            />

                        </svg>

                    </button>

                </div>

            </div>



            <div class="grid md:grid-cols-2 gap-5">

                {{-- CARD 1 --}}
                <div
                    class="bg-[#DCE8E2]
                           rounded-[24px]
                           p-5
                           flex gap-5
                           shadow-sm
                           border border-transparent
                           hover:border-[#BBCDCE]
                           transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
                        class="w-[160px]
                               h-[180px]
                               rounded-[18px]
                               object-cover
                               flex-shrink-0"
                        alt="Perawatan Bayi"
                    >


                    <div class="flex flex-col justify-between flex-grow">

                        <div>

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       block
                                       font-semibold">

                                Perawatan Bayi

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[17px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-2
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Perawatan Bayi yang Tepat:
                                    Panduan Dasar Menjaga Kesehatan
                                    dan Kenyamanan Si Kecil

                                </h3>

                            </a>


                            <p
                                class="text-[#666]
                                       text-[10px]
                                       leading-relaxed
                                       mb-3">

                                Perawatan bayi yang tepat membantu menjaga
                                kesehatan, kebersihan, dan kenyamanan si kecil
                                sejak hari pertama.

                            </p>

                        </div>


                        <div class="flex items-center justify-between mt-auto">

                            <div class="flex items-center gap-2">

                                <img
                                    src="https://randomuser.me/api/portraits/women/65.jpg"
                                    class="w-8 h-8 rounded-full object-cover"
                                    alt="author"
                                >

                                <div>

                                    <h4
                                        class="font-bold
                                               text-[10px]
                                               text-[#2F2F2F]
                                               leading-none
                                               mb-1">

                                        Nadira Azzahra

                                    </h4>

                                    <p
                                        class="text-[9px]
                                               text-[#777]
                                               leading-none">

                                        Mamina Care Team

                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="inline-block
                                       text-center
                                       bg-[#5AA6A5]
                                       hover:bg-[#4B9594]
                                       text-white
                                       px-4 py-2
                                       rounded-full
                                       text-[10px]
                                       font-semibold
                                       transition
                                       hover:-translate-y-0.5
                                       shadow-sm
                                       hover:shadow-md
                                       no-underline">

                                Baca Selanjutnya

                            </a>

                        </div>

                    </div>

                </div>



                {{-- CARD 2 --}}
                <div
                    class="bg-[#DCE8E2]
                           rounded-[24px]
                           p-5
                           flex gap-5
                           shadow-sm
                           border border-transparent
                           hover:border-[#BBCDCE]
                           transition duration-300">

                    <img
                        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
                        class="w-[160px]
                               h-[180px]
                               rounded-[18px]
                               object-cover
                               flex-shrink-0"
                        alt="Perawatan Bayi"
                    >


                    <div class="flex flex-col justify-between flex-grow">

                        <div>

                            <span
                                class="border border-[#89A69B]
                                       text-[#7D8F87]
                                       text-[10px]
                                       px-3 py-1
                                       rounded-full
                                       w-fit
                                       mb-2
                                       block
                                       font-semibold">

                                Perawatan Bayi

                            </span>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="hover:no-underline">

                                <h3
                                    class="text-[17px]
                                           font-bold
                                           text-[#358D89]
                                           leading-snug
                                           mb-2
                                           font-fredoka
                                           hover:text-[#4B9594]
                                           transition
                                           cursor-pointer">

                                    Perawatan Bayi yang Tepat:
                                    Panduan Dasar Menjaga Kesehatan
                                    dan Kenyamanan Si Kecil

                                </h3>

                            </a>


                            <p
                                class="text-[#666]
                                       text-[10px]
                                       leading-relaxed
                                       mb-3">

                                Perawatan bayi yang tepat membantu menjaga
                                kesehatan, kebersihan, dan kenyamanan si kecil
                                sejak hari pertama.

                            </p>

                        </div>


                        <div class="flex items-center justify-between mt-auto">

                            <div class="flex items-center gap-2">

                                <img
                                    src="https://randomuser.me/api/portraits/women/65.jpg"
                                    class="w-8 h-8 rounded-full object-cover"
                                    alt="author"
                                >

                                <div>

                                    <h4
                                        class="font-bold
                                               text-[10px]
                                               text-[#2F2F2F]
                                               leading-none
                                               mb-1">

                                        Nadira Azzahra

                                    </h4>

                                    <p
                                        class="text-[9px]
                                               text-[#777]
                                               leading-none">

                                        Mamina Care Team

                                    </p>

                                </div>

                            </div>


                            <a
                                href="{{ route('artikel.detail') }}"
                                class="inline-block
                                       text-center
                                       bg-[#5AA6A5]
                                       hover:bg-[#4B9594]
                                       text-white
                                       px-4 py-2
                                       rounded-full
                                       text-[10px]
                                       font-semibold
                                       transition
                                       hover:-translate-y-0.5
                                       shadow-sm
                                       hover:shadow-md
                                       no-underline">

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

    /* =========================================
       LAPTOP COMPACT
    ========================================= */

    @media (min-width: 901px) {

        main {
            transform: scale(0.95);
            transform-origin: top center;
        }

    }


    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 900px) {

        .grid {
            gap: 18px !important;
        }

    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 640px) {

        .grid {
            grid-template-columns: 1fr !important;
        }

        .flex.items-start {
            flex-direction: column;
        }

    }

</style>

@endpush