@php
    $blogs = [
        [
            'date' => 'Aug 30, 2023',
            'title' => '10 Tips Mengerjakan Test TOEFL',
            'excerpt' => 'TOEFL (Test of English as a Foreign Language) yang merupakan ujian standar yang mengukur...',
            'image' => 'pink-girl.webp',
            'url' => 'https://englishvit.com/artikel/10-tips-mengerjakan-test-toefl-6002'
        ],
        [
            'date' => 'Jun 06, 2023',
            'title' => 'Perbedaan Used To dan Be Used To dan Contohnya dalam Bahasa Inggris',
            'excerpt' => 'Berikut perbedaaan used to and be used to beserta contohnya!',
            'image' => 'evbook.webp',
            'url' => 'https://englishvit.com/artikel/perbedaan-used-to-dan-be-used-to-dan-contohnya-dalam-bahasa-inggris-6157'
        ],
        [
            'date' => 'Jun 01, 2023',
            'title' => 'Contoh Soal TOEFL Structure Lengkap Beserta Pembahasannya',
            'excerpt' => 'Cari tahu contoh soal TOEFL structure lengkap beserta pembahasannya DISINI!',
            'image' => 'toefl-ev.webp',
            'url' => 'https://englishvit.com/artikel/contoh-soal-toefl-structure-lengkap-beserta-pembahasannya-6119'
        ]
    ];
@endphp

<section class="py-16 md:py-24 md:pt-2 pt-4 bg-white" id="blog">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        {{-- Section Title --}}
        <div class="text-center mb-6 md:mb-6">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Blog</h2>
            <p class="text-gray-600 text-sm md:text-base">Baca artikel seputar bahasa Inggris secara gratis di sini!</p>
        </div>

        {{-- Blog Slider (Mobile) / Grid (Desktop) --}}
        <div class="relative w-full mx-auto max-w-ev-container">
            <div class="overflow-hidden -mx-4 px-4 md:-mx-6 md:px-6 lg:mx-0 lg:px-0">
                <div id="blogSlider" class="flex lg:grid lg:grid-cols-3 gap-6 md:gap-8 lg:gap-12 overflow-x-auto lg:overflow-x-visible pb-8 pt-2 snap-x snap-mandatory lg:snap-none ev-hide-scroll scroll-smooth">
                    @foreach($blogs as $blog)
                        <a href="{{ $blog['url'] }}" target="_blank" class="group flex flex-col h-full bg-white transition-all duration-300 shrink-0 w-[260px] sm:w-[320px] lg:w-auto snap-start">
                            {{-- Image Container --}}
                            <div class="aspect-16/10 overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 shadow-sm group-hover:shadow-md transition-all duration-300">
                                <img src="{{ asset('assets/images/sections/blogs/' . $blog['image']) }}" 
                                     alt="{{ $blog['title'] }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>

                            {{-- Content --}}
                            <div class="flex flex-col flex-1 px-1">
                                <p class="text-[11px] md:text-sm text-gray-400 mb-1.5 md:mb-2 font-medium">{{ $blog['date'] }}</p>
                                <h3 class="text-sm md:text-lg lg:text-xl font-bold text-gray-900 mb-2 md:mb-3 group-hover:text-primary-7 transition-colors line-clamp-2 lg:line-clamp-2 lg:min-h-[56px] leading-tight">
                                    {{ $blog['title'] }}
                                </h3>
                                <p class="text-gray-600 text-[11px] md:text-sm lg:text-base mb-4 md:mb-6 line-clamp-2">
                                    {{ $blog['excerpt'] }}
                                </p>
                                
                                <div class="mt-auto flex items-center gap-2 text-primary-7 font-bold text-xs md:text-sm lg:text-base group-hover:gap-3 transition-all">
                                    <span>Selengkapnya</span>
                                    <svg class="w-3.5 h-3.5 md:w-4 md:h-4 lg:w-5 lg:h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
