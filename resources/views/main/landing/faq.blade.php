<section class="bg-[#fffdeb] py-16 px-6 relative" id="faq-section">
    <div class="max-w-6xl mx-auto">

        {{-- Badge --}}
        <div class="flex justify-center mb-4">
            <span class="bg-[#F3EEDB] text-[#4A4A4A] px-5 py-2 rounded-full shadow text-sm font-semibold">
                FAQ
            </span>
        </div>

        {{-- Title --}}
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-[#2F2F2F] mb-3 font-fredoka">
                Ada pertanyaan?
            </h2>
            <p class="text-[#4A4A4A] text-lg font-nunito">
                Berikut jawaban atas pertanyaan yang paling umum diajukan
            </p>
        </div>

        {{-- FAQ Grid --}}
        <div class="grid md:grid-cols-2 gap-6 items-start font-nunito">

            {{-- FAQ Item 1 (Baby Spa bisa untuk usia berapa? - Active/Open by default) --}}
            <div class="faq-item bg-[#DDE8E2] rounded-2xl shadow-sm p-6 transition-all duration-300 cursor-pointer border border-transparent hover:border-[#BBCDCE]" data-active="true">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-[#2F2F2F] mb-4 faq-question transition-all duration-300">
                            Baby Spa bisa untuk usia berapa?
                        </h3>

                        <div class="faq-answer-wrapper overflow-hidden transition-all duration-300" style="max-height: 200px; opacity: 1;">
                            <p class="text-[#4A4A4A] leading-relaxed text-base">
                                Untuk pijat bayi saja bisa dari 0 bulan, jika sama
                                dengan berenang minimal usia 3 bulan dengan BB minimal
                                5 kg. Jadi, untuk baby spa karena paketannya berisi
                                pijat, gymball, scrub dan berenang bisa dimulai usia
                                3 bulan.
                            </p>
                        </div>
                    </div>

                    <button class="text-3xl text-[#2F2F2F] font-light focus:outline-none faq-btn w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/30 transition duration-300">
                        -
                    </button>
                </div>
            </div>

            {{-- FAQ Item 2 (Beda baby spa dengan pijat swim?) --}}
            <div class="faq-item bg-[#DDE8E2] rounded-2xl shadow-sm p-6 transition-all duration-300 cursor-pointer border border-transparent hover:border-[#BBCDCE]" data-active="false">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-[#2F2F2F] faq-question transition-all duration-300">
                            Beda baby spa dengan pijat swim?
                        </h3>

                        <div class="faq-answer-wrapper overflow-hidden transition-all duration-300" style="max-height: 0px; opacity: 0;">
                            <p class="text-[#4A4A4A] leading-relaxed text-base mt-4">
                                Pijat swim berfokus pada stimulasi motorik lewat berenang dan pijat ringan, sedangkan baby spa menyertakan sesi spa lengkap termasuk gymball, scrub/pijat lulur bayi, dan berenang.
                            </p>
                        </div>
                    </div>

                    <button class="text-3xl text-[#2F2F2F] font-light focus:outline-none faq-btn w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/30 transition duration-300">
                        +
                    </button>
                </div>
            </div>

            {{-- FAQ Item 3 (Syarat bayi boleh baby swim?) --}}
            <div class="faq-item bg-[#DDE8E2] rounded-2xl shadow-sm p-6 transition-all duration-300 cursor-pointer border border-transparent hover:border-[#BBCDCE]" data-active="false">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-[#2F2F2F] faq-question transition-all duration-300">
                            Syarat bayi boleh baby swim?
                        </h3>

                        <div class="faq-answer-wrapper overflow-hidden transition-all duration-300" style="max-height: 0px; opacity: 0;">
                            <p class="text-[#4A4A4A] leading-relaxed text-base mt-4">
                                Bayi minimal berusia 3 bulan, memiliki berat badan minimal 5 kg, leher sudah tegak (bisa menopang kepala sendiri), dan dalam kondisi sehat (tidak demam).
                            </p>
                        </div>
                    </div>

                    <button class="text-3xl text-[#2F2F2F] font-light focus:outline-none faq-btn w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/30 transition duration-300">
                        +
                    </button>
                </div>
            </div>

            {{-- FAQ Item 4 (Apakah Pijat Swim mendapat treatment gymball?) --}}
            <div class="faq-item bg-[#DDE8E2] rounded-2xl shadow-sm p-6 transition-all duration-300 cursor-pointer border border-transparent hover:border-[#BBCDCE]" data-active="false">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-[#2F2F2F] faq-question transition-all duration-300">
                            Apakah Pijat Swim mendapat treatment gymball?
                        </h3>

                        <div class="faq-answer-wrapper overflow-hidden transition-all duration-300" style="max-height: 0px; opacity: 0;">
                            <p class="text-[#4A4A4A] leading-relaxed text-base mt-4">
                                Tidak, treatment gymball biasanya hanya termasuk dalam paket lengkap Baby Spa atau sesi stimulasi tumbuh kembang khusus.
                            </p>
                        </div>
                    </div>

                    <button class="text-3xl text-[#2F2F2F] font-light focus:outline-none faq-btn w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/30 transition duration-300">
                        +
                    </button>
                </div>
            </div>

            {{-- FAQ Item 5 (Apakah demam boleh dipijat? - Muted/Disabled) --}}
            <div class="faq-item bg-[#DDE8E2] rounded-2xl shadow-sm p-6 transition-all duration-300 cursor-pointer border border-transparent hover:border-[#BBCDCE]" data-active="false">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-[#2F2F2F] faq-question transition-all duration-300">
                            Apakah demam boleh dipijat?
                        </h3>

                        <div class="faq-answer-wrapper overflow-hidden transition-all duration-300" style="max-height: 0px; opacity: 0;">
                            <p class="text-[#7A7A7A] leading-relaxed text-base mt-4">
                                Sebisa mungkin tidak dipijat saat bayi sedang demam, karena pijat dapat meningkatkan suhu tubuh. Tunggu hingga demamnya reda minimal 24 jam.
                            </p>
                        </div>
                    </div>

                    <button class="text-3xl text-[#7A7A7A] font-light focus:outline-none faq-btn w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/30 transition duration-300">
                        +
                    </button>
                </div>
            </div>

            {{-- FAQ Item 6 (Apakah demam boleh dipijat? - Normal) --}}
            <div class="faq-item bg-[#DDE8E2] rounded-2xl shadow-sm p-6 transition-all duration-300 cursor-pointer border border-transparent hover:border-[#BBCDCE]" data-active="false">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-[#2F2F2F] faq-question transition-all duration-300">
                            Apakah demam boleh dipijat?
                        </h3>

                        <div class="faq-answer-wrapper overflow-hidden transition-all duration-300" style="max-height: 0px; opacity: 0;">
                            <p class="text-[#4A4A4A] leading-relaxed text-base mt-4">
                                Sebisa mungkin tidak dipijat saat bayi sedang demam, karena pijat dapat meningkatkan suhu tubuh. Tunggu hingga demamnya reda minimal 24 jam.
                            </p>
                        </div>
                    </div>

                    <button class="text-3xl text-[#2F2F2F] font-light focus:outline-none faq-btn w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/30 transition duration-300">
                        +
                    </button>
                </div>
            </div>

        </div>

        {{-- Button --}}
        <div class="flex justify-center mt-12">
            <button id="btn-lihat-semua"
                class="bg-[#5AA6A5] hover:bg-[#4B9493] text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300 shadow-md hover:shadow-lg hover:-translate-y-0.5">
                Lihat Semua Pertanyaan
            </button>
        </div>

    </div>
</section>

@push('styles')
    <!-- Tailwind Play CDN for processing the user's Tailwind v4 classes -->
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
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll(".faq-item");
            const btnLihatSemua = document.getElementById("btn-lihat-semua");

            faqItems.forEach((item) => {
                const wrapper = item.querySelector(".faq-answer-wrapper");
                const h3 = item.querySelector("h3");
                const btn = item.querySelector(".faq-btn");

                // Click event listener
                item.addEventListener("click", function (e) {
                    // Prevent button clicking from triggering twice
                    if (e.target.tagName === 'BUTTON') return;

                    const isActive = item.getAttribute("data-active") === "true";

                    // Collapse all others
                    faqItems.forEach((other) => {
                        if (other !== item && other.getAttribute("data-active") === "true") {
                            other.setAttribute("data-active", "false");
                            const otherWrapper = other.querySelector(".faq-answer-wrapper");
                            const otherH3 = other.querySelector("h3");
                            const otherBtn = other.querySelector(".faq-btn");
                            
                            otherWrapper.style.maxHeight = "0px";
                            otherWrapper.style.opacity = "0";
                            otherH3.classList.remove("mb-4");
                            otherBtn.innerText = "+";
                        }
                    });

                    // Toggle current
                    if (isActive) {
                        item.setAttribute("data-active", "false");
                        wrapper.style.maxHeight = "0px";
                        wrapper.style.opacity = "0";
                        h3.classList.remove("mb-4");
                        btn.innerText = "+";
                    } else {
                        item.setAttribute("data-active", "true");
                        wrapper.style.maxHeight = wrapper.scrollHeight + "px";
                        wrapper.style.opacity = "1";
                        h3.classList.add("mb-4");
                        btn.innerText = "-";
                    }
                });

                // Toggle directly on button click as well
                btn.addEventListener("click", function (e) {
                    e.stopPropagation();
                    const isActive = item.getAttribute("data-active") === "true";

                    // Collapse all others
                    faqItems.forEach((other) => {
                        if (other !== item && other.getAttribute("data-active") === "true") {
                            other.setAttribute("data-active", "false");
                            const otherWrapper = other.querySelector(".faq-answer-wrapper");
                            const otherH3 = other.querySelector("h3");
                            const otherBtn = other.querySelector(".faq-btn");
                            
                            otherWrapper.style.maxHeight = "0px";
                            otherWrapper.style.opacity = "0";
                            otherH3.classList.remove("mb-4");
                            otherBtn.innerText = "+";
                        }
                    });

                    if (isActive) {
                        item.setAttribute("data-active", "false");
                        wrapper.style.maxHeight = "0px";
                        wrapper.style.opacity = "0";
                        h3.classList.remove("mb-4");
                        btn.innerText = "+";
                    } else {
                        item.setAttribute("data-active", "true");
                        wrapper.style.maxHeight = wrapper.scrollHeight + "px";
                        wrapper.style.opacity = "1";
                        h3.classList.add("mb-4");
                        btn.innerText = "-";
                    }
                });
            });

            // "Lihat Semua Pertanyaan" Button toggles all open
            if (btnLihatSemua) {
                btnLihatSemua.addEventListener("click", function () {
                    faqItems.forEach((item) => {
                        item.setAttribute("data-active", "true");
                        const wrapper = item.querySelector(".faq-answer-wrapper");
                        const h3 = item.querySelector("h3");
                        const btn = item.querySelector(".faq-btn");
                        
                        wrapper.style.maxHeight = wrapper.scrollHeight + "px";
                        wrapper.style.opacity = "1";
                        h3.classList.add("mb-4");
                        btn.innerText = "-";
                    });
                    
                    // Smoothly fade out the button since all are now visible and open
                    btnLihatSemua.style.opacity = "0";
                    btnLihatSemua.style.transform = "scale(0.95)";
                    btnLihatSemua.style.pointerEvents = "none";
                });
            }
        });
    </script>
@endpush