@php

    $recommendations = [
        [
            'image' => asset('assets/images/sections/rocomendation/boy.webp'),
            'badge' => 'English Test',
            'badge_color' => 'text-yellow-600 bg-yellow-100',
            'badge_icon' => '<img src="' . asset('assets/images/sections/options/live.webp') . '" alt="icon" class="w-4 h-4 mr-1 object-contain">',
            'title' => 'IELTS Bootcamp',
            'description' => 'Cocok untuk: Belajar strategi dan latihan menjawab soal IELTS',
            'price' => 'Rp332.000',
            'discount' => '60%',
            'original_price' => 'Rp830.000',
            'button_text' => 'Lihat Detail',
        ],
        [
            'image' => asset('assets/images/sections/rocomendation/boy.webp'),
            'badge' => 'English Test',
            'badge_color' => 'text-yellow-600 bg-yellow-100',
            'badge_icon' => '<img src="' . asset('assets/images/sections/options/live.webp') . '" alt="icon" class="w-4 h-4 mr-1 object-contain">',
            'title' => 'IELTS Mock Test',
            'description' => 'Cocok untuk: Cuma mau tahu level awal',
            'price' => 'Rp99.000',
            'discount' => null,
            'original_price' => null,
            'button_text' => 'Lihat Detail',
        ],
        [
            'image' => asset('assets/images/sections/rocomendation/yes.webp'),
            'badge' => 'Learning Package',
            'badge_color' => 'text-blue-600 bg-blue-100',
            'badge_icon' => '<img src="' . asset('assets/images/sections/options/lp.webp') . '" alt="icon" class="w-4 h-4 mr-1 object-contain">',
            'title' => 'Daily Conversation',
            'description' => 'Paket lengkap belajar bahasa Inggris percakapan sehari-hari.',
            'price' => 'Rp66.000',
            'discount' => '50%',
            'original_price' => 'Rp132.000',
            'button_text' => 'Lihat Kelas',
        ],
        [
            'image' => asset('assets/images/sections/rocomendation/girl.webp'),
            'badge' => 'Live Class',
            'badge_color' => 'text-yellow-600 bg-yellow-100',
            'badge_icon' => '<img src="' . asset('assets/images/sections/options/live.webp') . '" alt="icon" class="w-4 h-4 mr-1 object-contain">',
            'title' => 'Next Level English',
            'description' => 'Accelerating your English 10X faster and easier!!!',
            'price' => 'Rp412.500',
            'discount' => '50%',
            'original_price' => 'Rp825.000',
            'button_text' => 'Lihat Kelas',
        ],
    ];
@endphp

{{-- section program rekomendasi --}}
<section class="pt-ev-5 pb-ev-7" id="rekomendasi">
    <div class="container max-w-ev-container mx-auto px-4 md:px-6">
        
        {{-- garis pemisah --}}
        <hr class="border-t border-dashed border-[#D3D3D4] mb-ev-5 md:mb-ev-6">

        {{-- judul dan deskripsi --}}
        <div class="text-center mb-ev-6 mt-ev-9">
            <h3 class="font-bold text-ev-body-lg md:text-ev-h2 text-black-8 mb-2">
                Program Rekomendasi Terbaik
            </h3>
            <p class="text-black-6 text-ev-body-sm md:text-ev-body">
                Coba pengalaman belajar bahasa Inggris super seru dengan program rekomendasi Learning Consultant kami.
            </p>
        </div>

       
        <div class="flex flex-nowrap md:justify-center md:grid md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 overflow-x-auto pb-4 snap-x snap-mandatory mx-auto max-w-[1100px] hide-scroll">
            @foreach($recommendations as $program)
                <div class="bg-white rounded-2xl shadow border border-gray-100 overflow-hidden flex flex-col min-w-[260px] md:min-w-0 snap-center shrink-0 w-[260px] md:w-auto">
                    <!-- Image -->
                    <div class="relative h-36 sm:h-40 w-full bg-gray-200">
                        <img src="{{ $program['image'] }}" alt="{{ $program['title'] }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Content -->
                    <div class="p-4 sm:p-5 flex flex-col flex-grow">
                        <!-- Badge -->
                        <div class="mb-3">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] sm:text-xs font-semibold {{ $program['badge_color'] }}">
                                {!! $program['badge_icon'] !!}
                                {{ $program['badge'] }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-2">{{ $program['title'] }}</h3>

                        <!-- Description -->
                        <p class="text-gray-600 text-xs sm:text-sm mb-4 flex-grow flex items-start">
                            {{ $program['description'] }}
                        </p>

                        <!-- Pricing Section -->
                        <div class="mb-4">
                            <div class="text-lg sm:text-xl font-bold text-gray-900 mb-1">{{ $program['price'] }}</div>
                            @if($program['discount'])
                                <div class="flex items-center text-xs">
                                    <span class="bg-red-100 text-red-600 font-bold px-1 py-0.5 rounded text-[10px] mr-2">{{ $program['discount'] }}</span>
                                    <span class="text-gray-400 line-through text-[11px]">{{ $program['original_price'] }}</span>
                                </div>
                            @else
                                <div class="h-4 sm:h-5"></div>
                            @endif
                        </div>

                        <!-- Button -->
                        <button class="w-full bg-[#0d6efd] hover:bg-blue-700 text-white font-semibold text-sm py-2 px-3 rounded-xl transition duration-200">
                            {{ $program['button_text'] }}
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center items-center gap-2 mt-8 mb-8 hidden md:flex">
            <div class="w-8 h-2 bg-[#0d6efd] rounded-full"></div>
            <div class="w-2 h-2 bg-gray-200 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-200 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-200 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-200 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-200 rounded-full"></div>
        </div>

        <!-- View All Link -->
        <div class="text-center mt-8">
            <a href="#" class="inline-flex items-center font-bold text-[#0d6efd] hover:text-blue-800 text-lg">
                Lihat semua kelas
                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>

    </div>
</section>
<style>
    .hide-scroll::-webkit-scrollbar {
        display: none;
    }
    .hide-scroll {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>
