@extends('main.layouts.app')

@section('title', 'Artikel & Tips - Mamina')

@section('content')

<div class=" min-h-screen py-12 px-5 font-nunito">

    <main class="max-w-6xl mx-auto">

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
                                d="M15 19l-7-7 7-7" />

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
                                d="M9 5l7 7-7 7" />

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
                        alt="Konsultasi Kehamilan">


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
                                       text-[12px]
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
                                    alt="author">

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
                        alt="Konsultasi Kehamilan">


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
                                       text-[12px]
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
                                    alt="author">

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
                                d="M15 19l-7-7 7-7" />

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
                                d="M9 5l7 7-7 7" />

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
                        alt="Perawatan Bayi">


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
                                       text-[12px]
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
                                    alt="author">

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
                        alt="Perawatan Bayi">


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
                                       text-[12px]
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
                                    alt="author">

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