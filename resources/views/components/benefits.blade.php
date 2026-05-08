@php
    $benefits = [
        [
            'image' => 'garansi.webp',
            'title' => 'Garansi 100% Uang Kembali',
            'desc' => 'Englishvit memberikan garansi 100% uang kembali untuk semua program kelas online yang Anda ikuti jika tidak sesuai dengan deskripsi program yang kami berikan.'
        ],
        [
            'image' => 'media.webp',
            'title' => 'Media Belajar Canggih',
            'desc' => 'Kelas di Englishvit didukung dengan media modern berkualitas yang mudah diakses melalui website dan applikasi belajar Englishvit.'
        ],
        [
            'image' => 'pengajar.webp',
            'title' => 'Pengajar Professional',
            'desc' => 'Semua pengajar di Englishvit memiliki background pendidikan yang berkorelasi dengan pendidikan Bahasa Inggris dan berpengalaman mengajar lebih dari 2 tahun.'
        ],
        [
            'image' => 'metode.webp',
            'title' => 'Kurikulum Terapan',
            'desc' => 'Kurikulum di semua kelas Englishvit adalah kurikulum terapan yang kami berdasarkan riset yang panjang. Semua materi yang diberikan sesuai dengan kebutuhan Anda dalam karir, pendidikan dan umum.'
        ],
        [
            'image' => 'terjangkau.webp',
            'title' => 'Biaya Sangat Terjangkau',
            'desc' => 'Englishvit terdaftar sebagai Lembaga Pendidikan Nonformal resmi dari Hanya di Englishvit kamu bisa bisa belajar bahasa Inggris kualitas Istimewa dengan harga yang bersahabat untuk semua.'
        ],
        [
            'image' => 'kurikulum.webp',
            'title' => 'Terverifikasi Dinas Pendidikan & DPMPTSP',
            'desc' => 'Englishvit terdaftar sebagai Lembaga Pendidikan Nonformal resmi dari <b>Dinas Pendidikan</b> dan telah diverifikasi oleh <b>DPMPTSP</b>. Izin No: <b>3/IZIN/0021/02/2025</b>, berlaku sejak <b>28 Januari 2025</b>.'
        ],
    ];
@endphp

<section class="pt-12 pb-4 md:pt-ev-7 md:pb-6 bg-white" id="benefits">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        
        {{-- Header --}}
        <div class="text-center mb-8 md:mb-10 mt-2">
            <h2 class="font-bold text-ev-h3 md:text-ev-h2 text-black-8 mb-3">
                Why Englishvit?
            </h2>
            <p class="text-sm md:text-base text-black-6 max-w-2xl mx-auto">
                Dari semua platform belajar bahasa Inggris yang ada, berikut alasan memilih Englishvit.
            </p>
        </div>

        {{-- Desktop Grid (Hidden on mobile/tablet) --}}
        <div class="hidden lg:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 items-stretch max-w-[1050px] mx-auto">
            @foreach($benefits as $benefit)
                <div class="bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 px-5 py-6 md:px-6 md:py-8 text-center flex flex-col items-center hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300">
                    <img src="{{ asset('assets/images/sections/benefits/' . $benefit['image']) }}" alt="{{ $benefit['title'] }}" class="h-24 w-auto object-contain mb-6">
                    <h4 class="font-bold text-[18px] md:text-ev-body-lg text-gray-900 mb-4">{{ $benefit['title'] }}</h4>
                    <p class="text-gray-600 text-ev-body-sm md:text-[15px] leading-relaxed">{!! $benefit['desc'] !!}</p>
                </div>
            @endforeach
        </div>

        {{-- Mobile/Tablet Slider (Visible until Desktop) --}}
        <div class="lg:hidden relative w-full mx-auto">
            <div class="overflow-hidden">
                <div id="benefitsCardsWrapper" class="relative flex flex-nowrap gap-4 overflow-x-auto pb-8 pt-4 snap-x snap-mandatory ev-hide-scroll scroll-smooth">
                    @foreach($benefits as $benefit)
                        <div class="bg-white rounded-xl shadow-[0_4px_20px_rgb(0,0,0,0.06)] border border-gray-50 px-5 py-8 text-center flex flex-col items-center shrink-0 w-[85%] sm:w-[300px] snap-start">
                            <img src="{{ asset('assets/images/sections/benefits/' . $benefit['image']) }}" alt="{{ $benefit['title'] }}" class="h-20 w-auto object-contain mb-5">
                            <h4 class="font-bold text-[18px] text-gray-900 mb-3">{{ $benefit['title'] }}</h4>
                            <p class="text-gray-600 text-ev-body-sm leading-relaxed">{!! $benefit['desc'] !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            
            {{-- Pagination Navigation (Dots) --}}
            <div id="benefitsCarouselDots" class="justify-center items-center gap-2 mt-0 mb-4 flex h-ev-2">
                @for($i = 0; $i < count($benefits); $i++)
                    <button class="rounded-full transition-all duration-300 {{ $i == 0 ? 'bg-info-7 w-6 h-2' : 'bg-gray-200 w-2 h-2' }}" data-index="{{ $i }}" aria-label="Slide {{ $i + 1 }}"></button>
                @endfor
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const benefitsSlider = document.getElementById("benefitsCardsWrapper");
        const benefitsDots = document.querySelectorAll("#benefitsCarouselDots button");
        
        if (!benefitsSlider || !benefitsDots.length) return;
        
        const updateBenefitsDots = (activeIndex) => {
            benefitsDots.forEach((dot, idx) => {
                dot.className = idx === activeIndex 
                    ? "rounded-full transition-all duration-300 bg-info-7 w-6 h-2"
                    : "rounded-full transition-all duration-300 bg-gray-200 w-2 h-2";
            });
        };

        let firstCard = benefitsSlider.children[0];
        let gap = parseFloat(window.getComputedStyle(benefitsSlider).gap) || 0;
        let cardWidth = firstCard ? firstCard.offsetWidth : 0;

        window.addEventListener('resize', () => {
            firstCard = benefitsSlider.children[0];
            gap = parseFloat(window.getComputedStyle(benefitsSlider).gap) || 0;
            cardWidth = firstCard ? firstCard.offsetWidth : 0;
        });

        benefitsSlider.addEventListener("scroll", () => {
            if (!cardWidth) return;
            const scrollIndex = Math.round(benefitsSlider.scrollLeft / (cardWidth + gap));
            
            // Check if we are at the end of the scroll
            const isAtEnd = benefitsSlider.scrollLeft + benefitsSlider.clientWidth >= benefitsSlider.scrollWidth - 10;
            const safeIndex = isAtEnd ? benefitsDots.length - 1 : Math.min(scrollIndex, benefitsDots.length - 1);
            
            updateBenefitsDots(safeIndex);
        });


        /* Navigation dots click */
        benefitsDots.forEach((dot) => {
            dot.addEventListener("click", function() {
                const targetIndex = parseInt(this.getAttribute("data-index"));
                const targetCard = benefitsSlider.children[targetIndex];
                
                if (targetCard) {
                    const scrollPos = targetCard.offsetLeft - benefitsSlider.offsetLeft;
                    const maxScroll = benefitsSlider.scrollWidth - benefitsSlider.clientWidth;
                    
                    benefitsSlider.scrollTo({
                        left: Math.min(scrollPos, maxScroll),
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>




