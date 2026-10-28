<style>
    .artikel {
        background-image: linear-gradient(90deg, #faded5 0%, #fff3ef 50%, #eaf8f6 100%);
        font-family: 'nunito', sans-serif;
    }
</style>

<section id="artikel" class="artikel py-6 px-4">
    <div class="max-w-6xl mx-auto">

        {{-- Heading --}}
        <div class="flex items-center gap-2 mb-3">

            <div class="w-6 h-6 rounded-full bg-[#FFC6B5]"></div>

            <span
                class="px-3 py-1 rounded-full
                bg-[#FFC6B5]
                text-[#B5706C]
                text-[12px]
                font-semibold
                uppercase
                tracking-widest">

                ARTIKEL PILIHAN

            </span>

        </div>


        {{-- Content --}}
        @php
            $hasCmsArtikels = isset($cmsArtikels) && $cmsArtikels->isNotEmpty();
            if ($hasCmsArtikels) {
                $featured = $cmsArtikels->firstWhere('is_featured', 1) ?? $cmsArtikels->first();
                $sideArtikels = $cmsArtikels->reject(fn($a) => $a->id == $featured->id)->take(3);
            }
        @endphp

        <div class="grid lg:grid-cols-[1.05fr_1fr] gap-4 items-start">
            @if($hasCmsArtikels && isset($featured))
                {{-- LEFT BIG CARD --}}
                <div class="bg-[#DCE8E2] rounded-[14px] shadow-md overflow-hidden h-fit">
                    <img
                        src="{{ !empty($featured->cover_image) ? (str_starts_with($featured->cover_image, 'http') ? $featured->cover_image : asset($featured->cover_image)) : 'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop' }}"
                        class="w-full h-[135px] object-cover"
                        alt="{{ $featured->title }}">

                    <div class="p-4">
                        <div class="flex items-center justify-between mb-3">
                            <span class="border border-[#89A69B] text-[#7D8F87] text-[11px] px-3 py-1 rounded-full">
                                {{ $featured->category ?? 'Perawatan Bayi' }}
                            </span>
                            <div class="flex items-center gap-1.5 text-[#7B7B7B] text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />
                                </svg>
                                <span>{{ !empty($featured->published_at) ? \Carbon\Carbon::parse($featured->published_at)->format('d/m/Y') : date('d/m/Y') }}</span>
                            </div>
                        </div>

                        <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                            <h3 class="text-[14px] leading-tight font-bold text-[#5E9B98] hover:text-[#4B9594] transition cursor-pointer mb-3">
                                {{ $featured->title }}
                            </h3>
                        </a>

                        <p class="text-[#4D4D4D] text-[12px] leading-relaxed mb-4">
                            {{ $featured->excerpt }}
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2.5">
                                <img
                                    src="{{ !empty($featured->author_photo) ? (str_starts_with($featured->author_photo, 'http') ? $featured->author_photo : asset($featured->author_photo)) : 'https://randomuser.me/api/portraits/women/65.jpg' }}"
                                    class="w-10 h-10 rounded-full object-cover"
                                    alt="author">
                                <div>
                                    <h4 class="font-semibold text-[#2F2F2F] text-xs">
                                        {{ $featured->author_name ?? 'Nadira Azzahra' }}
                                    </h4>
                                    <p class="text-[10px] text-[#777]">
                                        Mamina Care Team
                                    </p>
                                </div>
                            </div>

                            <a href="{{ route('artikel.detail') }}"
                                class="bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-4 py-2 rounded-full text-xs font-semibold transition inline-block text-center no-underline">
                                Baca Artikel
                            </a>
                        </div>
                    </div>
                </div>

                {{-- RIGHT SIDE LIST --}}
                <div class="flex flex-col gap-3.5">
                    @forelse($sideArtikels as $side)
                        <div class="flex gap-3 items-start">
                            <img
                                src="{{ !empty($side->cover_image) ? (str_starts_with($side->cover_image, 'http') ? $side->cover_image : asset($side->cover_image)) : 'https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop' }}"
                                class="w-[140px] h-[100px] rounded-xl object-cover flex-shrink-0"
                                alt="{{ $side->title }}">
                            <div class="flex flex-col justify-center">
                                <span class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-2.5 py-0.5 rounded-full w-fit mb-1.5">
                                    {{ $side->category ?? 'Kesehatan' }}
                                </span>
                                <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                                    <h3 class="text-[13px] leading-snug font-bold text-[#5E9B98] hover:text-[#4B9594] transition cursor-pointer mb-1.5 line-clamp-2">
                                        {{ $side->title }}
                                    </h3>
                                </a>
                                <p class="text-[#8A8A8A] text-[10px]">
                                    {{ $side->author_name ?? 'Mamina Team' }} | {{ !empty($side->published_at) ? \Carbon\Carbon::parse($side->published_at)->format('d F Y') : date('d F Y') }}
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse

                    <div class="flex justify-end mt-1">
                        <a href="{{ route('artikel') }}"
                            class="bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-5 py-2 rounded-full text-[13px] font-semibold transition inline-block text-center no-underline">
                            Baca Artikel Lain
                        </a>
                    </div>
                </div>
            @else
            {{-- LEFT BIG CARD --}}
            <div class="bg-[#DCE8E2] rounded-[14px] shadow-md overflow-hidden h-fit">

                {{-- Image --}}
                <img
                    src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
                    class="w-full h-[135px] object-cover"
                    alt="baby spa">

                {{-- Content --}}
                <div class="p-4">

                    {{-- Top Meta --}}
                    <div class="flex items-center justify-between mb-3">

                        <span
                            class="border border-[#89A69B] text-[#7D8F87] text-[11px] px-3 py-1 rounded-full">
                            Perawatan Bayi
                        </span>

                        <div class="flex items-center gap-1.5 text-[#7B7B7B] text-[11px]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-3.5 h-3.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.7"
                                    d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />

                            </svg>

                            <span>27/02/2026</span>

                        </div>

                    </div>


                    {{-- Title --}}
                    <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                        <h3 class="text-[14px] leading-tight font-bold text-[#5E9B98] hover:text-[#4B9594] transition cursor-pointer mb-3">
                            Manfaat Baby Spa untuk Bayi: Rahasia Stimulasi
                            Tumbuh Kembang dan Kualitas Tidur yang Lebih Optimal
                        </h3>
                    </a>


                    {{-- Desc --}}
                    <p class="text-[#4D4D4D] text-[12px] leading-relaxed mb-4">
                        Baby spa membantu relaksasi dan stimulasi tumbuh kembang
                        bayi melalui pijat lembut dan terapi air hangat.
                        Manfaatnya meliputi ....
                    </p>


                    {{-- Bottom --}}
                    <div class="flex items-center justify-between">

                        {{-- Author --}}
                        <div class="flex items-center gap-2.5">

                            <img
                                src="https://randomuser.me/api/portraits/women/65.jpg"
                                class="w-10 h-10 rounded-full object-cover"
                                alt="author">

                            <div>

                                <h4 class="font-semibold text-[#2F2F2F] text-xs">
                                    Nadira Azzahra
                                </h4>

                                <p class="text-[10px] text-[#777]">
                                    Mamina Care Team
                                </p>

                            </div>

                        </div>


                        {{-- Button --}}
                        <a href="{{ route('artikel.detail') }}"
                            class="bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-4 py-1.5 rounded-full text-[13px] font-semibold transition">
                            Baca Selanjutnya
                        </a>

                    </div>

                </div>

            </div>


            {{-- RIGHT SIDE LIST --}}
            <div class="flex flex-col gap-3.5">


                {{-- CARD 1 --}}
                <div class="flex gap-3 items-start">

                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-[140px] h-[100px] rounded-xl object-cover flex-shrink-0"
                        alt="artikel">

                    <div class="flex flex-col justify-center">

                        <span
                            class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-2.5 py-0.5 rounded-full w-fit mb-1.5">
                            Kesehatan Ibu Hamil
                        </span>

                        <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                            <h3 class="text-[13px] leading-snug font-bold text-[#5E9B98] hover:text-[#4B9594] transition cursor-pointer mb-1.5">
                                Konsultasi Kehamilan: Langkah Awal Menjamin
                                Tumbuh Kembang Janin yang Optimal
                            </h3>
                        </a>

                        <p class="text-[#8A8A8A] text-[10px]">
                            Fasya Dita | 27 Februari 2026
                        </p>

                    </div>

                </div>


                {{-- CARD 2 --}}
                <div class="flex gap-3 items-start">

                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-[140px] h-[100px] rounded-xl object-cover flex-shrink-0"
                        alt="artikel">

                    <div class="flex flex-col justify-center">

                        <span
                            class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-2.5 py-0.5 rounded-full w-fit mb-1.5">
                            Kesehatan Ibu Hamil
                        </span>

                        <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                            <h3 class="text-[13px] leading-snug font-bold text-[#5E9B98] hover:text-[#4B9594] transition cursor-pointer mb-1.5">
                                Konsultasi Kehamilan: Langkah Awal Menjamin
                                Tumbuh Kembang Janin yang Optimal
                            </h3>
                        </a>

                        <p class="text-[#8A8A8A] text-[10px]">
                            Fasya Dita | 27 Februari 2026
                        </p>

                    </div>

                </div>


                {{-- CARD 3 --}}
                <div class="flex gap-3 items-start">

                    <img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800&auto=format&fit=crop"
                        class="w-[140px] h-[100px] rounded-xl object-cover flex-shrink-0"
                        alt="artikel">

                    <div class="flex flex-col justify-center">

                        <span
                            class="border border-[#89A69B] text-[#7D8F87] text-[10px] px-2.5 py-0.5 rounded-full w-fit mb-1.5">
                            Kesehatan Ibu Hamil
                        </span>

                        <a href="{{ route('artikel.detail') }}" class="hover:no-underline">
                            <h3 class="text-[13px] leading-snug font-bold text-[#5E9B98] hover:text-[#4B9594] transition cursor-pointer mb-1.5">
                                Konsultasi Kehamilan: Langkah Awal Menjamin
                                Tumbuh Kembang Janin yang Optimal
                            </h3>
                        </a>

                        <p class="text-[#8A8A8A] text-[10px]">
                            Fasya Dita | 27 Februari 2026
                        </p>

                    </div>

                </div>


                {{-- Bottom Button --}}
                <div class="flex justify-end mt-1">

                    <a href="{{ route('artikel') }}"
                        class="bg-[#5AA6A5] hover:bg-[#4B9594] text-white px-5 py-2 rounded-full text-[13px] font-semibold transition inline-block text-center no-underline">
                        Baca Artikel Lain
                    </a>

                </div>

            </div>
            @endif

        </div>

    </div>
</section>